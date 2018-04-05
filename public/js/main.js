function getMessage(){
//alert("kk")
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
           var  s = JSON.parse(this.responseText);
            var options = '';
            for (var i = 0 ; i<s.length ; i++)
            {
                options += '<option value="'+s[i].name+'" ></option>';
            }
            document.getElementById('skills').innerHTML = options;

        }
    };
    xhttp.open("GET", "getSkills", true);
    xhttp.send()
//     $.ajax({
//         type:'GET',
//         url:'getSkills',
//         data:'_token = <?php echo csrf_token() ?',
//
//
//         success:function(data){
//
//             for(var i = 0 ; i<jda._length ; i++)
//             {
//
//                $("#skills").append("<option value = ' " + data[i].name + "'></option>")
//
//             }
//             alert(data);
//
//
//         },
//         error : function(jqXHR, textStatus, errorThrown) {
//           alert('sssssss')
//             alert(textStatus);
//             alert(errorThrown);
//         }
//
//     });
}

(function ($) {
    "use strict";


    /*==================================================================
    [ Validate ]*/
    var input = $('.validate-input .input100');

    $('.validate-form').on('submit',function(){
        var check = true;

        for(var i=0; i<input.length; i++) {
            if(validate(input[i]) == false){
                showValidate(input[i]);
                check=false;
            }
        }

        return check;
    });


    $('.validate-form .input100').each(function(){
        $(this).focus(function(){
           hideValidate(this);
        });
    });

    function validate (input) {
        if($(input).attr('type') == 'email' || $(input).attr('name') == 'email') {
            if($(input).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
                return false;
            }
        }
        else {
            if($(input).val().trim() == ''){
                return false;
            }
        }
    }

    function showValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).addClass('alert-validate');
    }

    function hideValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).removeClass('alert-validate');
    }
    
    

})(jQuery);
function setRate()
{
    alert("ddd00");
    for(i=0 ; i<3 ; i++)
    {
        $("#rate").append('<span class="fa fa-star checked"></span>');
    }
    for(i=2 ; i<5 ; i++)
    {
        $("#rate").append('<span class="fa fa-star "></span>');
    }

}
