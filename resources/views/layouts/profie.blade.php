<html lang="en">
<head>
    <meta charset="utf-8">
    <title>{{$profileData->username}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
    {{--<style type="text/css">--}}
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <link href="{{ asset('css/profile.css') }}" rel="stylesheet">
</head>
<body>

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
    <div class="view-account">
        <section class="module">
            <div class="module-inner">
                <div class="side-bar">
                    <div  class="user-info">
                        <img class="img-profile img-circle img-responsive center-block" src={{session('image')}} alt="">
                        <ul class="meta list list-unstyled">
                            <li class="name">{{session('username')}}
                                <label class="label label-info">{{$profileData->des}}</label>
                            </li>
                            <li class="email">{{session('email')}}</li>
                            <li class="activity">Last logged in: Today at 2:18pm</li>
                        </ul>
                    </div>
                    <nav class="side-menu">
                        <ul class="nav">
                            <li ><a href="#"><span class="fa fa-user"></span> Edit Profile</a></li>
                            <li><a href="#"><span class="fa fa-cog"></span> Settings</a></li>
                            @if(auth()->user()->user_id==2)
                            <li ><a href="#"><span class="fa fa-credit-card"></span> Balnce</a></li>
                            @endif
                            <li><a href="#"><span class="fa fa-envelope"></span> Messages</a></li>
                            <li><a href="#"><span class="fa fa-clock-o"></span> Reminders</a></li>
                        </ul>
                    </nav>
                </div>

                <div class="content-panel">
                    <div class="content-header-wrapper">
                        <h2 class="title">My Drive</h2>
                        <div class="actions">
                            <button class="btn btn-success"><i class="fa fa-plus"></i> Upload New Item</button>
                        </div>
                    </div>
                    <div class="content-utilities">
                        <div class="page-nav">
                            <span class="indicator">View:</span>
                            <div class="btn-group" role="group">
                                <button class="active btn btn-default" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Grid View" id="drive-grid-toggle"><i class="fa fa-th-large"></i></button>
                                <button class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="List View" id="drive-list-toggle"><i class="fa fa-list-ul"></i></button>
                            </div>
                        </div>
                        <div class="actions">
                            <div class="btn-group">
                                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown" type="button" aria-expanded="false"><i class="fa fa-filter"></i> Sorting <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Newest first</a></li>
                                    <li><a href="#">Oldest first</a></li>
                                </ul>
                            </div>
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Apply"><i class="fa fa-refresh"></i></button>
                                <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Archive"><i class="fa fa-archive"></i></button>

                                <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Report spam"><i class="fa fa-exclamation-triangle"></i></button>
                                <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Delete"><i class="fa fa-trash-o"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="content-header-wrapper">
                        <h2 class="title">My Tasks</h2>
                    </div>

                    <div class="drive-wrapper drive-grid-view">
                        <div class="grid-items-wrapper">
                            @for($i = 0 ; $i<2 ; $i++)
                            <div  class="drive-item module text-center">
                                <div class="drive-item-inner module-inner">
                                    <div class="drive-item-title"><a href="#">Meeting Notes.txt</a></div>
                                    <div class="drive-item-thumb">
                                        <a href="#"><i class="fa fa-file-text-o text-primary"></i></a>
                                    </div>
                                </div>

                            </div>
                            @endfor
                        </div>
                    </div>



                </div>
            </div>
        </section>
    </div>
</div>
<script type="text/javascript">
    $(function(){
        $("[data-toggle='tooltip']").tooltip();
    })
</script>
</body>
</html>