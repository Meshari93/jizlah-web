<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Animal;
class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      $animals = new Animal;
      if($request != NULL){
        // filter type
        if (request()->has('typenajdi')) {$animals = $animals->where('type', request('typenajdi'));}
        if (request()->has('typehuri')){$animals = $animals->orWhere('type', request('typehuri'));}
        if (request()->has('typenaimi')) {$animals = $animals->orWhere('type', request('typenaimi'));}
        if (request()->has('typesawakini')) {$animals = $animals->orWhere('type', request('typesawakini'));}
        if (request()->has('typebarbry')) {$animals = $animals->orWhere('type', request('typebarbry'));}
        if (request()->has('typetays')) {$animals = $animals->orWhere('type', request('typetays'));}

        //filter Gender
        if (request()->has('gendermale')){$animals = $animals->where('gender', request('gendermale')) ;}
        if (request()->has('genderfemale')) {$animals = $animals->orWhere('gender', request('genderfemale'));}

        //filter Price
         if (request()->has('price200')){$animals = $animals->where('selling_price', '<=', 200);}
         if (request()->has('200price600')){$animals = $animals->orWhereBetween('selling_price', [200, 600]) ;}
         if (request()->has('600price900')){$animals = $animals->orWhereBetween('selling_price', [600, 900]) ;}
         if (request()->has('price900')){$animals = $animals->orWhere('selling_price', '>=', 900);}

        //filter Age
         if (request()->has('age2')){$animals = $animals->where('age', '<=', 2);}
         if (request()->has('2age6')){$animals = $animals->orWhereBetween('age', [2, 6]);}
         if (request()->has('6age9')){$animals = $animals->orWhereBetween('age', [6,9]);}
         if (request()->has('9age')){$animals = $animals->orWhere('age', '>=' , 9);}
        //filter Weight
         if (request()->has('10weight')){$animals = $animals->where('weight', '<=', 10);}
         if (request()->has('10weight20')){$animals = $animals->orWhereBetween('weight', [10, 20]);}
         if (request()->has('20weight30')){$animals = $animals->orWhereBetween('weight', [20, 30]);}
         if (request()->has('weight30')){$animals = $animals->orWhere('weight', '>=', 30);}
        $animals = $animals->where('situation','active')->where('selling_price','!=', NULL)->where('health_status','fit')->get();
        //  dd($animals);
      }else {
        $animals = $animals->where('situation','active')
        ->where('selling_price','!=', NULL)
        ->where('health_status','fit')->get();
      }
         return view('welcome', ['animals' => $animals]);
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
