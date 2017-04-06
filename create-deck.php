
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
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <div class="row" style="padding-bottom:40px;">
        <div class="col-md-6">
            <div class="row" style="padding-bottom:40px;">
                <div class="form-group col-md-8"><input class="search-head find-card" placeholder="Поиск карты"></div>
                <div class="form-group col-md-4">
                    <label for="sel1">Фильтр по мане</label>
                    <select class="form-control" id="sel1">
                        <option>-</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7+</option>
                    </select>
                </div>
            </div>
            <div>
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#class" aria-controls="home" role="tab" data-toggle="tab">Друид</a></li>
                    <li role="presentation"><a href="#neutral" aria-controls="profile" role="tab" data-toggle="tab">Нейтральные</a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="class">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="img/cards/548.png" width="168" height="237" />
                                <span class="card-cnt" style="display: inline;">1/2</span>
                            </div>
                            <div class="col-md-4"><img src="img/cards/619.png" width="168" height="237" /></div>
                            <div class="col-md-4"><img src="img/cards/532.png" width="168" height="237" /></div>
                        </div>
                        <div class="row">
                            <div class="col-md-4"><img src="img/cards/548.png" width="168" height="237" /></div>
                            <div class="col-md-4"><img src="img/cards/619.png" width="168" height="237" /></div>
                            <div class="col-md-4"><img src="img/cards/532.png" width="168" height="237" /></div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="neutral">
                        <div class="row">
                            <div class="col-md-4"><img src="img/cards/453.png" width="168" height="237" /></div>
                            <div class="col-md-4"><img src="img/cards/473.png" width="168" height="237" /></div>
                            <div class="col-md-4"><img src="img/cards/12200.png" width="168" height="237" /></div>
                        </div>
                        <div class="row">
                            <div class="col-md-4"><img src="img/cards/453.png" width="168" height="237" /></div>
                            <div class="col-md-4"><img src="img/cards/473.png" width="168" height="237" /></div>
                            <div class="col-md-4"><img src="img/cards/12200.png" width="168" height="237" /></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-4 right">
            <div class="row deck-title">Колода друида</div>
            <div class="row in-deck">5/30 Карт</div>
            <div class="row" style="padding-bottom:20px">Тут будет возможно график</div>
            <div class="row deck">
                <div class="listing-body">
                    <table style="width:100%">
                        <thead>
                            <tr>
                                <th>Название</th>
                                <th>Мана</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr style="display: table-row;">
                                <td>
                                    <b class="rare-0">Innervate</b> <span class="deck-card-count" style="">× 1</span><br>
                                </td>
                                <td class="mana-col">0<span class="icon-mana"></span>
                                </td>
                            </tr>
                            <tr style="display: table-row;">
                                <td>
                                    <b class="rare-1">Moonfire</b> <span class="deck-card-count" style="">× 1</span><br>
                                </td>

                                <td class="mana-col">
                                    0<span class="icon-mana"></span>
                                </td>
                            </tr>
                            <tr style="display: table-row;">
                                <td>
                                    <b class="rare-2">Moonfire</b> <span class="deck-card-count" style="">× 1</span><br>
                                </td>

                                <td class="mana-col">
                                    0<span class="icon-mana"></span>
                                </td>
                            </tr>
                            <tr style="display: table-row;">
                                <td>
                                    <b class="rare-3">Moonfire</b> <span class="deck-card-count" style="">× 1</span><br>
                                </td>

                                <td class="mana-col">
                                    0<span class="icon-mana"></span>
                                </td>
                            </tr>
                            <tr style="display: table-row;">
                                <td>
                                    <b class="rare">Moonfire</b> <span class="deck-card-count" style="">× 1</span><br>
                                </td>

                                <td class="mana-col">
                                    0<span class="icon-mana"></span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
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