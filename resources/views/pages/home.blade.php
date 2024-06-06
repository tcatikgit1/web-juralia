@extends('layouts/contentLayoutMaster')

@section('title',"Juralia - Abogado Las Palmas de Gran Canaria")

@section('meta-description',"Somos especialistas en derecho de familia en Las Palmas de Gran Canaria. Divorcio mutuo acuerdo o contencioso. Convenio regulador. Guarda y custodia exclusiva o compartida. Separación. Modificación de medidas. Parejas de hecho")

@section('meta-keywords',"abogado,penal,civil,derecho,justicia,abogado,penal,civil,divorcio mutuo acuerdo,divorcio,herencia,juzgado,galdar,las palmas de gran canaria,las palmas")

@section('page-style')
<link href="{{asset('vendor/css/aos.min.css') }}" rel="stylesheet" media="print" onload="this.media='all',this.onload=null;">
<link href="{{asset('vendor/css/aos.min.css') }}" rel="stylesheet">
<link href="{{asset('vendor/css/toastify/toastify.css') }}" rel="stylesheet">
<script src="{{ asset('vendor/js/toastify/toastify.js') }}"></script>
<script src="{{ asset('vendor/js/aos.min.js') }}"></script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<link rel="stylesheet" href="{{ asset(mix('css/app.css'))  . '?v='.$VERSION_WEB }}" />

@endsection

@section('content')
@include('partials/header')
@include('partials/areas')


@php($fecha = new Carbon\Carbon)
@if($fecha->hour >= 6 && $fecha->hour <= 20)
    @include('partials/whatsapp')
@endif
@include('partials/about')
@include('partials/formulario')

@endsection

@section('page-script')
    <script src="{{ asset(mix('js/app.js'))  . '?v='.$VERSION_WEB }}"></script>
    <script src="{{ asset('vendor/js/aos.min.js') }}"  async defer></script>

    <script>
        setTimeout(() => {
            AOS.init({once: 'true'})
        },1000);
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-B3Q6V260JP"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-B3Q6V260JP');
    </script>
@endsection
