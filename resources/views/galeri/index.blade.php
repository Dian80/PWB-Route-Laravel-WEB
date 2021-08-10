@extends('layout')

@section('content')

<div class="container">
    <h1>Galeri</h1>
    <img src="{{ asset('./assets/images/slider11.jpg')}}" 
    height="200"/>
    <img src="{{ asset('./assets/images/slider11.jpg')}}" 
    height="200"/>
    <img src="{{ asset('./assets/images/slider11.jpg')}}" 
    height="200"/>
    <img src="{{ asset('./assets/images/slider11.jpg')}}" 
    height="200"/>
</div>

@endsection