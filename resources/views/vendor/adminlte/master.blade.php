<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title_prefix', config('adminlte.title_prefix', ''))
    @yield('title', config('adminlte.title', 'AdminLTE 2'))
    @yield('title_postfix', config('adminlte.title_postfix', ''))</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{asset('vendor/adminlte/vendor/bootstrap/dist/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('vendor/adminlte/vendor/font-awesome/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{asset('vendor/adminlte/vendor/Ionicons/css/ionicons.min.css') }}">

    <!-- Adição externa -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <!-- Select2 -->
    <link rel="stylesheet" href="{{asset("vendor/adminlte/vendor/bower_components/select2/dist/css/select2.min.css")}}">
    <!-- bootstrap datepicker -->
    <link rel="stylesheet" href="{{asset("vendor/adminlte/vendor/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css")}}">    
    <!-- daterange picker -->
    <link rel="stylesheet" href="{{asset("vendor/adminlte/vendor/bower_components/bootstrap-daterangepicker/daterangepicker.css")}}">

    @include('adminlte::plugins', ['type' => 'css'])

    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/dist/css/AdminLTE.min.css') }}">

    @yield('adminlte_css')

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition @yield('body_class')">

@yield('body')

<script src="{{asset('vendor/adminlte/vendor/jquery/dist/jquery.min.js') }}"></script>
<script src="{{asset('vendor/adminlte/vendor/jquery/dist/jquery.slimscroll.min.js') }}"></script>
<script src="{{asset('vendor/adminlte/vendor/bootstrap/dist/js/bootstrap.min.js') }}"></script>

<!-- Adição Externa JS -->
<!-- Date range picker moment -->
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<script src="{{asset("vendor/adminlte/vendor/bower_components/moment/min/moment.min.js")}}"></script>
<script src="{{asset('vendor/adminlte/vendor/jQueryMaskPlugin/dist/jquery.mask.min.js') }}"></script>
<!-- Select2 -->
<script src="{{asset("vendor/adminlte/vendor/bower_components/select2/dist/js/select2.full.min.js")}}"></script>
<!-- bootstrap datepicker -->
<script src="{{asset("vendor/adminlte/vendor/bower_components/bootstrap-daterangepicker/daterangepicker.js")}}"></script>
<script src="{{asset("vendor/adminlte/vendor/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js")}}"></script>        
<script src="{{asset("js/util.js")}}"></script>
<script src="{{asset("js/validacoes.js")}}"></script>
@include('adminlte::plugins', ['type' => 'js'])

@yield('adminlte_js')
</body>
</html>
