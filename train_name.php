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

       <div class="head">
            <p class="head_title"><?PHP print date("Y-n-j") ?></p>
        </div>

        <?php



            try{
                $date=date('y-m-d');
                $id='IDが入る';

                $dbh=new PDO('mysql:dbname=torekiro;charset=utf8;host=localhost','root','root');
                $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                $sql="SELECT part from trainning where date='$date' AND id='$id'"; 
                $stmt=$dbh->prepare($sql);
                $stmt->execute();
                $dbh=null;
    

                while(true){
                $rec=$stmt->fetch(PDO::FETCH_ASSOC);


                if($rec==false){
                    break;
                }
                $detail=$rec['part'];
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
                <div class="part_detail_wrapper">
                <a href="body_train_fix.php?part='.$detail.'" class="part_detail">
                <p class="detail_title">'.$detail1.'</p>
                <div class="arrow"></div>
                 </a>
                </div>';
                 }
        
        
            }

                
                catch(Exception $e){
                    print '失敗';
                }

                print ' <a href="body_part.php" class="button_main">追加する</a>';
        ?>
        
            

        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script src="./main.js"></script>
 
    </body>
</html>