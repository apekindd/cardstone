<?php use Abraham\TwitterOAuth\TwitterOAuth; ?>
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
<div class="container">
    <?php
require('autoload.php');
require('players.inc.php');

ksort($players);

foreach($players as $type=>$arPlayers){
    echo "$type";
    echo '<ul style="border:1px solid #000">';
    foreach($arPlayers as $name=>$twitter){
        $color = ($twitter == $_GET['twitter']) ? 'color:red' : 'color:#000';
        echo "<li style='display: inline-block;'><a style='padding:5px;font-weight:bold;{$color}' href='?twitter={$twitter}'>{$name}</a></li>";
    }
    echo '</ul>';
}


if($_GET['twitter'] != '') {
    $username = $_GET['twitter'];
    $connection = new TwitterOAuth('1IIaAHeDmTdM1os9MaQuoRfEu', 'IZCPdaRy39q8SnfLxvKOQWJAlR3TkWDVx2sQv3tuR2GY91pksM');
    $connection->setOauthToken('3631306215-74HwekWekmlGbT6xBvMGVlej4xwJCTqPrxW5JWx', 'tSV3IIAdAtcA0dBu8bWeh4lGTSj1C6i0WYcSvcF53AbXp');
    $content = $connection->get('statuses/user_timeline', [
            'screen_name' => $username,
            'count' => 100,
            'format' => 'json'
        ]
    );

    ?>
    <?php
    $arWords = [];
    foreach ($content as $k => $v) {
        if(empty($v->entities->media)) continue;
        ?>
        <dl class="dl-horizontal">
        <dt>Date</dt>
        <dd><?= date('d.m.Y H:i', strtotime($v->created_at)) ?></dd>

        <dt>Text</dt>
        <dd><?= $v->text ?></dd>

        <dt>Link</dt>
        <dd><a target="_blank" href='https://twitter.com/<?=$username?>/status/<?=$v->id?>'>https://twitter.com/<?=$username?>/status/<?=$v->id?></a></dd>
        <?php
        if (!empty($v->entities->media)) {
            ?>
            <dt>Images</dt>
            <dd>
        <?php
            foreach ($v->entities->media as $url) {
                echo "<a target='_blank' href='" . $url->media_url . "'><img src='" . $url->media_url . "' style='max-width=300px;max-height:300px;' /></a>";
            }
            ?>
                </dd>
                <?php
        }
        ?>
        </dl>
    <?php
    }
}
?>
    </div>
</body>
