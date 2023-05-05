<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class Select2AutocompleteController extends Controller
{
    //
	
	/**
    * Show the application layout.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
    	return view('select2.index');
    }
    /**
    * Show the application dataAjax.
    *
    * @return \Illuminate\Http\Response
    */
    public function dataAjax(Request $request)
    {
    	$data = [];
 
        if($request->has('q')){
            $search = $request->q;
            $data =Product::select("id","name")
             ->where('name','LIKE',"%$search%")
             ->get();
        }
        return response()->json($data);
    }
}
