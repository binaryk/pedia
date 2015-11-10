<?php


	get('get-terrain-lists', 'PreTerrainController@all')->name('terrain.all');
	post('post-terrain-save', 'PreTerrainController@save')->name('terrain.save');