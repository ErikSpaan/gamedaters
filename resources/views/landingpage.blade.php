<!--Extend the master.blade.php -->
@extends('master')

<head>
    <!-- include css -->
    <link rel="stylesheet" href="{{ asset('/css/landingpage.css') }}">
    <!--Title on tab current page -->
    @section('title', 'Player 2')
</head>

<!--Name / logo landingpage -->
<div class="container">
@section('name/logo')
@include ('codeincludes/namelogo')

<!--right side landingpage Login flex2 top-->
<div class="flex2 debug">
    @section('login')
    @include ('codeincludes/login')


    <!--right side landingpage Register form flex2 middle-->
    @section('registerform')
    @include ('codeincludes/register')
        
    <div class="flex2_bottom">
        <div id="myModal" class="modal">
            <div class="modal_content">
                <span class="close">&times;</span>
                <p>By registering to our site you agree that we will use your current location in order to use the
                    full potential of our matching system</p>
            </div>
        </div>
    </div>
</div>
</div>

<script src="/js/geolocation.js"></script>

@endsection
