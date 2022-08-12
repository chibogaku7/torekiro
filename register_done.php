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
                <p class="head_title">新規会員登録</p>
            </div>        

            <?php
            if($_POST['mail']!=="" || $_POST['password']==""){
                print '<p class="title_sub">メールアドレス、パスワードが入力されていません。</p>';
                print '<a class="button_main" href="login.php">戻る</a>';
            }else{


            $mail=$_POST['mail'];
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
      



        try{
            $dbh=new PDO('mysql:dbname=torekiro;charset=utf8;host=localhost','root','root');
            $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


            $sql = "SELECT * FROM login WHERE mail ='$mail'";
            $stmt = $dbh->prepare($sql);
    
            $stmt->execute();
            $member = $stmt->fetch();

            $membercheck=$member['mail'];

            
            if ($membercheck === $mail) {
                print '<p class="title_sub">同じユーザー名が存在します。</p>';
                print '<a class="button_main" href="login.php">戻る</a>';
            }else{
                $sql="INSERT into login (mail,password)VALUES('$mail','$password')";
                $stmt=$dbh->prepare($sql);
                $stmt->execute();
                print '<p class="title_sub">登録が完了しました</p>';
                print '<a class="button_main" href="login.php" class="button_main">ログイン画面へ</a>';
            }
   
            $dbh=null;

        }
        catch(Exception $e){
            print '失敗しました';
        }
    }
            ?>


       <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script src="./main.js"></script>
</body>

    </body>
</html>