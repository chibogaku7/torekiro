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
            <li><a href="index.php">HOME</a></li> 
            <li><a href="train_name.php">記録する</a></li> 
            <li><a href="kiroku.php">記録を見る</a></li> 
            </ul>
            </div>
            </nav>

    <?php
            date_default_timezone_set('Asia/Tokyo');
            ?>
    <div class="head">
<p class="head_title">登録が完了しました</p>
</div>        
<?php
try{
$part=$_POST['part'];
$date=date('y-m-d');
$id='IDが入る';
$kg1=$_POST['kg'];
$kg2=$_POST['kg2'];
$kg3=$_POST['kg3'];
$kg4=$_POST['kg4'];
$kg5=$_POST['kg5'];
$kai1=$_POST['kai'];
$kai2=$_POST['kai2'];
$kai3=$_POST['kai3'];
$kai4=$_POST['kai4'];
$kai5=$_POST['kai5'];

$dbh=new PDO('mysql:dbname=torekiro;charset=utf8;host=localhost','root','root');
$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$sql="INSERT into trainning (date,id,part,kg1,kg2,kg3,kg4,kg5,kai1,kai2,kai3,kai4,kai5)VALUES('$date','$id','$part','$kg1','$kg2','$kg3','$kg4','$kg5','$kai1','$kai2','$kai3','$kai4','$kai5')";
$stmt=$dbh->prepare($sql);
$stmt->execute();
$dbh=null;

print '<a href="train_name.php" class="button_main">トレーニング一覧へ</a>';

}
catch(Exception $e){
    print '失敗';
}
?>
       <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script src="main.js"></script>
</body>

