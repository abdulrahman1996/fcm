

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

<script src="js/task.js"></script>
<!------ Include the above in your HEAD tag ---------->
<script>
    var user = "{{ json_encode((array)auth()->user()) }}";
    load();
</script>




<body >

@extends('layouts.app')
@section('content')

<div class="section">
    <div class="container">
        <h1>Tasks</h1>
        <div class="jumbotron">
        <div class="row">

            <div class="col-md-12">
                <table id="tasksTable"class="table table-hover  table-striped">
                    <tbody>
                    <thead style="background: skyblue" >
                    <tr>
                        <th></th>
                        <th>des</th>
                        <th></th>
                        <th>employer</th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>

                    </tbody>
                </table>
            </div>
        </div>
        </div>
    </div>
</div>

</body>
@endsection

