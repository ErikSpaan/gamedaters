<head>
    <link rel="stylesheet" href="{{ asset('/css/personal_profile_edit.css') }}">
</head>
<div class="container">
    <div class="profile_container">
        <div class="photo_button_container">
            <div class="photo_box" id="photo_holder"><img src="/images/{{ $personalpage->personal_image_url }}" /></div>
            <input type="file" class="upload_button" placeholder="upload img">
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
                    <button class="button_personal_view">my personal page</button>
                    <button type="submit" class="button_save_changes">save my changes</button>
                </div>
            </div>
        </form>
    </div>
</div>
<script src="/js/profile.js"></script>
