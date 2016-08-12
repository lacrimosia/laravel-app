<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;


class CardsController extends Controller
{
    public function index(){
    	// ->with(['allCards' => $allCards]);
    	$allCards = DB::table('cards')->get();
    	// return view('cards');
    	return view('cards')->with(['allCards' => $allCards]);
    }
}
