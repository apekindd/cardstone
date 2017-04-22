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
            <form class="navbar-form navbar-right hidden-sm" method="POST">
                <input type="search" class="search-head" placeholder="Поиск...">&nbsp;<button class="btn btn-link pointer btn-search" type="submit"><i class="fa fa-search"></button></i>
            </form>
            <!-- sm search -->
            <button class="show_search btn btn-link pointer btn-search hidden-md hidden-lg hidden-xs navbar-form navbar-right" type="button">
                <i class="fa fa-search"></i>
            </button>
        </div>
        <!-- sm search -->
        <div class="hidden-md hidden-lg hidden-xs hidden-sm" id="compact_search">
            <form class="navbar-form navbar-right" method="POST" style="width: 100%;">
                <input type="search" class="search-head " placeholder="Поиск..." style="width: 90%;">&nbsp;<button class="btn btn-link pointer btn-search" type="submit">Найти</button>
            </form>
        </div>
    </div>
</div>

<div class="container main main-detail detail_deck">
    <div class="container">
        <div class="row white-bg">
            <div class="col-xs-12 col-md-8">
                    <h1 class="decks-title">PACTHECOOL’S ARCANE QUEST MAGE (APRIL 2017, SEASON 37)</h1>
                    <div class="thumbnail deck-img">
                        <img src="/img/aviana.jpg" />
                    </div>
                    <div id="deck-master" class="card-list row">
                        <div class="col-md-6 deck-list">
                            <div class="deck-header">
                                <div class="dk-name">
                                    <strong>Классовые (24)</strong>
                                </div>
                            </div>
                            <ul class="deck-class">
                                <li data-tooltip-img="http://www.hearthstonetopdecks.com/wp-content/uploads/2016/07/babbling-book-1-200x286.png" class="card-frame rare-card ">
                                    <span class="card-cost">1</span>
                                    <span class="card-name">Babbling Book</span>
                                    <span class="card-count">x2</span><span class="card-image card-count-ex"><img src="http://www.hearthstonetopdecks.com/wp-content/uploads/2016/07/sm-babbling-book.png"></span>
                                </li>
                                <li data-tooltip-img="http://www.hearthstonetopdecks.com/wp-content/uploads/2014/03/mana-wyrm-200x286.png" class="card-frame rare "><span class="card-cost">1</span><a href="http://www.hearthstonetopdecks.com/cards/mana-wyrm/"><span class="card-name">Mana Wyrm</span></a><span class="card-count">2</span><span class="card-image card-count-ex"><img src="http://www.hearthstonetopdecks.com/wp-content/uploads/2014/03/sm-card-mana-wyrm.png"></span>
                                </li>
                                <li data-tooltip-img="http://www.hearthstonetopdecks.com/wp-content/uploads/2017/03/open-the-waygate-200x286.png" class="card-frame rare-0 "><span class="card-cost">1</span><a href="http://www.hearthstonetopdecks.com/cards/open-the-waygate/"><span class="card-name">Open the Waygate</span></a><span class="card-count">1</span><span class="card-image card-count-ex"><img src="http://www.hearthstonetopdecks.com/wp-content/uploads/2017/03/sm-open-the-waygate.png"></span>
                                </li><li data-tooltip-img="http://www.hearthstonetopdecks.com/wp-content/uploads/2017/03/arcanologist-200x286.png" class="card-frame rare-1 "><span class="card-cost">2</span><a href="http://www.hearthstonetopdecks.com/cards/arcanologist/"><span class="card-name">Arcanologist</span></a><span class="card-count">2</span><span class="card-image card-count-ex"><img src="http://www.hearthstonetopdecks.com/wp-content/uploads/2017/03/sm-arcanologist.png"></span>
                                </li><li data-tooltip-img="http://www.hearthstonetopdecks.com/wp-content/uploads/2014/03/frostbolt-200x286.png" class="card-frame rare-2 "><span class="card-cost">2</span><a href="http://www.hearthstonetopdecks.com/cards/frostbolt/"><span class="card-name">Frostbolt</span></a><span class="card-count">2</span><span class="card-image card-count-ex"><img src="http://www.hearthstonetopdecks.com/wp-content/uploads/2014/03/sm-card-frostbolt.png"></span>
                                </li><li data-tooltip-img="http://www.hearthstonetopdecks.com/wp-content/uploads/2016/08/medivhs-valet-200x286.png" class="card-frame rare-3 "><span class="card-cost">2</span><a href="http://www.hearthstonetopdecks.com/cards/medivhs-valet/"><span class="card-name">Medivh’s Valet</span></a><span class="card-count">2</span><span class="card-image card-count-ex"><img src="http://www.hearthstonetopdecks.com/wp-content/uploads/2016/08/sm-card-medivhs-valet.png"></span>
                                </li><li data-tooltip-img="http://www.hearthstonetopdecks.com/wp-content/uploads/2017/03/primordial-glyph-200x286.png" class="card-frame epic-card "><span class="card-cost">2</span><a href="http://www.hearthstonetopdecks.com/cards/primordial-glyph/"><span class="card-name">Primordial Glyph</span></a><span class="card-count">2</span><span class="card-image card-count-ex"><img src="http://www.hearthstonetopdecks.com/wp-content/uploads/2017/03/sm-primordial-glyph.png"></span>
                                </li><li data-tooltip-img="http://www.hearthstonetopdecks.com/wp-content/uploads/2017/03/shimmering-tempest-200x286.png" class="card-frame common-card "><span class="card-cost">2</span><a href="http://www.hearthstonetopdecks.com/cards/shimmering-tempest/"><span class="card-name">Shimmering Tempest</span></a><span class="card-count">2</span><span class="card-image card-count-ex"><img src="http://www.hearthstonetopdecks.com/wp-content/uploads/2017/03/sm-shimmering-tempest.png"></span>
                                </li><li data-tooltip-img="http://www.hearthstonetopdecks.com/wp-content/uploads/2014/03/arcane-intellect-200x286.png" class="card-frame free-card "><span class="card-cost">3</span><a href="http://www.hearthstonetopdecks.com/cards/arcane-intellect/"><span class="card-name">Arcane Intellect</span></a><span class="card-count">2</span><span class="card-image card-count-ex"><img src="http://www.hearthstonetopdecks.com/wp-content/uploads/2014/03/sm-card-arcane-intellect.png"></span>
                                </li><li data-tooltip-img="http://www.hearthstonetopdecks.com/wp-content/uploads/2014/03/frost-nova-200x286.png" class="card-frame free-card "><span class="card-cost">3</span><a href="http://www.hearthstonetopdecks.com/cards/frost-nova/"><span class="card-name">Frost Nova</span></a><span class="card-count">2</span><span class="card-image card-count-ex"><img src="http://www.hearthstonetopdecks.com/wp-content/uploads/2014/03/sm-card-frost-nova.png"></span>
                                </li><li data-tooltip-img="http://www.hearthstonetopdecks.com/wp-content/uploads/2014/03/ice-block-200x286.png" class="card-frame epic-card "><span class="card-cost">3</span><a href="http://www.hearthstonetopdecks.com/cards/ice-block/"><span class="card-name">Ice Block</span></a><span class="card-count">2</span><span class="card-image card-count-ex"><img src="http://www.hearthstonetopdecks.com/wp-content/uploads/2014/03/sm-card-ice-block.png"></span>
                                </li><li data-tooltip-img="http://www.hearthstonetopdecks.com/wp-content/uploads/2014/03/fireball-200x286.png" class="card-frame free-card "><span class="card-cost">4</span><a href="http://www.hearthstonetopdecks.com/cards/fireball/"><span class="card-name">Fireball</span></a><span class="card-count">2</span><span class="card-image card-count-ex"><img src="http://www.hearthstonetopdecks.com/wp-content/uploads/2014/03/sm-card-fireball.png"></span>
                                </li><li data-tooltip-img="http://www.hearthstonetopdecks.com/wp-content/uploads/2016/03/cabalists-tome-hd-200x286.png" class="card-frame epic-card "><span class="card-cost">5</span><a href="http://www.hearthstonetopdecks.com/cards/cabalists-tome/"><span class="card-name">Cabalist’s Tome</span></a><span class="card-count">1</span><span class="card-image card-count-ex"><img src="http://www.hearthstonetopdecks.com/wp-content/uploads/2016/03/sm-card_cabalists-tome.png"></span>
                                </li>						</ul>
                        </div>

                        <div class="col-md-6 deck-list">
                            <div class="deck-header">
                                <div class="dk-name">
                                    <strong>Общие (6)</strong>
                                </div>
                            </div>
                            <ul class="deck-class neutral-cards">
                                <li data-tooltip-img="http://www.hearthstonetopdecks.com/wp-content/uploads/2017/03/fire-fly-200x286.png" class="card-frame common-card "><span class="card-cost">1</span><a href="http://www.hearthstonetopdecks.com/cards/fire-fly/"><span class="card-name">Fire Fly</span></a><span class="card-count">2</span><span class="card-image card-count-ex"><img src="http://www.hearthstonetopdecks.com/wp-content/uploads/2017/03/sm-fire-fly-1.png"></span>
                                </li><li data-tooltip-img="http://www.hearthstonetopdecks.com/wp-content/uploads/2016/11/kabal-courier-1-200x286.png" class="card-frame rare-card "><span class="card-cost">3</span><a href="http://www.hearthstonetopdecks.com/cards/kabal-courier/"><span class="card-name">Kabal Courier</span></a><span class="card-count">2</span><span class="card-image card-count-ex"><img src="http://www.hearthstonetopdecks.com/wp-content/uploads/2016/11/sm-kabal-courier-1.png"></span>
                                </li><li data-tooltip-img="http://www.hearthstonetopdecks.com/wp-content/uploads/2016/08/arcane-giant-200x286.png" class="card-frame epic-card "><span class="card-cost">12</span><a href="http://www.hearthstonetopdecks.com/cards/arcane-giant/"><span class="card-name">Arcane Giant</span></a><span class="card-count">2</span><span class="card-image card-count-ex"><img src="http://www.hearthstonetopdecks.com/wp-content/uploads/2016/08/sm-card-arcane-giant.png"></span>
                                </li>						</ul>
                        </div>
                    </div>

                <div class="container detail_content col-xs-12">
                    <p>Здравствуйте, уважаемые читатели hs-manacost.ru</p>
                    <p style="text-align: justify;"><strong>Экспедиция в Ун’Горо</strong> станет доступна уже очень скоро, многие откроют приобретенные 50 комплектов карт, другие же потратят заготовленные заранее чародейную пыль и золото. В игре появятся <strong><a href="http://hs-manacost.ru/vse-karty-dopolneniya-ekspediciya-v-ungoro/" target="_blank">135&nbsp;новых карт</a>,&nbsp;</strong>но и уйдут многие (6 карт из <a href="http://hs-manacost.ru/god-mamonta-volnyj-rezhim/" target="_blank">Зала славы</a>, карты Черной горы, Большого турнира и Лиги исследователей), может начать кружиться голова от перспектив создания такого огромного количества новых архетипов, либо усовершенствования старых. Поэтому в этой статье&nbsp;для вас подготовлены <strong>колоды Экспедиции в Ун’Горо для каждого класса</strong>, которые вы сможете собрать уже в скором времени. Конечно, они еще не опробованы в деле, поэтому сборки не оптимальны. Непонятно, какая мета ждет игроков в будущем, какие классы будут популярны, а какие нет. В результате чего и представленные здесь колоды очень скоро станут неактуальны, буквально через несколько дней найдутся новые оптимизированные сборки, прошедшие суровое испытание метой, которые покажут более стабильные результаты. После выхода&nbsp;дополнения 7 апреля вы сможете найти на сайте <strong>ежедневные статьи с колодами Экспедиции в Ун’Горо</strong>, которыми играют стримеры и профессиональные игроки.</p>

            </div>
            <div class="col-md-4"></div>
        </div>

        <div class="row">
            <div class="col-md-8 col-xs-12">
                <div class="comments">
                    <h3 class="title-comments">Комментарии (6)</h3>
                    <div class="row">
                        <div class="avatar">
                            <img src="https://pp.userapi.com/c625421/v625421307/46842/42u1SAcasjA.jpg" width="50" height="50" />
                            <div class="social"><span class="letter"><i class="fa fa-facebook" aria-hidden="true"></i></span></div>
                            <!--<div class="social"><span class="letter"><i class="fa fa-vk" aria-hidden="true"></i></span></div>-->
                        </div>
                        <form class="comments-form">
                            <p class="text">
                                <textarea  name="text"></textarea>
                            </p>
                            <p class="submit">
                                <input  type="submit" value="Комментировать" />
                            </p>
                        </form>
                    </div>

                    <ul class="media-list">
                        <!-- Комментарий (уровень 1) -->
                        <li class="media">
                            <div class="media-left">
                                <div class="avatar">
                                    <img class="media-object img-rounded" src="https://pp.userapi.com/c625421/v625421307/46842/42u1SAcasjA.jpg" alt="...">
                                    <div class="social"><span class="letter">B</span></div>
                                </div>
                            </div>
                            <div class="media-body">
                                <div class="media-heading">
                                    <div class="author">Дима</div>
                                    <div class="metadata">
                                        <span class="date">16 ноября 2015, 13:43</span>
                                    </div>
                                </div>
                                <div class="media-text text-justify">Lorem ipsum dolor sit amet. Blanditiis praesentium voluptatum deleniti atque. Autem vel illum, qui blanditiis praesentium voluptatum deleniti atque corrupti. Dolor repellendus cum soluta nobis. Corporis suscipit laboriosam, nisi ut enim. Debitis aut perferendis doloribus asperiores repellat. sint, obcaecati cupiditate non numquam eius. Itaque earum rerum facilis. Similique sunt in ea commodi. Dolor repellendus numquam eius modi. Quam nihil molestiae consequatur, vel illum, qui ratione voluptatem accusantium doloremque.</div>
                                <div class="footer-comment">
        <span class="vote plus" title="Нравится">
          <i class="fa fa-thumbs-up"></i>
        </span>
                                    <span class="rating">
          +1
        </span>
                                    <span class="vote minus" title="Не нравится">
          <i class="fa fa-thumbs-down"></i>
        </span>
                                    <span class="devide">
         |
        </span>
                                    <span class="comment-reply">
         <a href="#" class="reply">ответить</a>
        </span>
                                </div>

                                <!-- Вложенный медиа-компонент (уровень 2) -->
                                <div class="media">
                                    <div class="media-left">
                                        <div class="avatar">
                                            <img class="media-object img-rounded" src="https://pp.userapi.com/c625421/v625421307/46842/42u1SAcasjA.jpg" alt="...">
                                            <div class="social"><span class="letter">B</span></div>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div class="media-heading">
                                            <div class="author">Пётр</div>
                                            <div class="metadata">
                                                <span class="date">19 ноября 2015, 10:28</span>
                                            </div>
                                        </div>
                                        <div class="media-text text-justify">Dolor sit, amet, consectetur, adipisci velit. Aperiam eaque ipsa, quae. Amet, consectetur, adipisci velit, sed quia consequuntur magni dolores. Ab illo inventore veritatis et quasi architecto. Quisquam est, omnis voluptas nulla. Obcaecati cupiditate non numquam eius modi tempora. Corporis suscipit laboriosam, nisi ut labore et aut reiciendis.</div>
                                        <div class="footer-comment">
            <span class="vote plus" title="Нравится">
              <i class="fa fa-thumbs-up"></i>
            </span>
                                            <span class="rating">
              +0
            </span>
                                            <span class="vote minus" title="Не нравится">
              <i class="fa fa-thumbs-down"></i>
            </span>
                                            <span class="devide">
              |
            </span>
                                            <span class="comment-reply">
              <a href="#" class="reply">ответить</a>
            </span>
                                        </div>

                                        <!-- Вложенный медиа-компонент (уровень 3) -->
                                        <div class="media">
                                            <div class="media-left">
                                                <div class="avatar">
                                                    <img class="media-object img-rounded" src="https://pp.userapi.com/c625421/v625421307/46842/42u1SAcasjA.jpg" alt="...">
                                                    <div class="social"><span class="letter"><i class="fa fa-facebook" aria-hidden="true"></i></span></div>
                                                </div>
                                            </div>
                                            <div class="media-body">
                                                <div class="media-heading">
                                                    <div class="author">Александр</div>
                                                    <div class="metadata">
                                                        <span class="date">Вчера в 19:34</span>
                                                    </div>
                                                </div>
                                                <div class="media-text text-justify">Amet, consectetur, adipisci velit, sed ut labore et dolore. Maiores alias consequatur aut perferendis doloribus asperiores. Voluptas nulla vero eos. Minima veniam, quis nostrum exercitationem ullam corporis. Atque corrupti, quos dolores eos, qui blanditiis praesentium voluptatum deleniti atque corrupti. Quibusdam et harum quidem rerum necessitatibus saepe eveniet, ut enim ipsam. Magni dolores et dolorum fuga nostrum exercitationem ullam. Eligendi optio, cumque nihil molestiae consequatur.</div>
                                                <div class="footer-comment">
                <span class="vote plus" title="Нравится">
                  <i class="fa fa-thumbs-up"></i>
                </span>
                                                    <span class="rating">
                  +5
                </span>
                                                    <span class="vote minus" title="Не нравится">
                  <i class="fa fa-thumbs-down"></i>
                </span>
                                                    <span class="devide">
                  |
                </span>
                                                    <span class="comment-reply">
                  <a href="#" class="reply">ответить</a>
                </span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Конец вложенного комментария (уровень 3) -->

                                    </div>
                                </div>
                                <!-- Конец вложенного комментария (уровень 2) -->

                                <!-- Ещё один вложенный медиа-компонент (уровень 2) -->
                                <div class="media">
                                    <div class="media-left">
                                        <div class="avatar">
                                            <img class="media-object img-rounded" src="https://pp.userapi.com/c625421/v625421307/46842/42u1SAcasjA.jpg" alt="...">
                                            <div class="social"><span class="letter"><i class="fa fa-facebook" aria-hidden="true"></i></span></div>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div class="media-heading">
                                            <div class="author">Сергей</div>
                                            <div class="metadata">
                                                <span class="date">20 ноября 2015, 17:45</span>
                                            </div>
                                        </div>
                                        <div class="media-text text-justify">Ex ea voluptate velit esse, quam nihil impedit, quo minus id quod. Totam rem aperiam eaque ipsa, quae ab illo. Minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid. Iste natus error sit voluptatem. Sunt, explicabo deleniti atque corrupti, quos dolores et expedita.</div>
                                        <div class="footer-comment">
            <span class="vote plus" title="Нравится">
              <i class="fa fa-thumbs-up"></i>
            </span>
                                            <span class="rating">
              +1
            </span>
                                            <span class="vote minus" title="Не нравится">
              <i class="fa fa-thumbs-down"></i>
            </span>
                                            <span class="devide">
              |
            </span>
                                            <span class="comment-reply">
              <a href="#" class="reply">ответить</a>
            </span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Конец ещё одного вложенного комментария (уровень 2) -->

                            </div>
                        </li>
                        <!-- Конец комментария (уровень 1) -->

                        <!-- Комментарий (уровень 1) -->
                        <li class="media">
                            <div class="media-left">
                                <div class="avatar">
                                    <img class="media-object img-rounded" src="https://pp.userapi.com/c625421/v625421307/46842/42u1SAcasjA.jpg" alt="...">
                                    <div class="social"><span class="letter"><i class="fa fa-facebook" aria-hidden="true"></i></span></div>
                                </div>
                            </div>
                            <div class="media-body">
                                <div class="media-heading">
                                    <div class="author">Иван</div>
                                    <div class="metadata">
                                        <span class="date">Вчера в 17:34</span>
                                    </div>
                                </div>
                                <div class="media-text text-justify">Eum iure reprehenderit, qui dolorem eum fugiat. Sint et expedita distinctio velit. Architecto beatae vitae dicta sunt, explicabo unde omnis. Qui aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto. Nemo enim ipsam voluptatem quia. Eos, qui ratione voluptatem sequi nesciunt, neque porro. A sapiente delectus, ut enim ipsam voluptatem, quia non recusandae architecto beatae.</div>
                                <div class="footer-comment">
        <span class="vote plus" title="Нравится">
          <i class="fa fa-thumbs-up"></i>
        </span>
                                    <span class="rating">
          +2
        </span>
                                    <span class="vote minus" title="Не нравится">
          <i class="fa fa-thumbs-down"></i>
        </span>
                                    <span class="devide">
          |
        </span>
                                    <span class="comment-reply">
          <a href="#" class="reply">ответить</a>
        </span>
                                </div>
                            </div>
                        </li>
                        <!-- Конец комментария (уровень 1) -->

                        <!-- Комментарий (уровень 1) -->
                        <li class="media">
                            <div class="media-left">
                                <div class="avatar">
                                    <img class="media-object img-rounded" src="https://pp.userapi.com/c625421/v625421307/46842/42u1SAcasjA.jpg" alt="...">
                                    <div class="social"><span class="letter"><i class="fa fa-facebook" aria-hidden="true"></i></span></div>
                                </div>
                            </div>
                            <div class="media-body">
                                <div class="media-heading">
                                    <div class="author">Дима</div>
                                    <div class="metadata">
                                        <span class="date">3 минуты назад</span>
                                    </div>
                                </div>
                                <div class="media-text text-justify">Tempore, cum soluta nobis est et quas. Quas molestias excepturi sint, obcaecati cupiditate non provident, similique sunt in. Obcaecati cupiditate non recusandae impedit. Hic tenetur a sapiente delectus. Facere possimus, omnis dolor repellendus inventore veritatis et voluptates. Ipsa, quae ab illo inventore veritatis et quasi architecto beatae. In culpa, qui in culpa. Cum soluta nobis est laborum et aut perferendis doloribus. Vitae dicta sunt, explicabo perspiciatis. Amet, consectetur, adipisci velit, sed quia voluptas sit, aspernatur. Obcaecati cupiditate non provident, similique sunt in. Reiciendis voluptatibus maiores alias consequatur aut officiis debitis aut perferendis doloribus asperiores. Assumenda est, omnis dolor repellendus voluptas assumenda est omnis.</div>
                                <div class="footer-comment">
        <span class="vote plus" title="Нравится">
          <i class="fa fa-thumbs-up"></i>
        </span>
                                    <span class="rating">
          +0
        </span>
                                    <span class="vote minus" title="Не нравится">
          <i class="fa fa-thumbs-down"></i>
        </span>
                                    <span class="devide">
          |
        </span>
                                    <span class="comment-reply">
          <a href="#" class="reply">ответить</a>
        </span>
                                </div>
                            </div>
                        </li>
                        <!-- Конец комментария (уровень 1) -->

                    </ul>
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