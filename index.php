<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Все о Hearthstone | CardStone</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <div class="navbar navbar-inverse navbar-static-top top-menu">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main_menu">
                    <span class="sr-only">Open</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="/" title="Home" class="navbar-brand hs-logo"><img width="45" src="/img/logo.png"/></a>
                <span class="logo-text navbar-text">CARDSTONE</span>
            </div>
            <div class="hidden-xs col-sm-1"></div>
            <div class="collapse navbar-collapse" id="main_menu">
                <ul class="nav navbar-nav museo_title">
                    <li class="active"><a href="#">Новости</a></li>
                    <li><a href="#">Колоды</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Архив <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">2017</a></li>
                            <li><a href="#">2016</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Гайды</a></li>
                    <li><a href="#">Карты</a></li>
                </ul>
                <form class="navbar-form navbar-right" method="POST">
                    <input type="search" class="search-head" placeholder="Поиск...">&nbsp;<button class="btn btn-link pointer btn-search" type="submit"><i class="fa fa-search"></button></i>
                </form>
            </div>
        </div>
    </div>

    <div class="container main">
        <div class="row top-bg"><div class="small-bg" style="background-image: url('/img/bg1.png');"></div></div>
        <div class="row">
            <div class="container_title museo_title">NEWS</div>
            <div class="container container_main">
                <div class="col-xs-12">
                    <div class="row main_item">
                        <div class="thumbnail col-xs-12 col-md-4"><img src="/img/th1.jpg" alt=""></div>
                        <div class="caption  hidden-xs col-md-8">
                            <h3 class="preview_title museo_title"><a href="#">В тёмном омуте</a></h3>
                            <p class="preview">Новая колода зулока от представителя Украины DrHippi</p>
                            <footer class="block_footer">
                                4 ноября 2017 / 10 просмотров
                            </footer>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="row main_item">
                        <div class="thumbnail col-xs-12 col-md-4"><img src="/img/tavern.jpg" alt=""></div>
                        <div class="caption  hidden-xs col-md-8">
                            <h3 class="preview_title museo_title"><a href="#">Хозяин таверны в городе</a></h3>
                            <p class="preview">Новое приключение от Blizzard в котором найдется место для каждого героя...</p>
                            <footer class="block_footer">
                                1 ноября 2017 / 100 просмотров
                            </footer>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--<div class="col-md-3">
                <div class="thumbnail"><img src="http://placehold.it/300x240/6e1717" alt=""></div>
        </div>
        <div class="col-md-3">
            <div class="thumbnail"><img src="http://placehold.it/300x240/0a0e87" alt=""></div>
        </div>
        <div class="col-md-3">
            <div class="thumbnail"><img src="http://placehold.it/300x240/0a8719" alt=""></div>
        </div>-->
    </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="/js/bootstrap.min.js"></script>
</body>
</html>