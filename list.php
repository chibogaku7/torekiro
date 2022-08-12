<!DOCTYPE html>
<html>
    <head>
        <title>部位選択</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
        <link rel="stylesheet" href="main.css">
    </head>
    <body>
        <?php
        session_start();
        $user=$_SESSION['mail'];

        ?>
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
            <div class="header_menu"><a href="index.php">HOME</a></div>
            <p class="head_title">トレーニング履歴</p>
        </div>

        <?php



try{

    $user=$_SESSION['mail'];

    $dbh=new PDO('mysql:dbname=torekiro;charset=utf8;host=localhost','root','root');
    $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sql="SELECT date from trainning where id='$user'"; 
    $stmt=$dbh->prepare($sql);
    $stmt->execute();
    $dbh=null;


    while(true){
    $rec=$stmt->fetch(PDO::FETCH_ASSOC);


    if($rec==false){
        break;
    }
    $date=$rec['date'];
  
    print '
    <div class="part_detail_wrapper">
    <a href="list_detail.php?date='.$date.'" class="part_detail">
    <p class="detail_title">'.$date.'</p>
    <div class="arrow"></div>
     </a>
    </div>
    
    <a href="index.php" class="button_main">戻る</a>
';
     }


}

    
    catch(Exception $e){
        print '失敗';
    }
?>
        
            

        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script src="./main.js"></script>
 
    </body>
</html>