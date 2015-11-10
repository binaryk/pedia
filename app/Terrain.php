<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Terrain extends Model
{
    protected $guarded = ['_token'];

    public function coords(){
    	return $this->hasMany('\App\Models\TerrainCoord', 'terrain_id');
    } 


    public static function tip(){
    	return [
    		'0' => '-- Alege --',
    		'1' =>	'Terenurile cu destinatie agricola',
    		'2' =>	'Terenurile cu destinatie forestiera',
    		'3' =>	'Terenurile aflate permanent sub ape',
    		'4' =>	'Terenurile din intravilan',
    		'5' =>	'Terenurile cu destinatie speciala ',

    	];
    } 

    public static function caracteristici(){
    	return [
    	'0' => '-- Alege --',
    	'1'	   =>  'acces drum asfalt',
    	'2'	   =>  'alimentare apa',
    	'3'	   =>  'cadastru',
    	'4'	   =>  'canalizare',
    	'5'	   =>  'autoriz. construct.',
    	'6'	   =>  'certificat urbanism',
    	'7'	   =>  'constructie teren',
    	'8'	   =>  'curent electric',
    	'9'	   =>  'CUT',
    	'10'   =>  'ingradit',
    	'11'   =>  'intabulare',
    	'12'   =>  'gaze',
    	'13'   =>  'liber',
    	'14'   =>  'parcelabil',
    	'15'   =>  'POT',
    	'16'   =>  'stradal',
    	'17'   =>  'PUZ',
    	'18'   =>  'PUD',
    	];
    } 


    public static function locatie(){
    	return 
    	[
    	'0' => '-- Alege --',
    	'1' => 'Bucuresti sectorul 1',
    	'2' => 'Bucuresti sectorul 2',
    	'3' => 'Bucuresti sectorul 3',
    	'4' => 'Bucuresti sectorul 4',
    	'5' => 'Bucuresti sectorul 5',
    	'6' => 'Alba',
    	'7' => 'Arad',
    	'8' => 'Arges',
    	'9' => 'Bacau',
    	'10' => 'Bihor',
    	'11' => 'Bistrita Nasaud',
    	'12' => 'Botosani',
    	'13' => 'Braila',
    	'14' => 'Brasov',
    	'15' => 'Buzau',
    	'16' => 'Calarasi',
    	'17' => 'Caras Severin',
    	'18' => 'Cluj',
    	'19' => 'Constanta',
    	'20' => 'Covasna',
    	'21' => 'Dambovita',
    	'22' => 'Dolj',
    	'23' => 'Galati',
    	'24' => 'Giurgiu',
    	'25' => 'Gorj',
    	'26' => 'Harghita',
    	'27' => 'Hunedoara',
    	'28' => 'Ialomita',
    	'29' => 'Iasi',
    	'30' => 'Ilfov',
    	'31' => 'Maramures',
    	'32' => 'Mehedinti',
    	'33' => 'Mures',
    	'34' => 'Neamt',
    	'35' => 'Olt',
    	'36' => 'Prahova',
    	'37' => 'Salaj',
    	'38' => 'Satu Mare',
    	'39' => 'Sibiu',
    	'40' => 'Suceava',
    	'41' => 'Teleorman',
    	'42' => 'Timis',
    	'43' => 'Tulcea',
    	'44' => 'Valcea',
    	'45' => 'Vaslui',
    	'46' => 'Vrancea',
    	];
			
    } 


}
