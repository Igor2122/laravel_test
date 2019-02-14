<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function detail ()
    {
        $castView = view('movies/info');
        $cast_view = view('movies/cast');
        $trailer_view = view('movies/trailer');

        $main_view = view('movies/main', [
            'info' => $castView,
            'cast' => $castView,
            'trailer' => $trailer_view
        ]);

        $html_wrapper = view('_comp/html', [
            'content' => $main_view,
            'header' => view('_comp/header'),
            'footer' => view('_comp/footer')
        ]);

        return $html_wrapper;
    }
}
