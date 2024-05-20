<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\WordsController;
use App\Models\Words;

class VerbsController extends Controller
{
    public static function conjugate ($verb) {

        // проверяем, глагол ли это по окончанию слова
        if (preg_match('/(う|く|ぐ|す|ず|つ|ぬ|む|る)$/u', $verb)) {

            // находим окончание глагола
            $verb_ending = mb_substr($verb, -1);
            // находим слова содержащие этот глагол чтобы удостовериться что он существует,
            // выбираем первое попавшееся
            $word = Words::where('kanji', 'LIKE', '%'.$verb.'%')->get()[0] ?? null;

            // если слово найдено
            if ($word) {

                // проверяем, какого типа глагол: годан или итидан
                if(preg_match('/Godan\s|Ichidan /i', $word['position'])) {

                    $verb_stem = preg_replace('/' . $verb_ending . '/', '', $verb);
                    
                    if(preg_match('/^Godan\s/i', $word['position'])) { $word['type'] = 'godan'; }
                    else { $word['type'] = 'ichidan'; }

                    if ($word['type'] == 'ichidan') {

                        return [
                            'plain' => [
                                'dictionary' => $verb_stem . 'る',
                                'dictionary_negative' => $verb_stem . 'ない',
                                'volitional' => $verb_stem . 'よう',
                                'volitional_negative' => $verb_stem . 'まい', // https://japanese.stackexchange.com/questions/487/does-ou-you-mashou-conjugation-have-a-negative-form
                                'presumptive' => 'るだろう',
                                'presumptive negative' => 'ないだろう',
                                'imperative' => 'ろ',
                                'imperative_negative' => 'るな',
                                'past' => $verb_stem . 'た',
                                'past_negative' => $verb_stem . 'なかった',
                                'potential' => 'られる', // иногда только れる
                                'potential_negative' => 'られない',
                                'passive' => 'られる',
                                'passive_negative' => 'られない',
                                'causative' => 'させる',
                                'causative_negative' => 'させない',
                                'te-form' => 'て',
                                'conjunctive' => $verb_stem,
                            ],
                            'polite' => [
                                'dictionary' => $verb_stem . 'ます',
                                'dictionary_negative' => $verb_stem . 'ません',
                                'volitional' => $verb_stem . 'ましょう',
                                'volitional_negative' => $verb_stem . 'ますまい',
                                'presumptive' => 'ますでしょう', // очень вежливая форма
                                'presumptive negative' => 'ませんでしょう',
                                'imperative' => 'てください',
                                'imperative_negative' => 'ないでください',
                                'past' => $verb_stem . 'ました',
                                'past_negative' => $verb_stem . 'ませんでした',
                                'potential' => 'られます', // 
                                'potential_negative' => 'られません',
                                'passive' => 'られます',
                                'passive_negative' => 'られません',
                                'causative' => 'させます',
                                'causative_negative' => 'させません',
                            ]
                        ];
                    }
                    return $verb;
                }
            }
        }
    }
}
