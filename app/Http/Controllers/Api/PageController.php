<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Ingredient;
use App\Pizza;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $pizzas = Pizza::orderBy('id' , 'desc')->with('ingredients')->paginate(6);
        $ingredients = Ingredient::all();

        return response()->json(compact('pizzas', 'ingredients'));
    }

    public function show($slug){
        $pizza = Pizza::where('slug', $slug)->with('ingredients')->first();

        return response()->json($pizza);
    }

}
