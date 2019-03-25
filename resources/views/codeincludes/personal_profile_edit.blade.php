<head>
    <link rel="stylesheet" href="{{ asset('/css/personal_profile_edit.css') }}">
</head>
<div class="container">
    <div class="profile_container" id="profileContainer">
        <div class="photo_button_container">
            <div class="photo_box" id="photo_holder"><img src="/images/{{ $personalpage->personal_image_url }}" /></div>
            <div class="upload_button_box"><input type="file" class="upload_button" placeholder="upload img"></div>
        </div>
        <form method="POST" action="/personalpages/{{ $personalpage->id }}">
            {{ method_field('PATCH') }}
            {{-- to protect against cross site... --}}
            {{ csrf_field() }}
            <div class="input_container">
                <input type="text" name="personal_firstname" placeholder="first name"
                    value="{{ $personalpage->personal_firstname }}" class="input_profile_page">
                <input type="text" name="personal_lastname" placeholder="last name"
                    value="{{ $personalpage->personal_lastname }}" class="input_profile_page">
                <input type="text" name="user_nickname" placeholder="nickname" value="{{ Auth::user()->name }}"
                    class="input_profile_page">
                <input type="email" name="user_email" placeholder="email" value="{{ Auth::user()->email }}"
                    class="input_profile_page">
                <input type="password" name="user_password" placeholder="password" value="" class="input_profile_page">
                <span class="separate_span">gender</span>
                <div class="input_flex">
                    <input type="radio" name="personal_gender"
                        {{ ($personalpage->personal_gender=='male') ? 'checked="checked" ' : '' }} value="male"
                        class="input_radio"><span class="checkmark"></span><span class="gender_span">male</span>
                </div>
                <div class="input_flex">
                    <input type="radio" name="personal_gender"
                        {{ ($personalpage->personal_gender=='female') ? 'checked="checked" ' : '' }} value="female"
                        class="input_radio"><span class="checkmark"></span><span class="gender_span">female</span>
                </div>
                <div class="input_flex"> <input type="radio" name="personal_gender"
                        {{ ($personalpage->personal_gender=='gender neutral') ? 'checked="checked" ' : '' }}
                        value="gender neutral" class="input_radio"><span class="checkmark"></span><span
                        class="gender_span">gender neutral</span>
                </div><br />
                <span class="separate_span">age</span>
                <div class="age_box_container">
                    <input type="range" oninput="ageSlider(this.value)" name="personal_age" min="18" max="99"
                        placeholder="" value="{{ $personalpage->personal_age }}" class="input_range">
                    <span id="ageOutput">{{ $personalpage->personal_age }}</span>
                </div>
            </div>
            <div class="who_am_i">
                <textarea class="text_area" placeholder="write something about yourself..."
                    name="personal_info">{{ $personalpage->personal_info }}</textarea>
                <div class="see_personal_page">
                    <div class="button_personal_view" id="buttonPersonalView">my personal page</div>
                    <button type="submit" class="button_save_changes">save my changes</button>
                </div>
            </div>
        </form>
    </div>
    {{-- start personal popup div --}}
    <div id="personalPopup">
        <div class="personal_popup_photo_box"><img src="/images/{{ $personalpage->personal_image_url }}">
        </div>
        <div class="personal_popup_input_box">
            <div class="input_area">
                <div class="personal_popup_input_area">nickname:</div>
                <span class="personal_popup_db_input">{{ Auth::user()->name }}</span>
            </div>
            <div class="input_area">
                <div class="personal_popup_input_area">gender:</div>
                <span class="personal_popup_db_input">{{ ($personalpage->personal_gender) }}</span>
            </div>
            <div class="input_area">
                <div class="personal_popup_input_area">age:</div>
                <span class="personal_popup_db_input">{{ $personalpage->personal_age }}</span>
            </div>
            <div class="input_area">
                <div class="personal_popup_input_area">location:</div>
                <span class="personal_popup_db_input">{{ $personalpage->personal_location }}</span>
            </div>
        </div>
        <div class="personal_page_about_me_container">
                {{ $personalpage->personal_info }}
        </div>
        <div class="personal_page_games_container">
            <div class="personal_page_games_name_box">games I like</div>
            <div class="personal_page_games_game_link_card_box">
                    <div href="#" class="personal_page_games_image"><img src="" alt="" title=""/></div>
                    <div href="#" class="personal_page_games_image"><img src="" alt="" title=""/></div>
                    <div href="#" class="personal_page_games_image"><img src="" alt="" title=""/></div>
                    <div href="#" class="personal_page_games_image"><img src="" alt="" title=""/></div>
                    <div href="#" class="personal_page_games_image"><img src="" alt="" title=""/></div>
                </div>
            </div>

        </div>

    </div>

</div>
<script src="/js/profile.js"></script>
