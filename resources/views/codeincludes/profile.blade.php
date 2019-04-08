<head>
     <!-- provide the csrf token -->
     <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('/css/profile_personalpage.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
    </script>
</head>
{{-- start profile box 1 --}}
<div class="profile_container">
    <div class="profile_boxes">
            <div class="filter_flex">
                    <div class="filter_name">I'm looking for...</div>
                    <form id="findyourmatchform">
                        {{-- to protect against cross site... --}}
                        {{-- @csrf --}}
                        <div class="filter_options">
                            <span class="separate_span">gender</span>
                            <div class="radio_box_container">
                            <div class="input_radio_box">
                                {{-- to change the radio buttons here for responsive, change the width in class: input_radio_box
                                !!!!! --}}
                                <input type="radio" name="filter_gender" checked value="male" class="input_radio"><span class="checkmark"></span>male
                            </div>
                            <div class="input_radio_box">
                                <input type="radio" name="filter_gender" value="female" class="input_radio"><span class="checkmark"></span>female
                            </div>
                                <div class="input_radio_box2">
                                <input type="radio" name="filter_gender" value="gender neutral" class="input_radio"><span class="checkmark"></span>gender
                                neutral
                            </div>
                        </div>
                            <span class="separate_span">age</span>
                            <div class="age_box">
                            <div><input type="range" oninput="ageSlider(this.value)" name="filter_age" min="18" max="99" placeholder="" class="filter_age">
                                <span id="ageOutput"></span>
                            </div>
                            </div>
                            <span class="separate_span">max distance</span>
                            <div class="distance_box"><input type="range" name="filter_distance" oninput="distanceSlider(this.value)" min="0" max="500" placeholder="" id="distanceInput">
                            <span id="distanceOutput"></span><span class="font_box">Km</span>
                            </div>
                            <span class="separate_span">game genre</span>
                            <div class="genre_box">
                                <input list="genres" name="filter_genre" placeholder="choose a genre..." class="list_dropdown">
                                <datalist id="genres">
                                    <option value="role playing game">
                                    <option value="shooter">
                                    <option value="action adventure">
                                    <option value="online">
                                    <option value="sandbox">
                                    <option value="battle royale">
                                    <option value="fighting">
                                    <option value="strategy">
                                    <option value="horror">
                                </datalist>
                                {{-- <button type="submit" class="find_matches_button">Find your match!</button> --}}
                                {{-- <button type="button" class="find_matches_button" id=getRequest>Find your match!</button> --}}
                                <a class="find_matches_button" onclick="findyourmatch(this.form)"><p>Find your match!</p></a>
                            </div>
                        </div>
                    </form>
                </div>
                
                <div class="matches_flex" id="filterResults">
                                                
                              
                @isset($filterResults)    
                    @foreach ($filterResults as $filterResult) 
                    <div class="matches_card">
                        <a href="#" class="card_photo_box"><img src="../images/profile_images/{{ $filterResult->personal_image_url }}" alt=""/></a>
                        <div class="card_name_box">{{ $filterResult->personal_firstname }}</div>
                        <a onclick="mydates('{{$filterResult->id}}')" id="card_button_box"></a>
                    </div>
                    @endforeach
                @endisset

                               
               </div>
    </div>
    {{-- Start profile box 2 --}}
    <div class="profile_boxes relative_box">
    </div>
    {{-- Start profile box 3 --}}
    <div class="profile_boxes">
        <div class="current_dates_container">
            <div class="filter_name">Current dates</div>
                <div id = "mydates" class="current_dates_box">
                
                @isset($favorites)
                    @foreach($favorites as $favorite)
                        
                        <div class="matches_card">
                        <a href="#" class="card_photo_box"><img src="/images/profile_images/{{ $favorite->personal_image_url }}" alt=""/></a>
                        <div class="card_name_box">{{ $favorite->personal_firstname }}</div>
                        <a onclick="mydates('{{ $favorite->id }}')"><div class="delete_mydate"><i class="fas fa-user-times"></i></div></a>
                        </div>

                    @endforeach
                @endisset   

            {{-- <div>{{$loaddates}} in this box your favorites will appear if you click the heart</div> --}}
                
                          
            </div>

        </div>
        <div class="games_container">
            <div class="filter_name">My top 5 games</div>
            <div class="game_card">
                <a href="#" class="game_photo_box"><img src="" alt="" /></a>
                <input type="text" class="games_input" placeholder="find your game...">
                <div id="game_delete_box"></div>
            </div>
            <div class="game_card">
                <a href="#" class="game_photo_box"><img src="" alt="" /></a>
                <input type="text" class="games_input" placeholder="find your game...">
                <div id="game_delete_box"></div>
            </div>
            <div class="game_card">
                <a href="#" class="game_photo_box"><img src="" alt="" /></a>
                <input type="text" class="games_input" placeholder="find your game...">
                <div id="game_delete_box"></div>
            </div>
            <div class="game_card">
                <a href="#" class="game_photo_box"><img src="" alt="" /></a>
                <input type="text" class="games_input" placeholder="find your game...">
                <div id="game_delete_box"></div>
            </div>
            <div class="game_card">
                <a href="#" class="game_photo_box"><img src="" alt="" /></a>
                <input type="text" class="games_input" placeholder="find your game...">
                <div id="game_delete_box"></div>
            </div>
        </div>

    </div>

</div>

<script src="/js/profile.js"></script>



