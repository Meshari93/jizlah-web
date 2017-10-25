<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

// Model
use App\Sick;
use App\Animal;
use App\animal_sick;

use Toastr;
class AnimalHealthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

      $animal_sick = new animal_sick;
      $animalID = Animal::select('id')->get();
      $sickName = Sick::select('name', 'id', 'description', 'recommendation', 'transmission', 'riskiness')->get();

    if ($request != NULL) {
      if (request()->has('specialCare')){
         $animal_sick = $animal_sick->where('specialCare', request('specialCare'));
        //  $queries[$column] = request($column);
      }
      if(request()->has('isolation')) {
         $animal_sick = $animal_sick->where('isolation', request('isolation'));
      }

      $transm = [];
      if(request()->has('transmission')) {
        foreach ($sickName as $sick) {
          if ($sick->transmission == request('transmission')) {
            $transm[$sick->id] = [$sick->id];
          }
        }
        foreach ($transm as $key => $value) {
          $animal_sick = $animal_sick->where('sick_id', $value);
          //dd($value);
        }
        }

      // if(request()->has('isolation')) {
      //    $animal_sick = $animal_sick->where('isolation', request('isolation'));
      // }
      // if(request()->has('isolation')) {
      //    $animal_sick = $animal_sick->where('isolation', request('isolation'));
      // }
      // if(request()->has('isolation')) {
      //    $animal_sick = $animal_sick->where('isolation', request('isolation'));
      // }
      // if(request()->has('isolation')) {
      //    $animal_sick = $animal_sick->where('isolation', request('isolation'));
      // }
      // if(request()->has('isolation')) {
      //    $animal_sick = $animal_sick->where('isolation', request('isolation'));
      // }
      $animal_sick = $animal_sick->paginate(25);
    }
    else {
      $animal_sick = $animal_sick->paginate(4);
    }
// $animal_sick = $animal_sick->paginate(4)->appends($queries);


        return view('template.store.purchases.animal.healthStatus', [
          'sickName' => $sickName ,'animalID' => $animalID,
          'animal_sick' => $animal_sick,
        ]);


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
            $j = 0;
            $sickSelection = $request->get('sickSelection');
             foreach($sickSelection as $sickSelectionValues){
                  $sickSelectionResult[] = $sickSelectionValues;
                }
          while($j < count($request->get('sickSelection'))) {
           $animalSickResult  = $sickSelectionResult[$j] ;
           $animalSick = new animal_sick;
           $animalSick->sick_id            = $animalSickResult;
           $animalSick->animal_id          = $request->Animalsickid;
           $animalSick->recommendation     = $request->recommendationSickOfAnimal;

         if ($request->isolationSick == NULL) {
           $animalSick->isolation           = 'no' ;
         }else {
             $animalSick->isolation        = $request->isolationSick;
         }
         if ($request->specialCareSick == NULL) {
           $animalSick->specialCare         = 'no' ;
         }else {
             $animalSick->specialCare      =  'yes';
         }
          $animalSick->save();
          $j++;
      }
      Toastr::success('Add a new animal sick', 'Add Item', ["positionClass" => "toast-bottom-left"]);
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
        //
    }
}
