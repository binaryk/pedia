<div class="search" ng-hide="cautare">
	<div class="col-md-12">
			<label class="control-label">Titlu</label>
			<input type="text" class="form-control" ng-model="f_title">
	</div> 
	<div class="col-md-12">
			<label class="control-label">Preț</label>
			<input type="text" class="form-control" ng-model="f_pret">
	</div>
	<div class="col-md-12">
			<label class="control-label">Preț</label>
			<input type="text" class="form-control" ng-model="f_pret">
	</div> 
	<div class="col-md-12">
	{!!
		 \Easy\Form\Combobox::make('~layouts.form.controls.comboboxes.combobox')
	                ->name('id_locatie')
	                ->caption('Locație')
	               	->ng_model('f_locatie')
	                ->class('form-control data-source input-group form-select init-on-update-delete')
	                ->controlsource('id_locatie')
	                ->controltype('combobox') 
	                ->options(\App\Terrain::locatie())
	                ->out()
		!!}
	</div> 
</div>

<div class="col-md-12" style="margin-top: 30px;">
	<table class="table table-bordered" ng-if="terrains.length > 0" style="background: white;">
		<thead>
			<tr>
				<th>Nume</th>
				<th>Preț</th>
				<th>Telefon</th>
				<th>Detalii</th>
			</tr> 
		</thead>
		<tbody>
			<tr ng-repeat="terrain in terrains | filter: { title: f_title, pret: f_pret, id_locatie: f_locatie }" ng-click="click(terrain)">
				<td style="cursor: pointer;" ><i class="fa fa-info" title="Click pentru a vedea mai multe detalii"></i> @{{ terrain.title }}</td>
				<td>@{{ terrain.pret }}</td>
				<td>@{{ terrain.telefon }}</td>
				<td>@{{ terrain.detalii }}</td>
			</tr>
		</tbody>
	</table>

	<div class="alert alert-info" role="info" ng-if="terrains.length == 0">
		<h6>
		    Încă nu sunt terenuri salvate!
		</h6>
	</div>
</div>