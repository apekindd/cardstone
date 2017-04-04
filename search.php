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
<div class="navbar navbar-inverse navbar-fixed-top top-menu">
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
                <input type="search" class="search-head " placeholder="Поиск...">&nbsp;<button class="btn btn-link pointer btn-search" type="submit"><i class="fa fa-search"></button></i>
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

<div class="container main main-detail">
    <div class="row search-bg"><div class="small-bg" style="background-image: url('/img/search1.png');"></div></div>
    <div class="row">
        <div class="container q-result">
            <div class="col-md-8">
                <p class="q-word">Результат поиска - <span class=" museo_title">искомое слово</span></p>
                <form class="search_form" action="search.php" method="POST">
                    <input type="search" value="искомое слово" class="search-head search_input" placeholder="Поиск...">&nbsp;<button class="btn btn-link pointer btn-search" type="submit">Поиск</button>
                </form>
                <div class="result_items">
                    <div class="res_item">
                        <div class="res_title"><a href="#">Победители <span class="find_word">зминего</span> чеспионата 2017</a></div>
                        <div class="res_date">23 ноября 2017</div>
                        <div class="res_text">Описание в 140 <span class="find_word">символов максимум</span>, что сюда написать я не знаю, значит буду импровизировать! Отключаю мозг и пишу всякую белибирду, оой сколько ошибок...</div>
                    </div>
                    <div class="res_item">
                        <div class="res_title"><a href="#">Победители <span class="find_word">зминего</span> чеспионата 2017</a></div>
                        <div class="res_date">23 ноября 2017</div>
                        <div class="res_text">Описание в 140 <span class="find_word">символов максимум</span>, что сюда написать я не знаю, значит буду импровизировать! Отключаю мозг и пишу всякую белибирду, оой сколько ошибок...</div>
                    </div>
                    <div class="res_item">
                        <div class="res_title"><a href="#">Победители <span class="find_word">зминего</span> чеспионата 2017</a></div>
                        <div class="res_date">23 ноября 2017</div>
                        <div class="res_text">Описание в 140 <span class="find_word">символов максимум</span>, что сюда написать я не знаю, значит буду импровизировать! Отключаю мозг и пишу всякую белибирду, оой сколько ошибок...</div>
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