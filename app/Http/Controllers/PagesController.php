<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{

	public function home(){
		// fetch data from a database or function

		// home page
	$people = ['gina', 'thomas'];
	$candy = "laffy taffy";

	/*$people = array(
		array(
		'name'=> 'gina'
			),
		array(
			'name'=>'thomas'
		)
	);*/
	// compact('people') -- can pass data to view
	// with([]) - can pass data to view as well. (multiple data can be passed into the view)

    return view('welcome')->with(['people'=>$people, 'candy'=>$candy]);
	}


    public function about(){

    	// about page

    	// compact('people') -- can pass data to view
	    // with([]) - can pass data to view as well. (multiple data can be passed into the view)

    	$slogan = "About Page Bitches!";
    	return view('about')->with(['slogan'=>$slogan]);
    }
}
