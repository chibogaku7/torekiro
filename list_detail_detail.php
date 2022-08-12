<!DOCTYPE html>
<html>
    <head>
        <title>部位選択</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
        <link rel="stylesheet" href="main.css">
    </head>
    <body>
    <div class="openbtn"><span></span><span></span><span></span></div>
            <nav id="g-nav">
            <div id="g-nav-list"><!--ナビの数が増えた場合縦スクロールするためのdiv※不要なら削除-->
            <ul>
            <li><a href="./index.php">HOME</a></li> 
            <li><a href="./train_name.php">記録する</a></li> 
            <li><a href="./kiroku.php">記録を見る</a></li> 
            </ul>
            </div>
            </nav>

    <?php
            date_default_timezone_set('Asia/Tokyo');

            $date=$_GET['date'];
            $detail=$_GET['part'];

                if($detail=='benchpress'){
                    $detail1='ベンチプレス';
                }
                if($detail=='chestpress'){
                    $detail1='チェストプレス';
                }
                if($detail=='dumbbellfly'){
                    $detail1='ダンベルフライ';
                }
                if($detail=='latpulldown'){
                    $detail1='ラットプルダウン';
                }
                if($detail=='deadlift'){
                    $detail1='デットリフト';
                }
                if($detail=='chinning'){
                    $detail1='チンニング';
                }
                if($detail=='armcurl'){
                    $detail1='アームカール';
                }
                if($detail=='sideraise'){
                    $detail1='サイドレイズ';
                }
                if($detail=='shoulderpress'){
                    $detail1='ショルダープレス';
                }
                if($detail=='frontraize'){
                    $detail1='フロントレイズ';
                }
                if($detail=='squat'){
                    $detail1='スクワット';
                }
                if($detail=='legpress'){
                    $detail1='レッグプレス';
                }
                if($detail=='legextension'){
                    $detail1='レッグレクステンション';
                }
                if($detail=='other'){
                    $detail1='その他';
                }


                print '
                <div class="head">
                <p class="head_title">'.$detail1.'</p>
                </div>';
                    session_start();
                    $user=$_SESSION['mail'];

                    $dbh=new PDO('mysql:dbname=torekiro;charset=utf8;host=localhost','root','root');
                    $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                    $sql="SELECT * from trainning where date='$date' AND id='$user' AND part='$detail'"; 
                    $stmt=$dbh->prepare($sql);
                    $stmt->execute();
                    $dbh=null;
                    $rec=$stmt->fetch(PDO::FETCH_ASSOC);
                    $kg1=$rec['kg1'];
                    $kg2=$rec['kg2'];
                    $kg3=$rec['kg3'];
                    $kg4=$rec['kg4'];
                    $kg5=$rec['kg5'];
                    $kai1=$rec['kai1'];
                    $kai2=$rec['kai2'];
                    $kai3=$rec['kai3'];
                    $kai4=$rec['kai4'];
                    $kai5=$rec['kai5'];     
                    
                    
                    print '';
        ?>


<div>
    <p class="kaime">1回目</p>
    <div class="flex_block1">
        <div class="block1">
            <p class="number_view"><?php print $kg1 ?></p>
            <p class="atai">kg</p>        
        </div>
        <div class="block1">
            <p class="number_view"><?php print $kai1 ?></p>
            <p class="atai">回</p>            
        </div>
    </div>
    <p class="kaime">1回目</p>
    <div class="flex_block1">
        <div class="block1">
            <p class="number_view"><?php print $kg2 ?></p>
            <p class="atai">kg</p>        
        </div>
        <div class="block1">
            <p class="number_view"><?php print $kai2 ?></p>
            <p class="atai">回</p>            
        </div>
    </div>
    <p class="kaime">1回目</p>
    <div class="flex_block1">
        <div class="block1">
            <p class="number_view"><?php print $kg3 ?></p>
            <p class="atai">kg</p>        
        </div>
        <div class="block1">
            <p class="number_view"><?php print $kai3 ?></p>
            <p class="atai">回</p>            
        </div>
    </div>
    <p class="kaime">1回目</p>
    <div class="flex_block1">
        <div class="block1">
            <p class="number_view"><?php print $kg4 ?></p>
            <p class="atai">kg</p>        
        </div>
        <div class="block1">
            <p class="number_view"><?php print $kai4 ?></p>
            <p class="atai">回</p>            
        </div>
    </div>
    <p class="kaime">1回目</p>
    <div class="flex_block1">
        <div class="block1">
            <p class="number_view"><?php print $kg5 ?></p>
            <p class="atai">kg</p>        
        </div>
        <div class="block1">
            <p class="number_view"><?php print $kai5 ?></p>
            <p class="atai">回</p>            
        </div>
    </div>
</div>

<a href="list_detail.php?date=<?php print$date ?>" class="button_main">戻る</a>


 


<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script src="./main.js"></script>

    </body>
</html>