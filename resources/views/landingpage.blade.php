<!--Extend the master.blade.php -->
@extends('master')

<head>
<!-- include css -->
<link rel="stylesheet" href="{{ asset('/css/landingpage.css') }}">
<!--Title on tab current page -->
@section('title', 'Player 2')
</head>

<!--Name / logo landingpage -->
@section('name/logo')
@include ('codeincludes/namelogo')

    <!--right side landingpage Login flex2 top-->
    <div class="flex2">
        <div class="flex2_top">
            @section('login')
            @include ('codeincludes/login')
        </div>

        <!--right side landingpage Register form flex2 middle-->
        <div class="flex2_middle">
                @section('registerform')
                @include ('codeincludes/register')
        </div>

        <!--right side landingpage flex2 bottom-->
        <div class="flex2_bottom">   
        </div>
    </div>
</div>

@endsection
