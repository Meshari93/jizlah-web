<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
//use Intervention\Image\ImageManager;
use Toastr;
use Image;

use App\Animal;
class AnimalController extends Controller
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

        $najdi = Animal::where('type', '=', 'najdi')->count();
         $malenajdi = Animal::where('type', '=', 'najdi')->where('gender', '=', 'male')->count();
         $femalenajdi = $najdi - $malenajdi;
        $naimi = Animal::where('type', '=', 'naimi')->count();
        $malenaimi = Animal::where('type', '=', 'naimi')->where('gender', '=', 'male')->count();
        $femalenaimi = $naimi - $malenaimi;
        $huri = Animal::where('type', '=', 'huri')->count();
        $malehuri = Animal::where('type', '=', 'huri')->where('gender', '=', 'male')->count();
        $femalehuri = $huri - $malehuri;
        $barbry = Animal::where('type', '=', 'barbry')->count();
        $malebarbry = Animal::where('type', '=', 'barbry')->where('gender', '=', 'male')->count();
        $femalebarbry = $barbry - $malebarbry;
        $sawakini = Animal::where('type', '=', 'sawakini')->count();
        $malesawakini = Animal::where('type', '=', 'sawakini')->where('gender', '=', 'male')->count();
        $femalesawakini = $sawakini - $malesawakini;
        $tess = Animal::where('type', '=', 'tays')->count();
        $maleTess = Animal::where('type', '=', 'tays')->where('gender', '=', 'male')->count();
        $femaleTess = $tess - $maleTess;

        return view('template.store.purchases.animal.animal', [
              'najdi' => $najdi,'malenajdi' => $malenajdi,'femalenajdi' => $femalenajdi,
               'naimi' => $naimi, 'malenaimi' => $malenaimi,'femalenaimi' => $femalenaimi,
               'huri' => $huri,'malehuri' => $malehuri,'femalehuri' => $femalehuri,
               'barbry' => $barbry, 'malebarbry' => $malebarbry, 'femalebarbry' => $femalebarbry,
               'sawakini' => $sawakini , 'malesawakini' => $malesawakini,'femalesawakini' => $femalesawakini,
               'tess' => $tess, 'maleTess' => $maleTess, 'femaleTess' => $femaleTess]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('template.store.purchases.animal.addAnimal');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $animal = new Animal;
      $i = 0;
      $img ;

      $this->validate($request, [

        'typeAnimal'       => 'required',
        'genderAnimal'     => 'required',
        'ageAnimal'        => 'required',
        'weightAnimal'     => 'required',
        'purchasingPrice'  => 'required',
        'suppliy'          => 'required',
        'dateOfPurchase'   => 'required',

  ]);


       if ($request->hasFile('video')) {
          $videoname  = $request->video;
          $filenameVideo =  time() . '.' . $videoname->getClientOriginalExtension();
          $path = public_path().'/video/videoAnimal/';
          $videoname->move($path, $filenameVideo);




    } else {
        //  $filenameVideo = 'avatar.png';
    }

   if ($request->hasFile('images')) {
     foreach ($request->images as $image) {
       if ($i>= 19) {
         break;
       }
       $i = $i + 1;
       $img = 'img' .$i;
      $imagename  = $request->images[0];
      $filename =  time() . '.' . $imagename->getClientOriginalExtension();
      $imagename = Image::make($imagename)->resize(350, 350);
      $imagename->save(public_path('/img/store/imgAnimal/') . $filename);
      $animal-> $img                =  $filename;
    }
    } else {
         $filename = 'avatar.png';
    }
    $animal->type             = $request->typeAnimal ;
    $animal->gender           = $request->genderAnimal;
    $animal->age              = $request->ageAnimal;
    $animal->weight           = $request->weightAnimal;
    $animal->purchasing_price = $request->purchasingPrice;
    $animal->selling_price    = $request->sellingPrice;
    $animal->supplier         = $request->suppliy;
    $animal->date_of_purchase = $request->dateOfPurchase;

    if ($request->healthStatus == NULL) {
      $animal->health_status  = 'sick' ;
    }else {
      $animal->health_status  = $request->healthStatus;
    }
    $animal->Video            =$filenameVideo;
    if ($request->active == NULL) {
      $animal->situation      = 'inactive' ;
    }else {
        $animal->situation    = $request->active;
    }

  $animal->save();

   Toastr::success('Add a new animal', 'Add Item', ["positionClass" => "toast-bottom-left"]);
    return back();
  // return dd($videoname);


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
