<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB; 

class ContinentController extends Controller
{
    public function largest()
    {
        $query = "select * from country where Continent = ? and Name = ?";


        $continents = DB::select($query, ['Europe', 'Austria']);
        
        return view('continents/data', [
            'res' => $continents,
        ]);

    }
}
