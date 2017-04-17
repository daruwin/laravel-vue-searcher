<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class SearchController extends Controller
{
	public function search(Request $request){

	   if($request->has('search')){
	      
	      $accounts = Account::search($request->input('search'))->get();

	   }

	   return view('search.results', compact('products'));
	}
}
