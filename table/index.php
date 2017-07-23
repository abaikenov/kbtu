<?php
$data = [
    [
        'name' => 'МНПЗ',
        'categories' => [
            [
                'name' => 'Газы',
                'categories' => [
                    [
                        'name' => 'ФББ',
                        'normal' => 3500,
                        'value' => mt_rand(0, 2 * 3500),
                    ],
                    [
                        'name' => 'ФПП',
                        'normal' => 60000,
                        'value' => mt_rand(0, 2 * 60000)
                    ]
                ]
            ],
            [
                'name' => 'Дизельные топлива',
                'categories' => [
                    [
                        'name' => 'ДТ-3-К5, тип 2',
                        'normal' => 5000,
                        'value' => mt_rand(0, 2 * 5000)
                    ],
                    [
                        'name' => 'СМТ (DMA), вид 3',
                        'normal' => 1750,
                        'value' => mt_rand(0, 2 * 1750)
                    ]
                ]
            ],
            [
                'name' => 'Мазуты',
                'categories' => [
                    [
                        'name' => 'Мазут 100, 3,00%',
                        'normal' => 37000,
                        'value' => mt_rand(0, 2 * 37000)
                    ]
                ]
            ],
            [
                'name' => 'Прочая продукция',
                'categories' => [
                    [
                        'name' => 'Сера газовая 9920 ком.',
                        'normal' => 10000,
                        'value' => mt_rand(0, 2 * 10000)
                    ],
                    [
                        'name' => 'Сера газовая 9998 жид.',
                        'normal' => 2000,
                        'value' => mt_rand(0, 2 * 2000)
                    ]
                ]
            ],
            [
                'name' => 'Тяжелые газойлы',
                'categories' => [
                    [
                        'name' => 'Фракция >420',
                        'normal' => 1000,
                        'value' => mt_rand(0, 2 * 1000)
                    ]
                ]
            ]
        ]
    ],
    [
        'name' => 'ОНПЗ',
        'categories' => [
            [
                'name' => 'Аром. углеводороды',
                'categories' => [
                    [
                        'name' => 'Конц. толуольный м. А',
                        'normal' => 40,
                        'value' => mt_rand(0, 2 * 40)
                    ]
                ]
            ],
            [
                'name' => 'Авто бензины',
                'categories' => [
                    [
                        'name' => 'АИ-92-К5',
                        'normal' => 1000,
                        'value' => mt_rand(0, 2 * 1000)
                    ]
                ]
            ],
            [
                'name' => 'Газы',
                'categories' => [
                    [
                        'name' => 'ФББ',
                        'normal' => 100,
                        'value' => mt_rand(0, 2 * 100)
                    ],
                    [
                        'name' => 'ФПП',
                        'normal' => 100,
                        'value' => mt_rand(0, 2 * 100)
                    ]
                ]
            ],
            [
                'name' => 'Дизельные топлива',
                'categories' => [
                    [
                        'name' => 'ДТ-3-К5, сорт С',
                        'normal' => 4000,
                        'value' => mt_rand(0, 2 * 4000)
                    ],
                    [
                        'name' => 'ДТ-А-К5, ЕВРО вид 3',
                        'normal' => 5000,
                        'value' => mt_rand(0, 2 * 5000)
                    ]
                ]
            ],
            [
                'name' => 'Мазуты',
                'categories' => [
                    [
                        'name' => 'ТСУ-380 (RMG-380), вид 1',
                        'normal' => 50000,
                        'value' => mt_rand(0, 2 * 50000),
                    ]
                ]
            ],
            [
                'name' => 'Прочая продукция',
                'categories' => [
                    [
                        'name' => 'Кислота сер. конт. 2-й сорт',
                        'normal' => 2000,
                        'value' => mt_rand(0, 2 * 2000)
                    ],
                    [
                        'name' => 'Кислота сер. техн. 2с',
                        'normal' => 150,
                        'value' => mt_rand(0, 2 * 150)
                    ],
                    [
                        'name' => 'Раствор жидкого стекла',
                        'normal' => 20,
                        'value' => mt_rand(0, 2 * 20)
                    ]
                ]
            ],
            [
                'name' => 'Сырье и п/ф (бит.)',
                'categories' => [
                    [
                        'name' => 'Гудрон (БМ)',
                        'normal' => 100,
                        'value' => mt_rand(0, 2 * 100)
                    ]
                ]
            ],
            [
                'name' => 'Сырье и п/ф (смаз.)',
                'categories' => [
                    [
                        'name' => 'Дист. масл. 4п.(1в + 2в)',
                        'normal' => 100,
                        'value' => mt_rand(0, 2 * 100)
                    ],
                    [
                        'name' => 'Комп. серы технической',
                        'normal' => 10,
                        'value' => mt_rand(0, 2 * 10)
                    ]
                ]
            ],
        ]
    ]
];

echo json_encode($data);