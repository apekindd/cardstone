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
<div class="navbar navbar-inverse navbar-fixed-top top-menu "><?php //navbar-static-top ?>
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
            <form class="navbar-form navbar-right hidden-sm" action="search.php" method="POST">
                <input type="search" class="search-head" placeholder="Поиск...">&nbsp;<button class="btn btn-link pointer btn-search" type="submit"><i class="fa fa-search"></button></i>
            </form>
            <!-- sm search -->
            <button class="show_search btn btn-link pointer btn-search hidden-md hidden-lg hidden-xs navbar-form navbar-right" type="button">
                <i class="fa fa-search"></i>
            </button>
        </div>
        <!-- sm search -->
        <div class="hidden-md hidden-lg hidden-xs hidden-sm" id="compact_search">
            <form class="navbar-form navbar-right" action="search.php" method="POST" style="width: 100%;">
                <input type="search" class="search-head " placeholder="Поиск..." style="width: 90%;">&nbsp;<button class="btn btn-link pointer btn-search" type="submit">Найти</button>
            </form>
        </div>
    </div>
</div>


    <div class="container main index_page main-detail">
        <div class="row top-bg hidden-xs"><div class="small-bg" style="background-image: url('/img/bg2.png');"></div></div>

        <!--<div class="row top-bg">
            <div class="container_title museo_title">ТОП</div>
            <div class="container">

            </div>
        </div>-->

        <div class="row">
            <div class="container_title top_container museo_title">НОВОЕ</div>
            <div class="container container_main">
                <div class="col-xs-12 col-sm-12 col-md-8 no-padding">
                    <div class="row main_item">
                        <div class="thumbnail col-xs-12 col-md-4  col-sm-4">
                            <a href="detail.php">
                                <img src="/img/n1.png" alt="" />
                            </a>
                        </div>
                        <div class="caption index-post-title col-md-8  col-sm-8">
                            <header class="detail_header_index">
                            <h3 class="preview_title museo_title entry-title"><a href="detail.php">В тёмном омуте</a></h3>
                            <p class="preview_text">Новая колода зулока от представителя Украины DrHippi</p>
                                <footer class="block_footer on_main">
                                    4 ноября 2017 / 10 просмотров
                                </footer>
                            </header>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-8 no-padding">
                    <div class="row main_item">
                        <div class="thumbnail col-xs-12 col-sm-4 col-md-4">
                            <a href="detail.php">
                                <img src="/img/n2.jpg" alt="">
                            </a>
                        </div>
                        <div class="caption index-post-title col-md-8 col-sm-8">
                            <header class="detail_header_index">
                                <h3 class="preview_title museo_title entry-title"><a href="detail.php">Хозяин таверны в городе</a></h3>
                                <p class="preview_text">Новое приключение от Blizzard в котором найдется место для каждого героя...</p>

                                <footer class="block_footer on_main">
                                    <time itemprop="dateCreated" datetime="2017-03-29T20:16:49+00:00">1 ноября 2017</time> / 100 просмотров
                                </footer>
                            </header>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/custom.js"></script>

</body>
</html>