<?php

namespace App\Http\Controllers;

class PortfolioController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    //
    public function paginate()
    {
        return [
            [
                "id" => 1,
                "title" => "Title 1",
                "images" => [
                    [
                        'id' => 1,
                        'path' => 'img/slideshow_1.jpg'
                    ],
                    [
                        'id' => 2,
                        'path' => 'img/slideshow_2.jpg'
                    ],
                    [
                        'id' => 3,
                        'path' => 'img/slideshow_3.jpg'
                    ],
                    [
                        'id' => 1,
                        'path' => 'img/slideshow_1.jpg'
                    ],
                    [
                        'id' => 2,
                        'path' => 'img/slideshow_2.jpg'
                    ],
                    [
                        'id' => 3,
                        'path' => 'img/slideshow_3.jpg'
                    ],
                    [
                        'id' => 1,
                        'path' => 'img/slideshow_1.jpg'
                    ],
                    [
                        'id' => 2,
                        'path' => 'img/slideshow_2.jpg'
                    ],
                ],
            ],
            [
                "id" => 2,
                "title" => "Title 2",
                "images" => [
                    [
                        'id' => 1,
                        'path' => 'img/slideshow_1.jpg'
                    ],
                    [
                        'id' => 2,
                        'path' => 'img/slideshow_2.jpg'
                    ],
                    [
                        'id' => 3,
                        'path' => 'img/slideshow_3.jpg'
                    ],
                    [
                        'id' => 1,
                        'path' => 'img/slideshow_1.jpg'
                    ],
                    [
                        'id' => 2,
                        'path' => 'img/slideshow_2.jpg'
                    ],
                    [
                        'id' => 3,
                        'path' => 'img/slideshow_3.jpg'
                    ],
                    [
                        'id' => 1,
                        'path' => 'img/slideshow_1.jpg'
                    ],
                    [
                        'id' => 2,
                        'path' => 'img/slideshow_2.jpg'
                    ],
                ],
            ]
        ];
    }
}
