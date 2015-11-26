@extends('front.template')
@include('list.partials.header')
@section('body-attributes')
ng-controller="TerrainCtrl"
@stop
@section('content')

<div class="navigator-const">
    @include('list.partials.tabs') 
</div>


<div class="map-build">
    <div class="map" id="map_in"></div>
</div>

@stop
@section('custom-styles')
{!! HTML::script('//maps.google.com/maps/api/js?sensor=true&libraries=drawing,geometry&.js') !!}
{!! HTML::script('//cdnjs.cloudflare.com/ajax/libs/json2/20121008/json2.js') !!}
@stop

@section('custom-scripts')
    <script type="text/javascript" src="{!! asset('custom/js/map/init.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('custom/js/map/ajax.js') !!}"></script>
    <script type="text/javascript" src="{!! asset( 'custom/js/angular/services/TerrainService.js') !!}"></script>
    <script type="text/javascript" src="{!! asset( 'custom/js/angular/services/FormService.js') !!}"></script>
    <script type="text/javascript" src="{!! asset( 'custom/js/angular/controllers/TerrainCtrl.js') !!}"></script>
    <script type="text/javascript" src="{!! asset( 'custom/js/angular/controllers/terrain_coords.js') !!}"></script>

    <script type="text/javascript">
    var goo     = {};
    var shapes  = [];
    var mapin   = {};
    var _config = {};
    _config['r_get_all']    = "{!! route('terrain.all') !!}";
    _config['r_post_save']  = "{!! route('terrain.save') !!}";

        
        
    </script>
@stop