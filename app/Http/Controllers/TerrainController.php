<?php

namespace App\Http\Controllers;

use App\Terrain;
use Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class TerrainController extends Controller
{
    /**
     * TerrainController constructor.
     */
    public function __construct()
    {
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $terrain = Terrain::all();
        return view('list.terrain',compact('terrain'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('list.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $input = Request::all();
        Terrain::create($input);
       return redirect('terrain');
    }

    public function storeCoordonate()
    {
        $data   = Input::all();
        dd( (string)$data['data']);
        Terrain::create([
           'geometry' => $data['data']
        ]);
        dd($data);
        $coords = $data['data'][0];
        $type   = $coords['type'];
        $id     = $coords['id'];
        $geometry     = $coords['geometry'];

//        formatul datelor
        /*
         * "data" => array:1 [
    0 => array:3 [
      "type" => "RECTANGLE"
      "id" => ""
      "geometry" => array:2 [
        0 => array:2 [
          0 => "44.431328264001195"
          1 => "26.082401275634766"
        ]
        1 => array:2 [
          0 => "44.44309492000842"
          1 => "26.13046646118164"
        ]
      ]
    ]
  ]*/
        dd($coords);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
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
