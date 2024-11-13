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

        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, ['path' => Paginator::resolveCurrentPath()]);
    }

    public static function find($query) {

        // поиск слов 
        $query = mb_convert_case($query, MB_CASE_LOWER, "UTF-8");
        $words = Words::where(preg_match('/[\p{Katakana}\p{Hiragana}\p{Han}]/u', $query) ? 'kanji' : 'gloss', 'LIKE', '%'.$query.'%')->get();

        return $words;

    }

    public static function delete_spaces($word) {
        // делит строку со значениями и записывает это в массив, удаляя ненужные пробелы
        return preg_replace('/^\s/', '', preg_split('/\\d\\)/i', $word, -1, PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE));
    }
 
    public static function search ($r, $query) {
        
        $words = self::find($query);

        // записываем в переменную преобразованные в массив слова
        $words = $words->toArray();
        
        // usort($words, function ($a, $b) { return $a['short_kanji']['length'] - $b['short_kanji']['length']; });
        
        // сортируем массив "значения"
        usort($words, function($a, $b) use ($query) {
            $idx_a = strpos($a['gloss'], $query) === false ? PHP_INT_MAX : strpos($a['gloss'], $query);
            $idx_b = strpos($b['gloss'], $query) === false ? PHP_INT_MAX : strpos($b['gloss'], $query);
            return $idx_a - $idx_b;
        });

        // пагинация по 50 слов на страницу, используется функция paginate из laravel
        $words = self::paginate($words, 50);

        // обновляем 50 слов, фильтруя поля "значение" и "часть речи"
        $words->getCollection()->transform(function ($word) {

            $word['gloss'] = self::delete_spaces($word['gloss']);
            $word['position'] = array_unique(preg_replace('/^\s/', '', preg_split('/,/', $word['position'])));

            return $word;

        });

        return $words;
        
    }
}
