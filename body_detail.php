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
        $part=$_GET['id'];
        
        if($part=='chest'){
            $part='胸';
            $detail1='ベンチプレス';
            $detail2='チェストプレス';
            $detail3='ダンベルフライ';    
            $id1='benchpress';
            $id2='chestpress';
            $id3='dumbbellfly';        
        }

        if($part=='back'){
            $part='背中';
            $detail1='ラットプルダウン';
            $detail2='デットリフト';
            $detail3='チンニング'; 
            $id1='latpulldown';
            $id2='deadlift';
            $id3='chinning'; 
        }

        if($part=='arm'){
            $part='腕';
            $detail1='アームカール'; 
            $id1='armcurl';
        }

        if($part=='shoulder'){
            $part='肩';
            $part='背中';
            $detail1='サイドレイズ';
            $detail2='ショルダープレス';
            $detail3='フロントレイズ';  
            $id1='sideraise';
            $id2='shoulderpress';
            $id3='frontraize';
        }

        if($part=='leg'){
            $part='足';
            $detail1='スクワット';
            $detail2='レッグプレス';
            $detail3='レッグエクステンション';  
            $id1='squat';
            $id2='legpress';
            $id3='legextension';           
        }

        if($part=='other'){
            $part='その他';
            $detail1='その他';   
            $id1='other';    
        }


        print '
        <div class="head">
            <p class="head_title">'.$part.'</p>
        </div>
        ';

        if(isset($detail1)){
            print'
            <div class="part_detail_wrapper">
            <a href="body_train.php?detail='.$id1.'" class="part_detail">
            <p class="detail_title">'.$detail1.'</p>
            <div class="arrow"></div>
        </a>
       </div>
            ' ;
        }

        if(isset($detail2)){
            print'
            <div class="part_detail_wrapper">
            <a href="body_train.php?detail='.$id2.'" class="part_detail">
            <p class="detail_title">'.$detail2.'</p>
            <div class="arrow"></div>
        </a>
       </div>
            ';
        }else{

        }

        if(isset($detail3)){
            print'
            <div class="part_detail_wrapper">
            <a href="body_train.php?detail='.$id3.'" class="part_detail">
            <p class="detail_title">'.$detail3.'</p>
            <div class="arrow"></div>
        </a>
       </div>
            ';
        }else{

        }


        ?>
    

 


  
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script src="./main.js"></script>
    </body>
</html>