// import { encode } from "punycode";

document.getElementById('changePassword').addEventListener ('click', changePassword);

var passwordCounter = 0;

function changePassword(){
    if (passwordCounter == 0) {
        document.getElementById('password_modal').style.display = "flex";
        passwordCounter = 1;
    }
        else {
            document.getElementById('password_modal').style.display = "none";
            passwordCounter = 0;
        }
    }

document.getElementById('oldPasswordButton').addEventListener ("click", openNewPassword);

function openNewPassword() {
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    var password = $("input[name=old_password]").val();
    console.log("password:" + password);
    $.ajax({
        /* the route pointing to the post function */
        url: '/changepassword',
        type: 'POST',
        /* send the csrf-token and the input to the controller */
        data: {_token: CSRF_TOKEN, message:$(".getinfo").val(), old_password:password},
        dataType: 'JSON',
        /* remind that 'data' is the response of the AjaxController */
        success: function (data) { 
            console.log(data.msg);
            
            
        //alert(JSON.stringify(data.msg));
        // dates = data.msg[1].personal_firstname;    
      
        console.log('after php', data);
             
        // $("#filterResults").html(data); 
        }    
    });
};


