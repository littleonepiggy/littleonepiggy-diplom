<?php

namespace App\Http\Controllers;

use App\Models\Words;
use Illuminate\Http\Request;

class WordsController extends Controller
{
    public static function search ($query) {
        
        $words = Words::where(preg_match('/[\p{Cyrillic}]/u', $query) ? 'gloss' : 'kanji', 'LIKE', '%'.$query.'%')->get();
        foreach ($words as $word) {
            $word['short_kanji'] = min(array_values(array_map('trim', preg_split('/,/', $word->kanji))));
        }

        $words = $words->toArray();

        usort($words, function ($a, $b) { return strlen($a['short_kanji']) - strlen($b['short_kanji']); });
        return $words;
        
    }
}
