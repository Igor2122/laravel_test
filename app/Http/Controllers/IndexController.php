<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use DB;
 
class IndexController extends Controller
{

    public $movie_names = [
        'tt0468569' => 'Dark Knight', 
        'tt0050083' => '12 angry men', 
        'tt0108052' => 'Schindler\'s list',
        'tt0110912' => 'Pulp fiction',
        'tt0167260' => 'Lord of the Rings: Return of the King',
        'tt0111161' => 'The Shawshank redemption',
        'tt0071562' => 'The Godfather II',
        'tt0060196' => 'The good, the bad and the ugly',
        'tt0137523' => 'Fight club',
        'tt0068646' => 'The Godfather',
    ];
    public $movie_ratings = [
        'tt0111161' => 9.2,
        'tt0068646' => 9.2,
        'tt0071562' => 9.0,
        'tt0468569' => 8.9, 
        'tt0050083' => 8.9, 
        'tt0108052' => 8.9,
        'tt0110912' => 8.9,
        'tt0167260' => 8.9,
        'tt0060196' => 8.9,
        'tt0137523' => 8.8
    ];

    public function __construct ()
    {
        $this->movie_names = $this->getMovies();
        $this->movie_ratings = $this->getRatings();
    }
    public function index()
    {
        $header = view('_comp/header');
        $moviesWithRatings = view('_comp/moviesWithRatings', [
            'movie_names' => $this->movie_names,
            'movie_ratings' => $this->movie_ratings
        ]);
        $movieSingle = view('_comp/movieSingle');
        $footer = view('_comp/footer');

        $content = 'content';

        $res = DB::select('select * from country ');

        $html = view('_comp/html', [
            'header' => $header,
            'content' => $content,
            'footer' => $footer,
            'res' => $res
        ]);


        return $html;
    }

    public function getMovies ()
        {
             return $this->movie_names;
        }
    public function getRatings ()
        {
             return $this->movie_ratings;
        }
}