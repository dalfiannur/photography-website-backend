<?php

namespace App\Http\Controllers;

class SlideshowController extends Controller
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
    public function home()
    {
        return [
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
            ]
            ];
    }
}
