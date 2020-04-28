<?php
header('Content-type: text/html; charset=utf-8');
require 'phpquery.php';
$url = 'https://www.hotnewhiphop.com/articles/news/';
$file = file_get_contents($url);
$doc = phpQuery::newDocument($file);
//echo $doc->find('.grid-item a:eq(1)')->text();


  
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="news.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hip-hop news</title>
</head>

<body>
    <div class="header">
        <div class="main">
            <a class="links" href="news.php">Главная</a>
            <div class="links" id="cd">Latest hip-hop news</div>
            <div class="links">
                Поиск
            </div>
        </div>
    </div>
    <div>
    </div>
    <div class="statya">

        <?php
            $st="gg";
            $i = 0;
            $j = 10;
            while($st!=null and $j>0){
               // $link =$doc->find(".grid-item:eq(2)");
                $st=$doc->find(".grid-item:eq({$i})");
        ?> <div class= "all">
                <div class = "photo">
                <?=$st->find("a:eq(0)")?>
                </div>
                <div><div class = "name">
                <?= $st->find("a:eq(1)")?>
                </div>
                <div class = "text">
                <?=$st->find("a:eq(2)")?>
                </div>
            </div>
                
                </div>
        <?php
                 $link = explode("\"",$st->find("a:eq(2)"));
                $j--;
                $i++;
               // echo $link[3];
                $st_url = $url.$link[3];
            }
        ?>
    </div>
</body>

</html>
