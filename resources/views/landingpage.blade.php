<!--Extend the master.blade.php -->
@extends('master')


<head>
    <link rel="stylesheet" href="{{ asset('/css/landingpage.css') }}">
</head>
{{-- @include ('resources/sass/landing.css') --}}

<!--Title on tab current page -->
@section('title', 'Player 2')

<!--Name / logo landingpage -->
{{-- @section('name/logo') --}}


<!--Login -->

<div class="container">
    <div class="flex1">
        <div class="flex1_top">
            <img src="/images/logo.jpg" alt="player 2" />
        </div>
        <div class="flex1_bottom">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, optio sint. Iste iusto non quam
                doloremque voluptate eos dolorem voluptatem atque voluptatibus optio odio, praesentium enim dicta
                corrupti aliquam. Molestias eveniet obcaecati enim placeat quasi, quo molestiae, nihil eum et dolores
                nam magni quaerat rem praesentium iure non error tempora?</p>
        </div>
    </div>
    <div class="flex2">
        <div class="flex2_top">
            @section('login')
            @include ('codeincludes/login')
        </div>
        <div class="flex2_middle">
            @section('registerform')
            @include ('codeincludes/register')
        </div>
        <div class="flex2_bottom">
            <div id="myModal" class="modal">
                <div class="modal_content">
                    <span class="close">&times;</span>
                    <p>by registering to our site you agree that we will use your current location in order to use the
                        full potential of our matching system</p>
                </div>
            </div>

        </div>
    </div>
</div>
<script src="/js/geolocation.js"></script>


<!--Register form -->



@endsection
