<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Terrain extends Model
{
    protected $guarded = ['_token'];

    public function coords(){
    	return $this->hasMany('\App\Models\TerrainCoord', 'terrain_id');
    } 




}
