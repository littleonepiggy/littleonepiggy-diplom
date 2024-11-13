<?php

namespace App;

    $verb_types = [

        'ичидан' => [
            'る' => [
                'plain' => [
                    'dictionary' => 'る', 
                    'dictionary_negative' => 'ない',
                    'volitional' => 'よう',
                    'volitional_negative' => 'まい', // https://japanese.stackexchange.com/questions/487/does-ou-you-mashou-conjugation-have-a-negative-form
                    // 'presumptive' => 'るだろう', не то чтобы это форма спряжения
                    // 'presumptive negative' => 'ないだろう', 
                    'imperative' => 'ろ',
                    'imperative_negative' => 'るな',
                    'past' => 'た',
                    'past_negative' => 'なかった',
                    'potential' => 'られる', // иногда только れる
                    'potential_negative' => 'られない',
                    'passive' => 'られる',
                    'passive_negative' => 'られない',
                    'causative' => 'させる',
                    'causative_negative' => 'させない',
                ],
                'polite' => [
                    'dictionary' => 'ます',
                    'dictionary_negative' => 'ません',
                    'volitional' => 'ましょう',
                    'volitional_negative' => 'ますまい',
                    // 'presumptive' => 'ますでしょう', // очень вежливая форма
                    // 'presumptive negative' => 'ませんでしょう',
                    'imperative' => 'てください',
                    'imperative_negative' => 'ないでください',
                    'past' => 'ました',
                    'past_negative' => 'ませんでした',
                    'potential' => 'られます', // 
                    'potential_negative' => 'られません',
                    'passive' => 'られます',
                    'passive_negative' => 'られません',
                    'causative' => 'させます',
                    'causative_negative' => 'させません',
                ],
                'other' => [
                    'te-form' => 'て'
                ],
            ]
        ],
        'годан' => [
            'く' => [
                'plain' => [
                    'dictionary' => 'く', 
                    'dictionary_negative' => 'かない',
                    'volitional' => 'こう',
                    'volitional_negative' => 'くまい', // https://japanese.stackexchange.com/questions/487/does-ou-you-mashou-conjugation-have-a-negative-form
                    // 'presumptive' => 'るだろう', не то чтобы это форма спряжения
                    // 'presumptive negative' => 'ないだろう', 
                    'imperative' => 'け',
                    'imperative_negative' => 'くな',
                    'past' => 'いた',
                    'past_negative' => 'かなかった',
                    'potential' => 'ける', 
                    'potential_negative' => 'けない',
                    'passive' => 'かられる',
                    'passive_negative' => 'かられない',
                    'causative' => 'かせる',
                    'causative_negative' => 'かせない',
                ],
                'polite' => [
                    'dictionary' => 'きます',
                    'dictionary_negative' => 'きません',
                    'volitional' => 'きましょう',
                    'volitional_negative' => 'くますまい',
                    // 'presumptive' => 'ますでしょう', // очень вежливая форма
                    // 'presumptive negative' => 'ませんでしょう',
                    'imperative' => 'きなさい',
                    'imperative_negative' => 'かないでください',
                    'past' => 'きました',
                    'past_negative' => 'きませんでした',
                    'potential' => 'かられます', // 
                    'potential_negative' => 'かられません',
                    'passive' => 'けられます',
                    'passive_negative' => 'けられません',
                    'causative' => 'かせます',
                    'causative_negative' => 'かせません',
                ], 
                'other' => [
                    'te-form' => 'いて',
                    'conjunctive' => [
                        'jishoukei' => ['く', 'словарная форма', '辞書形'], 
                        'renyoukei' => ['こ', 'соединительная форма', '連用形'],
                        'mizenkei' => ['か', 'отрицательная форма', '未然形'],
                        'meireikei' => ['け', 'повелительная форма', '命令系'],
                        'suiryoukei' => ['こ', 'волевая форма', '推量形'],
                    ],
                ]
            ],
            'す' => [
                'plain' => [
                    'dictionary' => 'す', 
                    'dictionary_negative' => 'さない',
                    'volitional' => 'そう',
                    'volitional_negative' => 'すまい', // https://japanese.stackexchange.com/questions/487/does-ou-you-mashou-conjugation-have-a-negative-form
                    // 'presumptive' => 'るだろう', не то чтобы это форма спряжения
                    // 'presumptive negative' => 'ないだろう', 
                    'imperative' => 'せ',
                    'imperative_negative' => 'すな',
                    'past' => 'した',
                    'past_negative' => 'さなかった',
                    'potential' => 'せる', 
                    'potential_negative' => 'せない',
                    'passive' => 'さられる',
                    'passive_negative' => 'さられない',
                    'causative' => 'させる',
                    'causative_negative' => 'させない',
                ],
                'polite' => [
                    'dictionary' => 'します',
                    'dictionary_negative' => 'しません',
                    'volitional' => 'しましょう',
                    'volitional_negative' => 'すますまい',
                    // 'presumptive' => 'ますでしょう', // очень вежливая форма
                    // 'presumptive negative' => 'ませんでしょう',
                    'imperative' => 'しなさい',
                    'imperative_negative' => 'さないでください',
                    'past' => 'しました',
                    'past_negative' => 'しませんでした',
                    'potential' => 'さられます', // 
                    'potential_negative' => 'さられません',
                    'passive' => 'せられます',
                    'passive_negative' => 'せられません',
                    'causative' => 'させます',
                    'causative_negative' => 'させません',
                ], 
                'other' => [
                    'te-form' => 'して',
                    'conjunctive' => [
                        'jishoukei' => ['す', 'словарная форма', '辞書形'], 
                        'renyoukei' => ['し', 'соединительная форма', '連用形'],
                        'mizenkei' => ['さ', 'отрицательная форма', '未然形'],
                        'meireikei' => ['せ', 'повелительная форма', '命令系'],
                        'suiryoukei' => ['そ', 'волевая форма', '推量形'],
                    ],
                ]
            ],
            'つ' => [
                'plain' => [
                    'dictionary' => 'つ', 
                    'dictionary_negative' => 'たない',
                    'volitional' => 'とう',
                    'volitional_negative' => 'つまい', // https://japanese.stackexchange.com/questions/487/does-ou-you-mashou-conjugation-have-a-negative-form
                    // 'presumptive' => 'るだろう', не то чтобы это форма спряжения
                    // 'presumptive negative' => 'ないだろう', 
                    'imperative' => 'て',
                    'imperative_negative' => 'つな',
                    'past' => 'った',
                    'past_negative' => 'たなかった',
                    'potential' => 'てる', 
                    'potential_negative' => 'てない',
                    'passive' => 'たられる',
                    'passive_negative' => 'たられない',
                    'causative' => 'たせる',
                    'causative_negative' => 'たせない',
                ],
                'polite' => [
                    'dictionary' => 'ちます',
                    'dictionary_negative' => 'ちません',
                    'volitional' => 'ちましょう',
                    'volitional_negative' => 'つますまい',
                    // 'presumptive' => 'ますでしょう', // очень вежливая форма
                    // 'presumptive negative' => 'ませんでしょう',
                    'imperative' => 'ちなさい',
                    'imperative_negative' => 'たないでください',
                    'past' => 'ちました',
                    'past_negative' => 'ちませんでした',
                    'potential' => 'たられます', // 
                    'potential_negative' => 'たられません',
                    'passive' => 'てられます',
                    'passive_negative' => 'てられません',
                    'causative' => 'たせます',
                    'causative_negative' => 'たせません',
                ], 
                'other' => [
                    'te-form' => 'して',
                    'conjunctive' => [
                        'jishoukei' => ['つ', 'словарная форма', '辞書形'], 
                        'renyoukei' => ['ち', 'соединительная форма', '連用形'],
                        'mizenkei' => ['た', 'отрицательная форма', '未然形'],
                        'meireikei' => ['て', 'повелительная форма', '命令系'],
                        'suiryoukei' => ['と', 'волевая форма', '推量形'],
                    ],
                ]
            ],
        ]
    
    ];