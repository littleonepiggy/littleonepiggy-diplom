<?php

namespace App\Http\Controllers;

use App\Models\Words;

class AdjectivesController extends Controller
{
    public static function conjugate ($adjective) {
        
        $adjectives = Words::whereRaw("kanji LIKE '%$adjective%' AND position LIKE '%keiyodoshi%' OR kanji LIKE '%$adjective%' AND position LIKE '%keiyoushi%';")->get();
        // исправить
        if(empty($adjectives[0])) $adjectives = Words::whereRaw("reading LIKE '%$adjective%' AND position LIKE '%keiyodoshi%' OR reading LIKE '%$adjective%' AND position LIKE '%keiyoushi%';")->get();

        if(!empty($adjectives[0])) {

            if (preg_match('/keiyoushi/', $adjectives[0]['position'])) {

                if(!empty($adjectives[0]['kanji'])) { $adjective = preg_replace('/^\s/', '', preg_split('/,/i', $adjectives[0]['kanji'], -1, PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE))[0]; }
                else { $adjective = preg_replace('/^\s/', '', preg_split('/,/i', $adjectives[0]['reading'], -1, PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE))[0]; }
                $adjective_stem = preg_replace('/' . mb_substr($adjective, -1) . '/', '', $adjective);
    
                return [
    
                    'plain' => [
                        'present' => $adjective,
                        'present_negative' => $adjective_stem . 'くない',
                        'past' => $adjective_stem . 'かった',
                        'past_negative' => $adjective_stem . 'くなかった',
                    ],
                    'polite' => [
                        'present' => $adjective . 'です',
                        'present_negative' => $adjective_stem . 'くありません',
                        'present_negative_second' => $adjective_stem . 'くないです',
                        'past' => $adjective_stem . 'かったです',
                        'past_negative' => $adjective_stem . 'くなかったです',
                        'past_negative_second' => $adjective_stem . 'くありませんでした',
                    ],
                    'type' => 'и-прилагательное',
    
                ];
    
            } else {
    
                $adjective = preg_replace('/^\s/', '', preg_split('/,/i', $adjectives[0]['kanji'], -1, PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE))[0];
    
                return [
    
                    'plain' => [
                        'present' => $adjective,
                        'present_negative' => $adjective . 'ではない',
                        'present_negative_second' => $adjective . 'じゃない',
                        'past' => $adjective . 'だった',
                        'past_negative' => $adjective . 'ではなかった',
                        'past_negative_second' => $adjective . 'じゃなかった',
                    ],
                    'polite' => [
                        'present' => $adjective . 'です',
                        'present_negative' => $adjective . 'ではありません',
                        'present_negative_second' => 'じゃありません',
                        'present_negative_third' => 'じゃないです',
                        'past' => $adjective . 'でした',
                        'past_negative' => $adjective . 'ではありませんでした',
                        'past_negative_second' => $adjective . 'じゃありませんでした',
                        'past_negative_third' => $adjective . 'じゃなかったです',
                    ],
                    'type' => 'на-прилагательное'
                ];
    
            }

        }

        return ['err' => 'Ваше прилагательное не найдено'];

    }
}
