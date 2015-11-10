<?php

namespace App\Http\Controllers;

use App\Terrain;
use App\Models\TerrainCoord;
use Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class TerrainController extends PreTerrainController
{
    /**
     * TerrainController constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    { 

        $terrain    = Terrain::all();
        $controls   = $this->controls();
        return view('list.terrain',compact('terrain', 'controls'));
    }

    public function create()
    {
        return view('list.create');
    }

    public function store()
    {
        $form_data = $this->unserializeForm(Input::get('form'));
        $coords    = Input::get('coords');
        $terrain   = Terrain::create($form_data + ['type' => $coords[0] ?  $coords[0]['type'] : '']);
        
        if(is_array($coords))
            foreach ($coords as $key => $coord) {
                foreach ($coord['geometry'] as $k => $coordonate) {
                    TerrainCoord::create([ 'terrain_id' => $terrain->id, 'lat' => $coordonate[0], 'long' => $coordonate[1] ]);       
                }
                
            }


        return \Response::json([ 'message' => 'Inserare cu succes' ]);
    }

    function unserializeForm($str) {
        $strArray = explode("&", $str);
        foreach($strArray as $item) {
            $array = explode("=", $item);
            $returndata[] = str_replace('+',' ',$array);
        }

        $out_data  = [];
        foreach ($returndata as $key => $data) {
            $out[$data[0]] = $data[1];
        }
        $out_data = $out;
        return  $out_data;
    }


    public function storeCoordonate()
    {
       $out_data = [];

       $terrains = Terrain::with('coords')->get()->toArray();


       foreach ($terrains as $key => $terrain) {
           if(count($terrain['coords'])){
               $obj = new \StdClass();
               $obj->type= $terrain['type'];
               $obj->id  = null;
               $obj->geometry = [];



               $lat1  = (float) $terrain['coords'][0]['lat'];
               $long1 = (float) $terrain['coords'][0]['long'];
               $a1 = [];
               $a1[] = $lat1;
               $a1[] = $long1;
               $obj->geometry[] = $a1;
               $lat2  = (float) $terrain['coords'][1]['lat'];
               $long2 = (float) $terrain['coords'][1]['long'];
               $a1 = [];
               $a1[] = $lat2;
               $a1[] = $long2;
               $obj->geometry[] = $a1;


/*               foreach ($terrain['coords'] as $k => $coord) {
                   $obj->geometry = [];
                   $obj->g1[] = (float) $coord['lat'];
                   $obj->g1[] = (float) $coord['long'];
               }*/
           $out_data[] = $obj;
           }

       }

      return json_encode($out_data);
    }
}
