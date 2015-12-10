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

}
