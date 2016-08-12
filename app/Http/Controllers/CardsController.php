<?php

namespace App\Http\Controllers;

use App\Card;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;


class CardsController extends Controller
{
    public function index(){
    	// ->with(['allCards' => $allCards]);
    	// $allCards = DB::table('cards')->get();
    	$allCards = Card::all();
    	// return view('cards');
    	return view('cards')->with(['allCards' => $allCards]);
    }

    public function show(Card $card){
    	// Card $card - called typehinting. Makes an instance of the Card model 
    	return view('show')->with(['card' => $card]);
    }
}
