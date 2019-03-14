<!--Extend the master.blade.php -->
@extends('master')

<head>
<!-- include css -->
<link rel="stylesheet" href="{{ asset('/css/landingpage.css') }}">
<!--Title on tab current page -->
@section('title', 'Player 2')
</head>

<!--Name / logo landingpage -->
{{-- @section('name/logo') --}}

<!-- left side landingpage -->
<div class="container">
    <div class="flex1">
        <div class="flex1_top">
            <img src="/images/logo.jpg" alt="player 2" />
        </div>
        <div class="flex1_bottom">
           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, optio sint. Iste iusto non quam doloremque voluptate eos dolorem voluptatem atque voluptatibus optio odio, praesentium enim dicta corrupti aliquam. Molestias eveniet obcaecati enim placeat quasi, quo molestiae, nihil eum et dolores nam magni quaerat rem praesentium iure non error tempora?</p>
        </div>
    </div>

    <!--Login flex2 top-->
    <div class="flex2">
        <div class="flex2_top">
            @section('login')
            @include ('codeincludes/login')
        </div>

        <!--Register form flex2 middle-->
        <div class="flex2_middle">
                @section('registerform')
                @include ('codeincludes/register')
        </div>

        <!--flex2 bottom-->
        <div class="flex2_bottom">   
        </div>
    </div>
</div>

@endsection
