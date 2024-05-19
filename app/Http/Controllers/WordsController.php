<?php

namespace App\Http\Controllers;

use App\Models\Words;
use Illuminate\Http\Request;

class WordsController extends Controller
{
    public static function search ($query) {
        
        $words = Words::where(preg_match('/[\p{Cyrillic}]/u', $query) ? 'gloss' : 'kanji', 'LIKE', '%'.$query.'%')->get();
        foreach ($words as $word) {
            
            $kanji = min(array_values(array_map('trim', preg_split('/,/', $word->kanji))));

            if ($kanji == '') {
                $kanji = min(array_values(array_map('trim', preg_split('/,/', $word->reading))));
            }

                $word['short_kanji'] = [ 'kanji' => $kanji, 'length' => strlen($kanji) ];
        }

        $words = $words->toArray();

        
        usort($words, function ($a, $b) { return $a['short_kanji']['length'] - $b['short_kanji']['length']; });
        return $words;
        
    }
}
