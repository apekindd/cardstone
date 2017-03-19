<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Test</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <!--<link rel="stylesheet" href="/css/custom.css">-->
</head>

<div class="navbar navbar-inverse navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main_menu">
                <span class="sr-only">Open</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Logo</a>
        </div>
        <div class="collapse navbar-collapse" id="main_menu">
            <ul class="nav navbar-nav">
                <li><a href="#">Item 1</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Item 2 <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">p1</a></li>
                        <li><a href="#">p2</a></li>
                        <li class="divider"></li>
                        <li><a href="#">p3</a></li>
                    </ul>
                </li>
                <li><a href="#">Item 3</a></li>
            </ul>
            <form class="navbar-form navbar-right">
                <div class="form-group">
                    <input class="form-control" type="text" placeholder="login" />
                    <input class="form-control" type="password" placeholder="password" />
                </div>
                <button type="submit" class="btn btn-primary">
                    <i class="fa fa-sign-in"></i> Sign In
                </button>
            </form>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
            <div class="thumbnail"><img src="http://placehold.it/300x240" alt=""></div>
            <div class="caption">
                <h3><a href="#">Название поста</a></h3>
                <p>Рыба текст, текст</p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
            <div class="thumbnail"><img src="http://placehold.it/300x240" alt=""></div>
            <div class="caption">
                <h3><a href="#">Название поста</a></h3>
                <p>Рыба текст, текст</p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
            <div class="thumbnail"><img src="http://placehold.it/300x240" alt=""></div>
            <div class="caption">
                <h3><a href="#">Название поста</a></h3>
                <p>Рыба текст, текст</p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
            <div class="thumbnail"><img src="http://placehold.it/300x240" alt=""></div>
            <div class="caption">
                <h3><a href="#">Название поста</a></h3>
                <p>Рыба текст, текст</p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
            <div class="thumbnail"><img src="http://placehold.it/300x240" alt=""></div>
            <div class="caption">
                <h3><a href="#">Название поста</a></h3>
                <p>Рыба текст, текст</p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
            <div class="thumbnail"><img src="http://placehold.it/300x240" alt=""></div>
            <div class="caption">
                <h3><a href="#">Название поста</a></h3>
                <p>Рыба текст, текст</p>
            </div>
        </div>
    </div>
</div>


<br><br><br><br><br><br><br><br><br><br>



<div class="progress">
    <div class="progress-bar progress-bar-striped active" role="progressbar"
         aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
        40%
    </div>
</div>

<!--Carousel start-->
<!--
<div id="carousel" class="carousel slide">
    <ol class="carousel-indicators">
        <li class="active" data-target="#carousel" data-slide-to="0"></li>
        <li data-target="#carousel" data-slide-to="1"></li>
        <li data-target="#carousel" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner">
        <div class="item active">
            <img src="/img/tavern.jpg" alt="tavern" />
            <div class="carousel-caprion">
                <h3>First slide</h3>
                <p>slide 1 description</p>
            </div>
        </div>
        <div class="item">
            <img src="/img/tavern2.png" alt="tavern2" />
            <div class="carousel-caprion">
                <h3>2 slide</h3>
                <p>slide 2 description</p>
            </div>
        </div>
        <div class="item">
            <img src="/img/bg.jpg" alt="tavern3" />
            <div class="carousel-caprion">
                <h3>3 slide</h3>
                <p>slide 3 description</p>
            </div>
        </div>
    </div>

    <a href="#carousel" class="left carousel-control" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a href="#carousel" class="right carousel-control" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
</div>
-->
<!--Carousel end-->

<div class="container">
    <div class="row">
        <div class="btn-toolbar">
            <div class="btn-group">
                <a href="#" class="btn btn-success"><i class="fa fa-spinner"></i></a>
                <a href="#" class="btn btn-success"><i class="fa fa-download"></i></a>
                <a href="#" class="btn btn-success"><i class="fa fa-file"></i></a>
            </div>
        </div>
        <div class="btn-toolbar">
            <div class="btn-group btn-group-lg btn-group-justified">
                <a href="#" class="btn btn-success"><i class="fa fa-spinner"></i></a>
                <a href="#" class="btn btn-success"><i class="fa fa-download"></i></a>
                <a href="#" class="btn btn-success"><i class="fa fa-file"></i></a>
            </div>
        </div>
        <div class="btn-group btn-group-lg btn-group-vertical">
            <a href="#" class="btn btn-success"><i class="fa fa-spinner"></i></a>
            <a href="#" class="btn btn-success"><i class="fa fa-download"></i></a>
            <a href="#" class="btn btn-success"><i class="fa fa-file"></i></a>
        </div>
        <p>
            <a href="#" class="btn btn-danger btn-block">link 6</a>
        </p>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="btn-group">
                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    dropdown <span class="caret"></span>
                </button>
                    <ul class="dropdown-menu">
                        <li><a href="#">l1</a></li>
                        <li><a href="#">l2</a></li>
                        <li><a href="#">l3</a></li>
                        <li><a href="#">l4</a></li>
                    </ul>

            </div>
        </div>
        <div class="col-md-6">

        </div>
    </div>
</div>

<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-6 col-md-offset-2"></div>
        </div>
    </div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="/js/bootstrap.min.js"></script>
</body>
</html>