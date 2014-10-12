<?php

namespace Controller;

class Index extends AbstractController
{

    public function init()
    {
        $this->view['page'] = $_REQUEST['action'];
    }

    public function indexAction()
    {
    }

    public function mozaikaAction()
    {
    }

    public function galleryAction()
    {
        $images = [
            [
                'thumbnail' => '1-180x135.jpg',
                'filename' => '1.jpg',
                'height' => '138',
            ],
            [
                'thumbnail' => '2-180x135.jpg',
                'filename' => '2.jpg',
                'height' => '138',
            ],
            [
                'thumbnail' => '9-180x136.jpg',
                'filename' => '9.jpg',
                'height' => '138',
            ],
            [
                'thumbnail' => '6hih-180x135.jpg',
                'filename' => '6hih.jpg',
                'height' => '138',
            ],
            [
                'thumbnail' => '52hih-180x134.jpg',
                'filename' => '52hih.jpg',
                'height' => '138',
            ],
            [
                'thumbnail' => '124a-180x288.jpg',
                'filename' => '124a.jpg',
                'height' => '288',
            ],
            [
                'thumbnail' => '37-180x288.jpg',
                'filename' => '37.jpg',
                'height' => '288',
            ],
            [
                'thumbnail' => '125-180x288.jpg',
                'filename' => '125.jpg',
                'height' => '288',
            ],
            [
                'thumbnail' => '14-180x288.jpg',
                'filename' => '14.jpg',
                'height' => '288',
            ],
            [
                'thumbnail' => '126-180x294.jpg',
                'filename' => '126.jpg',
                'height' => '288',
            ],
            [
                'thumbnail' => 'fasad1-180x135.jpg',
                'filename' => 'fasad1.jpg',
                'height' => '135',
            ],
            [
                'thumbnail' => 'fasad2-180x135.jpg',
                'filename' => 'fasad2.jpg',
                'height' => '135',
            ],
            [
                'thumbnail' => '59-180x135.jpg',
                'filename' => '59.jpg',
                'height' => '135',
            ],
            [
                'thumbnail' => '62hih-180x135.jpg',
                'filename' => '62hih.jpg',
                'height' => '135',
            ],
            [
                'thumbnail' => '44hih-180x135.jpg',
                'filename' => '44hih.jpg',
                'height' => '135',
            ],
            [
                'thumbnail' => '27hjhi-180x230.jpg',
                'filename' => '27hjhi.jpg',
                'height' => '230',
            ],
            [
                'thumbnail' => 'paris-180x231.jpg',
                'filename' => 'paris.jpg',
                'height' => '230',
            ],
            [
                'thumbnail' => '11_hih-180x231.jpg',
                'filename' => '11_hih.jpg',
                'height' => '230',
            ],
            [
                'thumbnail' => '29hih-180x231.jpg',
                'filename' => '29hih.jpg',
                'height' => '230',
            ],
            [
                'thumbnail' => '60hih-180x231.jpg',
                'filename' => '60hih.jpg',
                'height' => '230',
            ],
            [
                'thumbnail' => 'karina3-180x123.jpg',
                'filename' => 'karina3.jpg',
                'height' => '123',
            ],
            [
                'thumbnail' => 'karina4-180x121.jpg',
                'filename' => 'karina4.jpg',
                'height' => '123',
            ],
            [
                'thumbnail' => 'karina5-180x119.jpg',
                'filename' => 'karina5.jpg',
                'height' => '123',
            ],
            [
                'thumbnail' => 'karina2-180x119.jpg',
                'filename' => 'karina2.jpg',
                'height' => '123',
            ],
            [
                'thumbnail' => 'karina1-180x120.jpg',
                'filename' => 'karina1.jpg',
                'height' => '123',
            ],
            [
                'thumbnail' => '26hih-180x135.jpg',
                'filename' => '26hih.jpg',
                'height' => '135',
            ],
            [
                'thumbnail' => '28hih-180x135.jpg',
                'filename' => '28hih.jpg',
                'height' => '135',
            ],
            [
                'thumbnail' => '68hih-180x135.jpg',
                'filename' => '68hih.jpg',
                'height' => '135',
            ],
            [
                'thumbnail' => '19hih-180x135.jpg',
                'filename' => '19hih.jpg',
                'height' => '135',
            ],
            [
                'thumbnail' => 'carpet3_5-180x135.jpg',
                'filename' => 'carpet3_5.jpg',
                'height' => '135',
            ],
            [
                'thumbnail' => '71hih-180x180.jpg',
                'filename' => '71hih.jpg',
                'height' => '180',
            ],
            [
                'thumbnail' => '72hih-180x180.jpg',
                'filename' => '72hih.jpg',
                'height' => '180',
            ],
            [
                'thumbnail' => '82-180x180.jpg',
                'filename' => '82.jpg',
                'height' => '180',
            ],
            [
                'thumbnail' => '85_1-180x180.jpg',
                'filename' => '85_1.jpg',
                'height' => '180',
            ],
            [
                'thumbnail' => '41chinav-180x180.jpg',
                'filename' => '41chinav.jpg',
                'height' => '180',
            ],
            [
                'thumbnail' => 'carpet ferum-180x360.jpg',
                'filename' => 'carpet ferum.jpg',
                'height' => '360',
            ],
            [
                'thumbnail' => 'picture1_5-180x360.jpg',
                'filename' => 'picture1_5.jpg',
                'height' => '360',
            ],
            [
                'thumbnail' => 'sisic-180x360.jpg',
                'filename' => 'sisic.jpg',
                'height' => '360',
            ],
            [
                'thumbnail' => '99china-180x360.jpg',
                'filename' => '99china.jpg',
                'height' => '360',
            ],
            [
                'thumbnail' => '100chinav-180x360.jpg',
                'filename' => '100chinav.jpg',
                'height' => '360',
            ],
            [
                'thumbnail' => 'b_prodotti-33028-rel4e9d3393-4366-44ac-8d69-aa1821f8f31d-180x236.jpg',
                'filename' => 'b_prodotti-33028-rel4e9d3393-4366-44ac-8d69-aa1821f8f31d.jpg',
                'height' => '236',
            ],
            [
                'thumbnail' => 'b_prodotti-33014-rela1edb07b-b2a4-47e0-85df-157988a92d28-180x236.jpg',
                'filename' => 'b_prodotti-33014-rela1edb07b-b2a4-47e0-85df-157988a92d28.jpg',
                'height' => '236',
            ],
            [
                'thumbnail' => '3-bisazza-19-clouds-180x236.jpg',
                'filename' => '3-bisazza-19-clouds.jpg',
                'height' => '236',
            ],
            [
                'thumbnail' => 'bisazza-18-andromeda-optical-180x236.jpg',
                'filename' => 'bisazza-18-andromeda-optical.jpg',
                'height' => '236',
            ],
            [
                'thumbnail' => 'marella_rose-180x236.jpg',
                'filename' => 'marella_rose.jpg',
                'height' => '236',
            ],
            [
                'thumbnail' => '107cvetok-180x112.jpg',
                'filename' => '107cvetok.jpg',
                'height' => '112',
            ],
            [
                'thumbnail' => '106 mak sicis-180x112.jpg',
                'filename' => '106 mak sicis.jpg',
                'height' => '112',
            ],
            [
                'thumbnail' => '105podsolnuh sicis-180x112.jpg',
                'filename' => '105podsolnuh sicis.jpg',
                'height' => '112',
            ],
            [
                'thumbnail' => '103 cvety sicis-180x112.jpg',
                'filename' => '103 cvety sicis.jpg',
                'height' => '112',
            ],
            [
                'thumbnail' => '104fialki sicis-180x112.jpg',
                'filename' => '104fialki sicis.jpg',
                'height' => '112',
            ],
        ];
        $this->view['images'] = $images;
    }

    public function aboutAction()
    {
    }

    public function designersAction()
    {
        $designers = [
            'vinogradova' => [
                'name' => 'Наталия Виноградова',
                'photo' => 'vinogradova-natalia.jpg',
                'works' => [
                    [
                        'thumbnail' => 'vs1-200x200.jpg',
                        'filename' => 'vs1.jpg',
                    ],
                    [
                        'thumbnail' => 'vs2-200x200.jpg',
                        'filename' => 'vs2.jpg',
                    ],
                    [
                        'thumbnail' => '012-150x200.jpg',
                        'filename' => '012',
                    ],
                ],
            ],
            'khalaimova' => [
                'name' => 'Халаимова Карина',
                'photo' => 'khalaimova-karina.jpg',
                'works' => [
                    [
                        'thumbnail' => 'krh8-200x200.jpg',
                        'filename' => 'krh8.jpg',
                    ],
                    [
                        'thumbnail' => 'krh9-200x200.jpg',
                        'filename' => 'krh9.jpg',
                    ],
                    [
                        'thumbnail' => 'krh10-200x200.jpg',
                        'filename' => 'krh10.jpg',
                    ],
                ],
            ],
            'bobryshova' => [
                'name' => 'Бобрышова Ирина',
                'photo' => 'bobryshova-irina_small.jpg',
                'works' => [
                    [
                        'thumbnail' => 'bathroom-200x200.jpg',
                        'filename' => 'bathroom.jpg',
                    ],
                    [
                        'thumbnail' => 'kabinet-200x202.jpg',
                        'filename' => 'kabinet.jpg',
                    ],
                    [
                        'thumbnail' => 'garderob-200x203.jpg',
                        'filename' => 'garderob.jpg',
                    ],
                ],
            ],
            'movchan' => [
                'name' => 'Мовчан Елизавета',
                'photo' => 'movchan-liza.jpg',
                'works' => [
                    [
                        'thumbnail' => 'lm1-200x200.jpg',
                        'filename' => 'lm1.jpg',
                    ],
                    [
                        'thumbnail' => 'ml2-200x200.jpg',
                        'filename' => 'ml2.jpg',
                    ],
                    [
                        'thumbnail' => 'ml3-200x200.jpg',
                        'filename' => 'ml3.jpg',
                    ],
                ],
            ],
            'imshineckiy' => [
                'name' => 'Имшинецкий Александр',
                'photo' => 'imshineckiy-alexandr.jpg',
                'works' => [
                    [
                        'thumbnail' => 'al1-200x200.jpg',
                        'filename' => 'al1.jpg',
                    ],
                    [
                        'thumbnail' => 'al2-200x200.jpg',
                        'filename' => 'al2.jpg',
                    ],
                    [
                        'thumbnail' => 'al3-200x200.jpg',
                        'filename' => 'al4.jpg',
                    ],
                    [
                        'thumbnail' => 'al4-200x200.jpg',
                        'filename' => 'al4.jpg',
                    ],
                ],
            ],
            'reznichenko' => [
                'name' => 'Резниченко Юлия',
                'photo' => 'reznichenko-yulia_small.jpg',
                'works' => [
                    [
                        'thumbnail' => 'yr1-200x200.jpg',
                        'filename' => 'yr1.jpg',
                    ],
                    [
                        'thumbnail' => 'yr2-200x200.jpg',
                        'filename' => 'yr2.jpg',
                    ],
                    [
                        'thumbnail' => 'yr3-200x200.jpg',
                        'filename' => 'yr4.jpg',
                    ],
                    [
                        'thumbnail' => 'yr4-200x200.jpg',
                        'filename' => 'yr4.jpg',
                    ],
                ],
            ],
            'gudkova' => [
                'name' => 'Гудкова Татьяна',
                'photo' => 'gudkova-tatiana_small.jpg',
                'works' => [
                    [
                        'thumbnail' => 'tg1-200x200.jpg',
                        'filename' => 'tg1.jpg',
                    ],
                ],
            ],
            'pedan' => [
                'name' => 'Педан Алена',
                'photo' => 'pedan-alena.jpg',
                'works' => [
                    [
                        'thumbnail' => 'ald1-200x200.jpg',
                        'filename' => 'ald1.jpg',
                    ],
                    [
                        'thumbnail' => 'ald2-200x200.jpg',
                        'filename' => 'ald2.jpg',
                    ],
                    [
                        'thumbnail' => 'ald3-200x200.jpg',
                        'filename' => 'ald4.jpg',
                    ],
                ],
            ],
        ];
        $this->view['designers'] = $designers;
    }

}