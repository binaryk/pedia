<?php

namespace App\Http\Controllers;

use App\Terrain;
use App\Models\TerrainCoord;
use Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response;
use App\Http\Controllers\Terrains\ControlsTerrainController;
use Illuminate\Support\Facades\Auth;


class PreTerrainController extends ControlsTerrainController
{

	public function __construct(){
		parent::__construct();
	}

	public function all(){
		$data = Terrain::all();
		return Response::json(['data' => $data]);
	}
	public function getUserTerrains(){
		$data = Terrain::where('user_id',Auth::user()->id)->get();
		return Response::json(['data' => $data]);
	}

	public function save(){
		$data = Input::get('data');
		$out  = Terrain::create($data+['user_id'=>Auth::user()->id]);
		$out->characteristics()->attach($data['id_tip_caracteristici']);

		return Response::json(['out' => $out]);
	} 

}