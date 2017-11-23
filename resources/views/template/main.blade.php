<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sistema de inicio de Carpetas de Investigacón</title>
	<link rel="icon" href="{{ asset('img/iconofge.png') }}">
	<!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.0/css/bootstrap-datepicker3.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.0/css/bootstrap-datepicker3.standalone.min.css">

	<!--Por si no hay internet
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('plugins/font-awesome/css/font-awesome.css') }}">
	<!-- xxxxxxxxxxxxxxxxxxxx -->
	
	<link rel="stylesheet" href="{{ asset('css/cssfonts.css') }}">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/chosen/chosen.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/timepicker/bootstrap-timepicker.css') }}">

    @yield('css')
</head>
<body>
	<div class="container">
		@include('template.partials.header')

		@yield('content')
	</div>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.0/js/bootstrap-datepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.0/locales/bootstrap-datepicker.es.min.js"></script>

	<!--Por si no hay internet
    <script src="{{ asset('js/jquery-3.2.1.slim.js')}}" ></script>
    <script src="{{ asset('js/popper.js')}}" ></script>
	<script src="{{ asset('js/bootstrap.js')}}" ></script>
	<!-- xxxxxxxxxxxxxxxxxxxx -->

	<script src="{{ asset('plugins/chosen/chosen.jquery.js')}}" ></script>
	<link rel="stylesheet" type="text/css" href="{{ asset('plugins/timepicker/bootstrap-timepicker.js') }}">
    <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
	@yield('scripts')
</body>
</html>