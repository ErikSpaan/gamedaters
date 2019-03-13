<!--Extend the master.blade.php -->
@extends('master')


<head>
<link rel="stylesheet" href="{{ asset('/css/landingpage.css') }}">
</head>
{{-- @include ('resources/sass/landing.css') --}}

<!--Title on tab current page -->
@section('title', 'Welcome')

<!--Name / logo landingpage -->
@section('name/logo')
    <h1>landingpage</h1>

<!--Login -->
@section('login')
@include ('codeincludes/login')

<!--Register form -->
@section('registerform')
@include ('codeincludes/register')


@endsection
