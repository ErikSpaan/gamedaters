@extends('master')

<?php
use App\User;
?>

<!--Title on tab current page -->
@section('title', 'events')

@section('content')
    <h1>eventpage</h1>
    <br>
    @foreach ($events as $event)
    <li>
        <a href="/events/{{ $event->id }}">
        {{ $event->event_name }}</a>
        
           <a href="/addevent/{{ $event->id }}">join event</a>

           
           @if ($user->events()->where('event_id', $event -> id)->exists())
           {
            aangemeld   
           }
           @else {
               afgemeld
           }
           @endif
           
        
    </li>
    @endforeach
@endsection    



   
            


      

