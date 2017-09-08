<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Canvas\Services\Parsedowner;

class PagesController extends Controller
{
    public function about(Parsedowner $markdown) 
    {
    	return view('pages.about', 
    		['aboutMe' => $markdown->toHtml(
    			config('kati.about')
    		)]
    	);
    }

    public function courses()
    {
    	return view('pages.courses', 
    		['courses' => config('kati.courses')
    	]);
    }
}
