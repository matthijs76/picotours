@extends('layouts.app')
<link href="{{ mix('/css/app.css') }}" rel="stylesheet">

@section('content')

    @include ('inc.alt_slider')
    @include ('inc.featuredcities')    
    @include ('inc.parallax_mini')
    @include ('inc.categories')
    @include ('inc.featuredguides')
    @include ('inc.contact')
    @include ('inc.footer')
    @include ('inc.categories')

@endsection