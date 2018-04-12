/**
 * Created by asus pc on 3/26/2018.
 */

    function setRate( id , rate )
    {
                for(var i=0 ; i<rate ; i++)
                {
                    $("#"+id.toString()).append('<span class="fa fa-star checked"></span>');
                }
                for(var i=rate ; i<5 ; i++)
                {
                    $("#"+id.toString()).append('<span class="fa fa-star "></span>');
                }

    }
    function completeFreelancerInfo() {

    }
    function showApplyTaskForm() {

    }
    function isFreeLancerQualified(task_id) {
        $.ajax({
           type:'GET',
           dataType:'json',
           url:'/freelancer_task_qu',
           data:{task_id :task_id},
            success:function (response) {
            if(response==true){
                //apply offer form
                $("#applayTask").hide(1000);
                $("#loginbox").show(1000);

            }else {
                //add skills requierd
                $("#applayTask").hide(1001);
                $("#addNewSkill").show(1000);
            }


            }

        });
    }
$(function () {
    $("#add_skills").click(function () {

        $.ajax({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'POST',
            dataType:'json',
            url: '/addNewSkills',
            data: $("#add_skills_form").serialize() ,
            success:function () {


            }
        })
        $("#addNewSkill").hide(1000);
        $("#loginbox").show(1000);

    })
})
$(function() {
    $("#offerData").click(function() {
        var offer_price = $("#offer_price").val();
        var timeNeeded  = $("#timeNeeded").val();
        if(offer_price=="" ) {
            $("#price_error").append("number value is requeied");
            $("#price_error").show();
            return false
        }
        if(timeNeeded=="" )
        {
            $("#days_error").append("number value is requeied");
            $("#days_error").show();
           return false;
        }
        $.ajax({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'POST',
            dataType:'json',
            url: '/applyOffer',
            data: $("#offer_form").serialize() ,

        })

        $("#loginbox").hide(1030);




    });
});

function isInt(n) {
    return +n === n && !(n % 1);
}

    


