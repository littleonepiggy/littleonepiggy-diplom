<?php

namespace App\Http\Controllers;

use App\Models\Words;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class WordsController extends Controller
{
    public static function paginate($items, $perPage = 50, $page = null, $options = [])
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);
        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
    }

    public static function find($query) {
        // поиск слов содержащих кириллицу, если написано на кириллице — идёт поиск по значению слова,
        // если на другом — идёт поиск по кандзи.
        $words = Words::where(preg_match('/[\p{Cyrillic}]/u', $query) ? 'gloss' : 'kanji', 'LIKE', '%'.$query.'%')->get();

        foreach ($words as $word) {
            $word['gloss'] = self::delete_spaces($word['gloss']);
            $word['position'] = array_unique(preg_replace('/^\s/', '', preg_split('/,/', $word->position))); // !!! убрать цикл и выполнять regex уже в самом запросе
        }

        return $words;

    }

    public static function find_all($query) {
        return Words::where(preg_match('/[\p{Cyrillic}]/u', $query) ? 'gloss' : 'kanji', 'LIKE', '%'.$query.'%')->get();
    }
    public static function delete_spaces($word) {
        // делит строку со значениями и записывает это в массив, удаляя ненужные пробелы
        return preg_replace('/^\s/', '', preg_split('/\\d\\)/i', $word, -1, PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE));
    }
    public static function find_shortest($word, $column) {
        // отделяем иероглифы по запятым, удаляем пробелы, находим наименьший по длине 
        return min(array_values(array_map('trim', preg_split('/,/', $word[$column]))));
    }
    public static function search ($r, $query) {
        
        $words = self::find($query);
        // записываем в массив число ВСЕХ совпадающих слов
        $words_all = count(self::find_all($query)->toArray());

        foreach ($words as $word) {

            $kanji = self::find_shortest($word, 'kanji');
            // если нет кандзи (слово без них), то находим самый короткий кандзи 
            // но по столбцу со значениями слова
            if ($kanji == '') {
                $kanji = self::find_shortest($word, 'reading');
            }

            // записываем в переменную наименьший по длине кандзи и его длину
            $word['short_kanji'] = ['kanji' => $kanji, 'length' => strlen($kanji)];

        }

        // записываем в переменную преобразованные в массив слова
        $words = $words->toArray();
        
        // сортируем массив слов по длине самого короткого кандзи с помощью пользовательской сортировки
        usort($words, function ($a, $b) { return $a['short_kanji']['length'] - $b['short_kanji']['length']; });
        
        // пагинация по 50 слов на страницу, используется взятая из laravel функция paginate
        $words = self::paginate($words, 50)->toArray()['data'];

        $page = $r->query('page');
        $page <= 0 || $page == null ? $page = 1 : '';
        $words_number = $page == 1 ? count($words) : ($page - 1) * 50 + count($words); 

        return ['words' => $words, 'words_all' => $words_all, 'page' => $page, 'words_number' => $words_number];
        
    }
}
