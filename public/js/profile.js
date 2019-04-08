document.getElementById('buttonPersonalView').addEventListener ('click', openView);

function openView() {
document.getElementById('profileContainer').style = "display: none";
document.getElementById('personalPopup').style.display = "flex";
} 

function ageSlider(val) {
    document.getElementById("ageOutput").innerHTML = val; 
  }

  document.getElementById("distanceOutput").innerHTML = '--';

  function distanceSlider(val) {
    document.getElementById("distanceOutput").innerHTML = val; 
  }

  //function erik
  function mydates(personalId) {
    //alert(argument);
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    $.ajax({
            /* the route pointing to the post function */
            url: '/getdates',
            type: 'POST',
            /* send the csrf-token and the input to the controller */
            data: {_token: CSRF_TOKEN, message:$(".getinfo").val(), mydate:personalId},
            dataType: 'JSON',
            /* remind that 'data' is the response of the AjaxController */
            success: function (data) { 
            //alert(JSON.stringify(data.msg));
            //dates = data.msg[1].personal_firstname;    

            dates="";     
            data.msg.forEach(function(favorite) {
                 //alert(favorite.personal_firstname);
                 deletebutton = favorite.id;
                 dates+= '<div class="matches_card">';
                 dates+= '<a href="#" class="card_photo_box"><img src="/images/profile_images/' + favorite.personal_image_url + '" alt=""/></a>';
                 dates+= '<div class="card_name_box">' + favorite.personal_firstname + '</div>';
                 dates+= '<a onclick="mydates('+deletebutton+')"><div class="delete_mydate"><i class="fas fa-user-times"></i></div></a>';
                 dates+= '</div>';
                 //dates+= favorite.personal_firstname
                 });
            //alert(dates);    
            $("#mydates").html(dates); 
            }    
        });
};  

console.log("main.js gorillapower");

//function erik
function findyourmatch(form) {
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    // the filter parameters
    var fgender = $("input[name=filter_gender]:checked").val();
    var fage = $("input[name=filter_age]").val();
    var fdistance = $("input[name=filter_distance]").val();
    var fgenre = $("input[name=filter_genre]").val();
    console.log(fgender,fage,fdistance,fgenre);
    $.ajax({
            /* the route pointing to the post function */
            url: '/findyourmatch',
            type: 'POST',
            /* send the csrf-token and the input to the controller */
            data: {_token: CSRF_TOKEN, message:$(".getinfo").val(), gender:fgender, age:fage, distance:fdistance, genre:fgenre},
            dataType: 'JSON',
            /* remind that 'data' is the response of the AjaxController */
            success: function (data) { 
            //alert(JSON.stringify(data.msg));
            // dates = data.msg[1].personal_firstname;    
            foundMatches="";     
            data.msg.forEach(function(filterResult) {
            showProfile = filterResult.id;
           
            foundMatches+= '<div class="matches_card">';
            foundMatches+= '<a href="#" class="card_photo_box"><img src="/images/profile_images/' + filterResult.personal_image_url + '" alt=""/></a>';
            foundMatches+= '<div class="card_name_box">' + filterResult.personal_firstname + '</div>';
            foundMatches+= '<a onclick="mydates(' + filterResult.id + ')" id="card_button_box"></a>';
            foundMatches+= '</div>';             
                
            console.log(filterResult);
                
            });

            //alert('dates');    
            $("#filterResults").html(foundMatches); 
            }    
        });
};  
  