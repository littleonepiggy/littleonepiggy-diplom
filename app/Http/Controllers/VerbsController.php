<?php

namespace App\Http\Controllers;

use App\Models\Words;



class VerbsController extends Controller
{
    public static function conjugate ($verb) {

        require __DIR__ . '/../../VerbsTypes.php';

        // проверяем, глагол ли это по окончанию слова
        if (!preg_match('/(う|く|ぐ|す|ず|つ|ぬ|む|る)$/u', $verb)) {
            return ['err' => 'Пожалуйста, введите глагол на японском языке'];
        }

        // находим слова содержащие этот глагол чтобы удостовериться что он существует,
        // выбираем первое попавшееся
        $word = Words::where('kanji', 'LIKE', '%'.$verb.'%')->get()[0] ?? null;
            
        // если слово найдено
        if (!$word) {
            return ['err' => 'Глагол не найден'];
        }

        // проверяем, какого типа глагол: годан или итидан
        if(!preg_match('/Godan\s|Ichidan /i', $word['position'])) {
            return ['err' => 'Ошибка'];
        }

        // находим окончание глагола
        $verb_ending = mb_substr($verb, -1);

        // получаем корень глагола путём отсечения окончания
        $verb_stem = preg_replace('/' . $verb_ending . '/', '', $verb);

        // если это годан глагол, то спрягаем как годан
        if(preg_match('/Godan/i', $word['position'])) { $word['type'] = 'годан'; }
        else { $word['type'] = 'ичидан'; }
        
        $verb_plain = array_map(function ($el) use ($verb_stem) { return $verb_stem . $el; }, $verb_types[$word['type']][$verb_ending]['plain'] );
        $verb_polite = array_map(function ($el) use ($verb_stem) { return $verb_stem . $el; }, $verb_types[$word['type']][$verb_ending]['polite'] );
        
        $verb_listed = [
            'plain' => $verb_plain, 
            'polite' => $verb_polite,
            'other' => [
                ...$verb_types[$word['type']][$verb_ending]['other'],
                'type' => $word['type'],
                'verb_ending' => $verb_ending,
                'verb' => $verb,
                'verb_stem' => $verb_stem,
                'gloss' => $word['gloss'],
            ],
            
        ];

        return $verb_listed;

    }
}
