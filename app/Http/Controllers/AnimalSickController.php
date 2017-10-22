<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Toastr;

use App\Sick;
use App\Animal;

class AnimalSickController extends Controller
{

    public function __construct()
    {
            $this->middleware('auth');
    }
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
          $i =1;
          $sickAnimal = Sick::all();

          $animalID = Animal::select('id')->get();
          $sickName = Sick::select('name', 'id')->get();

         return view('template.sick.sick',[
           'sickAnimal' => $sickAnimal,'i' =>$i,
           'sickName' =>$sickName ,'animalID' => $animalID,
       ]);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sickAnimal = new Sick;
        $i = 0;
        $img ;

        $this->validate($request, [
           'sickName'            => 'required',
          'sickTransmission'     => 'required',
          'severity'             => 'required',

    ]);

        $sickAnimal->name             = $request->sickName ;
        $sickAnimal->description      = $request->describeSick;
        $sickAnimal->recommendation   = $request->recommendationSick;
        $sickAnimal->transmission   = $request->sickTransmission;
        $sickAnimal->riskiness        = $request->severity;


        $sickAnimal->save();
         Toastr::success('Add a new Sick', 'Add Item', ["positionClass" => "toast-bottom-left"]);
          return back();
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
        $sickAnimal =  Sick::find($id);
        $sickAnimal->delete();
        Toastr::warning('Delete a Sick ', 'Delete Item', ["positionClass" => "toast-bottom-left"]);
         return back();
    }
}
