
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <!-- Bootstrap core JavaScript -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.4.2/chosen.jquery.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.4.2/chosen.css">
    <script src={{asset('/js/task_offers.js')}}></script>
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/task.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>{{$task->name}}</title>


</head>



<body >



<!-- Page Content -->
<div   class="container ">
<div style="background: white"class="row">
<!-- Post Content Column -->
<div style=" border-radius: 5px;" class="col-lg-10">
<!-- aply task -->
<div class="panel panel-default ">
    <div class="panel-heading">
        <h3 >Apply task</h3>
    </div>

    <div class="panel-body">
        <h4>{{$task->name}}</h4>
        <p class="card-text">Some example text. Some example text.</p>
        <h4>employer info</h4>
        <div  class="row">
            <div   class="col-sm-3">333 rate </div>
        </div>
        <div id="rate">

        </div>
        <h4>Skills</h4>
        <div  class="row">
            <div  style="color: #1f648b" class="col-sm-3">@foreach($task->skills as $skill) <a href="#"><span>{{$skill->name}} </span></a> @endforeach </div>
        </div>
<br><br>
        <button id="applayTask"type="button" class="btn btn-info btn-lg" onClick="isFreeLancerQualified({{$task->id}})">Apply for task</button>
        <div id="loginbox" style=" display: none ;margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <div class="panel panel-info" >
                <div class="panel-heading">
                    <div class="panel-title">Enter Offer Info</div>
                </div>

                <div style="padding-top:30px" class="panel-body" >

                    <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

                    <form id="offer_form" class="form-horizontal" role="form">
                        <div style="margin-bottom: 25px" class="input-group">
                            <span class="input-group-addon"><i class=" glyphicon glyphicon-usd"></i></span>
                            <input id="offer_price" type="number" class="form-control" name="price" placeholder="enter money you want">
                        </div>
                        <label  style="display: none ; color: red" for="offer_price" id="price_error"></label>
                        <div style="margin-bottom: 25px" class="input-group">
                            <span class="input-group-addon"><i class=" glyphicon glyphicon-time"></i></span>
                            <input id="timeNeeded" type="number" class="form-control" name="timeNeeded" placeholder="enter days you want">
                        </div>
                        <label  style="display: none ; color: red" for="offer_price" id="days_error"></label>
                       <input id="task_id" type="hidden" value="{{$task->id}}" name="task_id">
                        <input id="freelancer_id"  type="hidden"  value="{{auth()->user()->id}}" name="freelancer_id">
                        <div class="form-group">
                            <div class="col-md-12 control">
                                    <button  id="offerData" value="b" type="button" class="btn btn-info btn-lg" >
                                       Apply for the Task
                                    </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        <div id="addNewSkill" style=" display: none ;margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <div class="panel panel-info" >
                <div class="panel-heading">
                    <div class="panel-title">Skills requierd</div>
                </div>

                <div style="padding-top:20px" class="panel-body" >

                    <form id="add_skills_form" class="form-horizontal" role="form">
                        <div style="margin-bottom: 12px" class="input-group">
                            <div class="row">
                                @foreach($task->skills as $skill)
                                    <input class="form-check-input" type="checkbox" value="{{$skill->id}}" id="sk" name="skills[]">
                                    <label class="form-check-label" for="sk">
                                        {{$skill->name}}
                                    </label>
                                @endforeach
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12 control">
                                <button  id="add_skills"  type="button" class="btn btn-info btn-lg" >
                                   Add skills
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>

    </div>
    <br>
    <br>

</div>
</div>
</div>
<br>
<div class="row">
<table id="offersTable" class="table table-hover col-lg-5 table-striped">

<thead style="background: cornflowerblue">
<tr>
    <th class="col-md-3">Freelancers Offers </th>
    <th class="col-md-1">rate</th>
    <th class="col-md-1"></th>
    <th class="col-md-1"></th>
    <th class="col-md-3">time neede</th>
    <th class="col-md-3">Price</th>
</tr>
</thead>
    @php ($i=0)
@foreach($offersData as $od)

<tbody>
<tr>
    <td>
        <div class="row">
            <div class="col-md-5"><img src="/{{$od->img}}" class="img-circle" width="60">
            </div>
            <div class="col-lg-3">
                <h5 style="

               color: #1f648b">{{$od->fl_name}}</h5>
                {{$od->country}}
            </div>
        </div>

    </td>
    <td id="{{$i}}">
    </td>
    <td>
    </td>
    <td>
    </td>
    <td >{{$od->timeNeeded}}  days</td>
    <td>
        {{$od->price}}
    </td>
</tr>
</tbody>
        <script>setRate({{ $i }} , {{$od->rate}})</script>
       @php ($i++)
    @endforeach
</table>
</div>

</div>

<!-- /.container -->
</body>



