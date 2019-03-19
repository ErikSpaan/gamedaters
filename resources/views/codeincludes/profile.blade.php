<head>
    <link rel="stylesheet" href="{{ asset('/css/profile_personalpage.css') }}">
</head>

<div class="profile_container">
    <div class="profile_boxes debug">
        <div class="photo_button_container">
            <div class="photo_box" id="photo_holder"></div>
            <input type="file" class="upload_button" placeholder="upload img">
        </div>
        <div class="input_container">
            <input type="text" name="" placeholder="nickname" class="input_profile_page">
            <input type="text" name="" placeholder="first name" class="input_profile_page">
            <input type="text" name="" placeholder="last name" class="input_profile_page">
            <input type="email" name="" placeholder="email" class="input_profile_page">
            <input type="password" name="" placeholder="password" class="input_profile_page">
            <span class="separate_span">gender</span>
            <div class="input_flex">
                <input type="radio" name="gender" value="male" class="input_radio"><span class="gender_span">male</span>
            </div>
            <div class="input_flex">
                <input type="radio" name="gender" value="female" class="input_radio"><span class="gender_span">female</span>
            </div>
            <div class="input_flex"> <input type="radio" name="gender" value="gender neutral" class="input_radio"><span
                    class="gender_span">gender
                    neutral</span>
            </div><br />
            <span class="separate_span">age</span>
            <input type="range" name="age" min="18" max="99" placeholder="" class="input_range">
        </div>
        <div class="who_am_i">
            <textarea class="text_area" placeholder="write something about you..."></textarea>
            <div class="see_personal_page">
                <button class="button_personal_view">see my personal page</button>
                <button class="button_save_changes">save my changes</button>

            </div>
        </div>
    </div>

    <div class="profile_boxes">
        <div class="filter_flex">
            <div class="filter_name">I'm looking for...</div>
            <div class="filter_options debug">
                <span class="separate_span">gender</span>
                <div class="input_radio_box">
                    {{-- to change the radio buttons here for responsive, change the width in class: input_radio_box
                    !!!!! --}}
                    <input type="radio" name="gender" value="male" class="input_radio">male

                    <input type="radio" name="gender" value="female" class="input_radio">female

                    <input type="radio" name="gender" value="gender neutral" class="input_radio">gender neutral
                </div><br />
                <span class="separate_span">age</span>
                <div><input type="range" name="age" min="18" max="99" placeholder="" class="filter_age"></div><br />
                <span class="separate_span">distance</span>
                <div><input type="range" name="distance" min="0" max="500" placeholder="" class="filter_age"></div><br />
                <span class="separate_span">game genre</span>
            </div>
            <div class="find_match_button_box">
                <button class="find_matches_button">Find your match!</button>
            </div>
        </div>
        <div class="matches_flex debug"></div>
    </div>
    <div class="profile_boxes"></div>
</div>
