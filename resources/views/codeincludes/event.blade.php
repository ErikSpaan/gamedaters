<head>
    <link rel="stylesheet" href="{{ asset('/css/eventpage.css') }}">
</head>

<div class="container_events">
    <div class="month_container">
        <a href="">january</a>
        <a href="">februari</a>
        <a href="">march</a>
        <a href="">april</a>
        <a href="">may</a>
        <a href="">june</a>
        <a href="">july</a>
        <a href="">august</a>
        <a href="">september</a>
        <a href="">october</a>
        <a href="">november</a>
        <a href="">december</a>
    </div>
    <div class="event_card_container">
        <div class="card_image debug">
            <a href="" class="join_event"><img src="images/plus.png" alt="plus"/></a>
            <img src="/images/e3.png" class="background_image" alt="e3"/>
            <div class="card_date card_options">hier komt de date</div>
            <div class="card_time card_options">hier komt de tijd</div>
            <div class="card_sign_in card_options">hier komt inschrijven</div>
            <div class="card_name card_options">hier komt de naam</div>
            <div class="card_description card_options">click here for description</div>
        </div>
        <div class="card_image">
            <img src="/images/e3.png" class="background_image" alt="e3"/>
            <div class="card_date card_options">hier komt de date</div>
            <div class="card_time card_options">hier komt de tijd</div>
            <div class="card_sign_in card_options">hier komt inschrijven</div>
            <div class="card_name card_options">hier komt de naam</div>
            <div class="card_description card_options">click here for description</div>
        </div>
        <div class="card_image">
            <img src="/images/e3.png" class="background_image" alt="e3"/>
            <div class="card_date card_options">hier komt de date</div>
            <div class="card_time card_options">hier komt de tijd</div>
            <div class="card_sign_in card_options">hier komt inschrijven</div>
            <div class="card_name card_options">hier komt de naam</div>
            <div class="card_description card_options">click here for description</div>
        </div>
    </div>
    <div class="navigate_container">
        <a href="{{$events->previousPageUrl()}}">previous page</a>
        <a href="{{$events->nextPageUrl()}}">next page</a> 
    </div>
<div class="total_events_container">
    total events: {{ $events->total() }}
</div>
    
        @foreach ($events as $event)
        <li>
            <a href="/events/{{ $event->id }}">{{ $event->event_name }}</a>
            <a href="/addevent/{{ $event->id }}">join event</a>
            @if ($user->events()->where('event_id', $event -> id)->exists()) { aangemeld }
            @else { afgemeld }
            @endif
        </li>
        @endforeach
</div>
