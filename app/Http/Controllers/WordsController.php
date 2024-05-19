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
    public static function search ($query, $page) {
        
        // поиск слов содержащих кириллицу, если написано на кириллице — идёт поиск по значению слова,
        // если на японском — идёт поиск по кандзи.
        $words = Words::where(preg_match('/[\p{Cyrillic}]/u', $query) ? 'gloss' : 'kanji', 'LIKE', '%'.$query.'%')->get();
        // записываем в массив число ВСЕХ совпадающих слов
        $wordsAll = count(Words::where(preg_match('/[\p{Cyrillic}]/u', $query) ? 'gloss' : 'kanji', 'LIKE', '%'.$query.'%')
        ->get()->toArray());

        foreach ($words as $word) {
            // отделяем иероглифы по запятым, удаляем пробелы, находим наименьший по длине 
            $kanji = min(array_values(array_map('trim', preg_split('/,/', $word->kanji))));

            // если нет кандзи (слово без них), то делаем всё то же самое но со значениями слова
            if ($kanji == '') {
                $kanji = min(array_values(array_map('trim', preg_split('/,/', $word->reading))));
            }

            // записываем в переменную наименьший по длине кандзи и его длину
            $word['short_kanji'] = ['kanji' => $kanji, 'length' => strlen($kanji)];
            // записываем в переменную с частями речи уникальный массив с разделёнными по запятым и убранным
            // в начале пробелом данными
            $word['position'] = array_unique(preg_replace('/^\s/', '', preg_split('/,/', $word->position)));
        }

        // записываем в переменную преобразованные в массив слова
        $words = $words->toArray();
        
        // сортируем массив слов по длине самого короткого кандзи с помощью пользовательской сортировки
        usort($words, function ($a, $b) { return $a['short_kanji']['length'] - $b['short_kanji']['length']; });
        
        // пагинация по 50 слов на страницу, используется взятая из ларавеля функция paginate
        $words = self::paginate($words, 50)->toArray()['data'];

        return ['words' => $words, 'wordsAll' => $wordsAll];
        
    }
}
