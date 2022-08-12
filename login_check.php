<!DOCTYPE html>
<html>
    <head>
        <title>TOREKIRO1</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
        <link rel="stylesheet" href="./main.css">
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

            <div class="head">
                <p class="head_title">ログイン</p>
            </div>       
            
        <?php
        error_reporting(0);
        include "Warning.php";

        session_start();
        $mail=$_POST['mail'];

        try{
        $dbh=new PDO('mysql:dbname=torekiro;charset=utf8;host=localhost','root','root');
        $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM login WHERE mail =:mail";
        $stmt = $dbh->prepare($sql);
        $stmt->bindValue(':mail', $mail);
        $stmt->execute();
        $member = $stmt->fetch();


        }
        catch(Exception $e){
            print '失敗しました';
        }


        if (password_verify($_POST['password'], $member['password'])) {
            $_SESSION['mail'] = $member['mail'];

            print '<p class="title_sub">ログインしました</p>';
            print '<a class="button_main" href="index.php">ホームへ</a>';
        }else{
            print '<p class="title_sub">ユーザー名とパスワードが間違っています。</p>';
            print '<a class="button_main"  href="login.php">ログイン画面へ</a>';
        }

        $dbh=null;

            








        ?>

            


       <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script src="./main.js"></script>
</body>

    </body>
</html>