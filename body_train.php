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
            ?>


        <?php
        $detail=$_GET['detail'];

    
        
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
        </div>
    
        <form class="form" method="post" action="blank.php">
            <input type="hidden" name="part" value="'.$detail.'">
            <div class="form_set">
                <p class="form_text">1セット</p>
            <div class="form_input"><input type="number" name="kg" class="kg" value=0><span class="train_text">kg</span></div>
            <div class="form_input"><input type="number" name="kai" class="kg" value=0><span class="train_text">回</span></div>
            </div>
            <div class="form_set">
            <p class="form_text">2セット</p>
            <div class="form_input"><input type="number" name="kg2" class="kg" value=0><span class="train_text">kg</span></div>
            <div class="form_input"><input type="number" name="kai2" class="kg" value=0><span class="train_text">回</span></div>
            </div>
            <div class="form_set">
            <p class="form_text">3セット</p>
            <div class="form_input"><input type="number" name="kg3" class="kg" value=0><span class="train_text" >kg</span></div>
            <div class="form_input"><input type="number" name="kai3" class="kg" value=0><span class="train_text">回</span></div>
            </div>
            <div class="form_set">
            <p class="form_text">4セット</p>
            <div class="form_input"><input type="number" name="kg4" class="kg" value=0><span class="train_text">kg</span></div>
            <div class="form_input"><input type="number" name="kai4" class="kg"value=0><span class="train_text">回</span></div>
            </div>
            <div class="form_set">
            <p class="form_text">5セット</p>
            <div class="form_input"><input type="number" name="kg5" class="kg" value=0><span class="train_text">kg</span></div>
            <div class="form_input"><input type="number" name="kai5" class="kg"value=0><span class="train_text">回</span></div>
            </div>
            <div class="submit_wrap"><input type="submit" value="保存する" class="submit"></div>
        </form>
        
        ';
        ?>

 


<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script src="./main.js"></script>
    </body>
</html>