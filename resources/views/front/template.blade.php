<!DOCTYPE html>
<html class="no-js" ng-app="app"> 
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>{{ trans('front/site.title') }}</title>
		<meta name="description" content="">	
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		@yield('head')
		{!! HTML::style('css/main_front.css') !!}
		{!! HTML::style('css/bootstrap.min.css') !!}
		{!! HTML::style('components/sweetalert/dist/sweetalert.css') !!}
		{!! HTML::style('css/auth/style.css') !!}
		{!! HTML::style('css/style.css') !!}
		@yield('custom-styles')
		{!! HTML::style('https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js') !!}
		{!! HTML::style('https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js') !!}
		{!! HTML::style('http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800') !!}
		{!! HTML::style('http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic') !!}
	</head>
	  <body @yield('body-attributes')>
		@yield('main')
		@yield('content')
		{!! HTML::script('components/jquery/dist/jquery.min.js') !!}
		{!! HTML::script('components/angular/angular.min.js') !!}
		{!! HTML::script('components/sweetalert/dist/sweetalert.min.js') !!}
		{!! HTML::script('custom/js/angular/~config.js') !!}
		{!! HTML::script('js/plugins.js') !!}
		@yield('custom-scripts')
		@yield('scripts')
	  </body>
	<footer>
		@yield('footer')
		<p class="text-center"><small>Copyright &copy; Lucian&Partners</small></p>
	</footer>
</html>