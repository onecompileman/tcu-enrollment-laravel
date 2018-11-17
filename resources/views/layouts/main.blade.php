<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Enrollment Systems</title>
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>



    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                    aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Enrollment System</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <!-- <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
                    <li><a href="#">Link</a></li>

                </ul> -->

                <ul class="nav navbar-nav navbar-right">

                    <li><a>Logout</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

    <div class="container-fluid">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Dashboard</a></li>
            </ol>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="row">
                    <div class="col-sm-11">
                        <div class="panel">
                            <div class="panel-body center">
                                <img src="assets/img/user.png" class="img-responsive">
                                <h4>Stephen Vinuya</h4>
                                <span>stephen.vinuya@gmail.com</span> <br><br>
                                <ul class="list-group">
                                    <li class="list-group-item">Overview</li>
                                    <li class="list-group-item">Profile Setting</li>
                                    <li class="list-group-item">Logout</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
               @yield('content')
            </div>
        </div>
    </div>
@yield('here')
</body>

</html>