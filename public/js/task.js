/**
 * Created by asus pc on 3/3/2018.
 */
var j = 0 ;
function load() {
    //load tasks
    setRate(4);
   $.ajax({

      type:'GET',
       url:'/getTasks',
       data:'_token = <?php echo csrf_token() ?',


            success:function(tasks){
      // alert(tasks[0].id);


            for( i = j ; i<tasks.length ; j++ ,i++)
            {

               $("#tasksTable").append('<tr style="cursor: pointer;" onclick="getTask('+tasks[i].id+')">'+
               '<td>'+
              '<a href="#"><i class="-alt fa fa-2x fa-code fa-fw"></i></a>'+
            '</td>'+
           '<td>'+
            '<h4>'+
            '<b>'+tasks[i].t_name+'</b>'+
            '</h4>'+
            '<p>'+tasks[i].descreption +'</p>'+
               '</td>'+
                '<td>'+
                '<img src="'+tasks[i].image+'" class="img-circle" width="60">'+
               '</td>'+
                '<td>'+
               '<h4>'+
                '<b>'+tasks[i].em_name+'</b>'+
            '</h4>'+
           '<a href="#">'+tasks[i].email+'</a>'+
            '</td>'+
           '<td>'+tasks[i].rate+'</td>'+
           '<td>'+
            '<div class="btn-group">'+
          ' </div>'+
           ' </td> </tr> ');

            }



        }
   })
};
setInterval(function() {
   load();
}, 5000);

function getTask(id) {
    window.location.href = "/tasks/"+id;
}
function setRate(rateValeu) {

    var  i = 0;
    for(i=0 ; i<rateValeu ; i++)
    {
        $("#rate").append('<span class="fa fa-star checked"></span>');

    }
    for( i=rateValeu ; i<5 ; i++)
    {
        $("#rate").append('<span class="fa fa-star "></span>');
    }

}