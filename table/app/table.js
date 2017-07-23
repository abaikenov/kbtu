'use strict';

var APP_DIR = 'app';
angular.module('app', []);

angular.module('app').component('tableData', {
    templateUrl: APP_DIR + '/table.html',
    controller: ['$http', function TableController($http) {
        var $ctrl = this;
        $http.get('/index.php').then(function (response) {
            $ctrl.groups = response.data;
        }, function (response) {
            // это в случае если еще не настроили apache или nginx
            $ctrl.groups = [
                {
                    name: 'МНПЗ',
                    categories: [
                        {
                            name: 'Газы',
                            categories: [
                                {
                                    name: 'ФББ',
                                    normal: 3500,
                                    value: 3177,
                                },
                                {
                                    name: 'ФПП',
                                    normal: 60000,
                                    value: 54006
                                }
                            ]
                        },
                        {
                            name: 'Дизельные топлива',
                            categories: [
                                {
                                    name: 'ДТ-3-К5, тип 2',
                                    normal: 5000,
                                    value: 493
                                },
                                {
                                    name: 'СМТ (DMA), вид 3',
                                    normal: 1750,
                                    value: 3501
                                }
                            ]
                        },
                        {
                            name: 'Мазуты',
                            categories: [
                                {
                                    name: 'Мазут 100, 3,00%',
                                    normal: 37000,
                                    value: 33335
                                }
                            ]
                        },
                        {
                            name: 'Прочая продукция',
                            categories: [
                                {
                                    name: 'Сера газовая 9920 ком.',
                                    normal: 10000,
                                    value: 996
                                },
                                {
                                    name: 'Сера газовая 9998 жид.',
                                    normal: 2000,
                                    value: 591
                                }
                            ]
                        },
                        {
                            name: 'Тяжелые газойлы',
                            categories: [
                                {
                                    name: 'Фракция >420',
                                    normal: 1000,
                                    value: 888
                                }
                            ]
                        }
                    ]
                },
                {
                    name: 'ОНПЗ',
                    categories: [
                        {
                            name: 'Аром. углеводороды',
                            categories: [
                                {
                                    name: 'Конц. толуольный м. А',
                                    normal: 40,
                                    value: 36
                                }
                            ]
                        },
                        {
                            name: 'Авто бензины',
                            categories: [
                                {
                                    name: 'АИ-92-К5',
                                    normal: 1000,
                                    value: 0
                                }
                            ]
                        },
                        {
                            name: 'Газы',
                            categories: [
                                {
                                    name: 'ФББ',
                                    normal: 100,
                                    value: 89
                                },
                                {
                                    name: 'ФПП',
                                    normal: 100,
                                    value: 0
                                }
                            ]
                        },
                        {
                            name: 'Дизельные топлива',
                            categories: [
                                {
                                    name: 'ДТ-3-К5, сорт С',
                                    normal: 4000,
                                    value: 8400
                                },
                                {
                                    name: 'ДТ-А-К5, ЕВРО вид 3',
                                    normal: 5000,
                                    value: 13993
                                }
                            ]
                        },
                        {
                            name: 'Мазуты',
                            categories: [
                                {
                                    name: 'ТСУ-380 (RMG-380), вид 1',
                                    normal: 50000,
                                    value: 44322,
                                }
                            ]
                        },
                        {
                            name: 'Прочая продукция',
                            categories: [
                                {
                                    name: 'Кислота сер. конт. 2-й сорт',
                                    normal: 2000,
                                    value: 153
                                },
                                {
                                    name: 'Кислота сер. техн. 2с',
                                    normal: 150,
                                    value: 334
                                },
                                {
                                    name: 'Раствор жидкого стекла',
                                    normal: 20,
                                    value: 38
                                }
                            ]
                        },
                        {
                            name: 'Сырье и п/ф (бит.)',
                            categories: [
                                {
                                    name: 'Гудрон (БМ)',
                                    normal: 100,
                                    value: 0
                                }
                            ]
                        },
                        {
                            name: 'Сырье и п/ф (смаз.)',
                            categories: [
                                {
                                    name: 'Дист. масл. 4п.(1в + 2в)',
                                    normal: 100,
                                    value: 0
                                },
                                {
                                    name: 'Комп. серы технической',
                                    normal: 10,
                                    value: 9
                                }
                            ]
                        },
                    ]
                }
            ];
        });

        $ctrl.getTotalItems = function (group) {
            var total = 0;
            group.categories.forEach(function (subcategory) {
                total += subcategory.categories.length;
            });
            return total;
        };
    }]
})
;