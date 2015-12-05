<?php


	get('get-terrain-lists', 'PreTerrainController@all')->name('terrain.all');
	get('get-terrain-byUser', 'PreTerrainController@getUserTerrains')->name('terrain.getUserTerrains');
	post('post-terrain-save', 'PreTerrainController@save')->name('terrain.save');
	post('post-terrain-edit', 'PreTerrainController@edit')->name('terrain.edit');