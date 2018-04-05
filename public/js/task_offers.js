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


    


