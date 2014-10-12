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
                'filename' => '1-180x135.jpg',
                'height' => '138',
            ],
            [
                'filename' => '2-180x135.jpg',
                'height' => '138',
            ],
            [
                'filename' => '9-180x136.jpg',
                'height' => '138',
            ],
            [
                'filename' => '6hih-180x135.jpg',
                'height' => '138',
            ],
            [
                'filename' => '52hih-180x134.jpg',
                'height' => '138',
            ],
            [
                'filename' => '124a-180x288.jpg',
                'height' => '288',
            ],
            [
                'filename' => '37-180x288.jpg',
                'height' => '288',
            ],
            [
                'filename' => '125-180x288.jpg',
                'height' => '288',
            ],
            [
                'filename' => '14-180x288.jpg',
                'height' => '288',
            ],
            [
                'filename' => '126-180x294.jpg',
                'height' => '288',
            ],
            [
                'filename' => 'fasad1-180x135.jpg',
                'height' => '135',
            ],
            [
                'filename' => 'fasad2-180x135.jpg',
                'height' => '135',
            ],
            [
                'filename' => '59-180x135.jpg',
                'height' => '135',
            ],
            [
                'filename' => '62hih-180x135.jpg',
                'height' => '135',
            ],
            [
                'filename' => '44hih-180x135.jpg',
                'height' => '135',
            ],
            [
                'filename' => '27hjhi-180x230.jpg',
                'height' => '230',
            ],
            [
                'filename' => 'paris-180x231.jpg',
                'height' => '230',
            ],
            [
                'filename' => '11_hih-180x231.jpg',
                'height' => '230',
            ],
            [
                'filename' => '29hih-180x231.jpg',
                'height' => '230',
            ],
            [
                'filename' => '60hih-180x231.jpg',
                'height' => '230',
            ],
            [
                'filename' => 'karina3-180x123.jpg',
                'height' => '123',
            ],
            [
                'filename' => 'karina4-180x121.jpg',
                'height' => '123',
            ],
            [
                'filename' => 'karina5-180x119.jpg',
                'height' => '123',
            ],
            [
                'filename' => 'karina2-180x119.jpg',
                'height' => '123',
            ],
            [
                'filename' => 'karina1-180x120.jpg',
                'height' => '123',
            ],
            [
                'filename' => '26hih-180x135.jpg',
                'height' => '135',
            ],
            [
                'filename' => '28hih-180x135.jpg',
                'height' => '135',
            ],
            [
                'filename' => '68hih-180x135.jpg',
                'height' => '135',
            ],
            [
                'filename' => '19hih-180x135.jpg',
                'height' => '135',
            ],
            [
                'filename' => 'carpet3_5-180x135.jpg',
                'height' => '135',
            ],
            [
                'filename' => '71hih-180x180.jpg',
                'height' => '180',
            ],
            [
                'filename' => '72hih-180x180.jpg',
                'height' => '180',
            ],
            [
                'filename' => '82-180x180.jpg',
                'height' => '180',
            ],
            [
                'filename' => '85_1-180x180.jpg',
                'height' => '180',
            ],
            [
                'filename' => '41chinav-180x180.jpg',
                'height' => '180',
            ],
            [
                'filename' => 'carpet ferum-180x360.jpg',
                'height' => '360',
            ],
            [
                'filename' => 'picture1_5-180x360.jpg',
                'height' => '360',
            ],
            [
                'filename' => 'sisic-180x360.jpg',
                'height' => '360',
            ],
            [
                'filename' => '99china-180x360.jpg',
                'height' => '360',
            ],
            [
                'filename' => '100chinav-180x360.jpg',
                'height' => '360',
            ],
            [
                'filename' => 'b_prodotti-33028-rel4e9d3393-4366-44ac-8d69-aa1821f8f31d-180x236.jpg',
                'height' => '236',
            ],
            [
                'filename' => 'b_prodotti-33014-rela1edb07b-b2a4-47e0-85df-157988a92d28-180x236.jpg',
                'height' => '236',
            ],
            [
                'filename' => '3-bisazza-19-clouds-180x236.jpg',
                'height' => '236',
            ],
            [
                'filename' => 'bisazza-18-andromeda-optical-180x236.jpg',
                'height' => '236',
            ],
            [
                'filename' => 'marella_rose-180x236.jpg',
                'height' => '236',
            ],
            [
                'filename' => '107cvetok-180x112.jpg',
                'height' => '112',
            ],
            [
                'filename' => '106 mak sicis-180x112.jpg',
                'height' => '112',
            ],
            [
                'filename' => '105podsolnuh sicis-180x112.jpg',
                'height' => '112',
            ],
            [
                'filename' => '103 cvety sicis-180x112.jpg',
                'height' => '112',
            ],
            [
                'filename' => '104fialki sicis-180x112.jpg',
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
    }

}