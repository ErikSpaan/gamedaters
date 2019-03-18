<!--Extend the master.blade.php -->
@extends('master')

<head>
<!-- include css -->
<link rel="stylesheet" href="{{ asset('/css/navbar.css') }}">
<!--Title on tab current page -->
@section('title', 'Home')
</head>

<!--Name / logo landingpage -->
@section('logo/menu')
@include ('codeincludes/navbar')

<!-- homepage links -->
@section('homepageLinks')
@include('codeincludes/homelinks')