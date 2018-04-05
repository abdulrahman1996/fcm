


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.4.2/chosen.jquery.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.4.2/chosen.css">
    <script src={{asset('/js/main.js')}}></script>
</head>
<body >

<div class="container">
    <div class="jumbotron">
    <h2> Add new task</h2>
    <form class="form-horizontal" method="post" action="/addNewTask">
        {{csrf_field()}}
        <div class="form-group">
            <label class="control-label col-sm-2" for="task_title">Task Title</label>
            <div class="col-md-5">
                <input type="text" class="form-control" id="task_title" placeholder="add title for task" name="name">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="budjet">Budjet</label>
            <div class="col-md-5">
                <input type="number" class="form-control" id="budjet"  name="budjet">
            </div>
        </div>

        <div class="form-group">
            <label  class="control-label col-sm-2" for="skills">Skills</label>
                <script  type="text/javascript">
                    $(function() {
                        $(".chzn-select").chosen();

                    });
                </script>
            <div class="col-md-5">

                <select  class="chzn-select" multiple="true" name="skills[]" style="width: 200px">
                @foreach($skills as $skill)
                  <option value="{{$skill->id}}">{{$skill->name}}</option>
                    @endforeach
                </select>
                <strong>{{ $errors->first('skills') }}</strong>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="descreption">descreption</label>
            <div class="col-md-5">
                <textarea class="form-control" id="descreption" placeholder="write descreption for project" name="descreption"></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Submit</button>
            </div>
        </div>


    </form>
</div>
</div>

</body>
</html>




























{{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
    {{--<title>Contact V7</title>--}}
    {{--<link rel="stylesheet" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css">--}}
    {{--<script src="http://code.jquery.com/jquery-1.8.3.js"></script>--}}
    {{--<script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>--}}
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.4.2/chosen.jquery.js"></script>--}}
    {{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.4.2/chosen.css">--}}
    {{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>--}}
    {{--<script src="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.jquery.min.js"></script>--}}
    {{--<link href="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.min.css" rel="stylesheet"/>--}}
    {{--<script src={{asset('/js/main.js')}}></script>--}}
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.4.2/chosen.jquery.js"></script>--}}
    {{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.4.2/chosen.css">--}}

    {{--<meta charset="UTF-8">--}}
    {{--<meta name="viewport" content="width=device-width, initial-scale=1">--}}
    {{--<!--===============================================================================================-->--}}
    {{--<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>--}}
    {{--<!--===============================================================================================-->--}}
    {{--<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">--}}
    {{--<!--===============================================================================================-->--}}
    {{--<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">--}}
    {{--<!--===============================================================================================-->--}}
    {{--<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">--}}
    {{--<!--===============================================================================================-->--}}
    {{--<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">--}}
    {{--<!--===============================================================================================-->--}}
    {{--<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">--}}
    {{--<!--===============================================================================================-->--}}
    {{--<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">--}}
    {{--<!--===============================================================================================-->--}}
    {{--<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">--}}
    {{--<!--===============================================================================================-->--}}
    {{--<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">--}}
    {{--<!--===============================================================================================-->--}}
    {{--<link rel="stylesheet" type="text/css" href="css/util.css">--}}
    {{--<link rel="stylesheet" type="text/css" href="css/main.css">--}}
    {{--<!--===============================================================================================-->--}}
{{--</head>--}}

{{--<body>--}}

{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--<script>getMessage()</script>--}}
{{--<div class="container-contact100">--}}
    {{--<div class="wrap-contact100">--}}
        {{--<form class="contact100-form validate-form" method="post" action="/addNewTask">--}}
            {{--{{csrf_field()}}--}}
				{{--<span class="contact100-form-title">--}}
					{{--Add new Task--}}
				{{--</span>--}}

            {{--<div class="wrap-input100 validate-input" data-validate="Name is required">--}}
                {{--<input class="input100" id="Title" type="text" name="name" placeholder="Add title for your task">--}}
                {{--<label class="label-input100" for="name">--}}
                    {{--<span class="lnr lnr-user"></span>--}}
                {{--</label>--}}
                {{--<strong>{{ $errors->first('name') }}</strong>--}}
            {{--</div>--}}

            {{--<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">--}}
                {{--<input  onkeypress="getMessage()" type="search"  name="skills"  list="skills"  placeholder="skills" class="input100">--}}
                {{--<datalist  id="skills">--}}
                    {{--<option value="sql">--}}
                    {{--<option value="java"></option>--}}
                    {{--<option value="php"></option>--}}
                    {{--<option value="asp"> </option>--}}
                    {{--<option value="deeep learning"></option>--}}
                {{--</datalist>--}}

                {{--<strong>{{ $errors->first('skills') }}</strong>--}}
            {{--</div>--}}
            {{--<div class="wrap-input100 validate-input" >--}}
            {{--<select class="chzn-select" multiple = "true" style="width: 200px">--}}
                {{--<option>k</option>--}}
                {{--<option>j</option>--}}
            {{--</select>--}}

            {{--</div>--}}


            {{--<div class="wrap-input100 validate-input" data-validate="Name is required">--}}
                {{--<input class="input100" id="budjet" type="number" name="budjet" placeholder="budjet">--}}
                {{--<label class="label-input100" for="budjet">--}}
                    {{--<span class="lnr lnr-user"></span>--}}
                    {{--<strong>{{ $errors->first('budjet') }}</strong>--}}
                {{--</label>--}}
            {{--</div>--}}

            {{--<div id="num"></div>--}}

            {{--<div class="wrap-input100 validate-input" data-validate = "Message is required">--}}
                {{--<textarea class="input100" name="descreption" placeholder="Your message..."></textarea>--}}
                {{--<strong>{{ $errors->first('descreption') }}</strong>--}}
            {{--</div>--}}

            {{--<div class="container-contact100-form-btn">--}}
                {{--<div class="wrap-contact100-form-btn">--}}
                    {{--<div class="contact100-form-bgbtn"></div>--}}
                    {{--<button class="contact100-form-btn">--}}
                        {{--submit--}}
                    {{--</button>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</form>--}}
    {{--</div>--}}
{{--</div>--}}



{{--<div id="dropDownSelect1"></div>--}}

{{--<!--===============================================================================================-->--}}
{{--<script src="vendor/jquery/jquery-3.2.1.min.js"></script>--}}
{{--<!--===============================================================================================-->--}}
{{--<script src="vendor/animsition/js/animsition.min.js"></script>--}}
{{--<!--===============================================================================================-->--}}
{{--<script src="vendor/bootstrap/js/popper.js"></script>--}}
{{--<script src="vendor/bootstrap/js/bootstrap.min.js"></script>--}}
{{--<!--===============================================================================================-->--}}
{{--<script src="vendor/select2/select2.min.js"></script>--}}
{{--<!--===============================================================================================-->--}}
{{--<script src="vendor/daterangepicker/moment.min.js"></script>--}}
{{--<script src="vendor/daterangepicker/daterangepicker.js"></script>--}}
{{--<!--===============================================================================================-->--}}
{{--<script src="vendor/countdowntime/countdowntime.js"></script>--}}
{{--<!--===============================================================================================-->--}}
{{--<script src="js/main.js"></script>--}}

{{--<!-- Global site tag (gtag.js) - Google Analytics -->--}}
{{--<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>--}}
{{--<script>--}}
    {{--window.dataLayer = window.dataLayer || [];--}}
    {{--function gtag(){dataLayer.push(arguments);}--}}
    {{--gtag('js', new Date());--}}

    {{--gtag('config', 'UA-23581568-13');--}}
{{--</script>--}}

{{--@endsection--}}
{{--</body>--}}
{{--</html>--}}
