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
            <div class="body_content">
            <p class="sub_title">以下の項目を入力して<br/>会員登録を完了させてください。</p>
            </div>

            <form  class="form_flex" method="post" action="register_done.php">
                <input class="form_register" type="text"  name="mail" placeholder="ユーザー名を入力">
                <input class="form_register"  type="password" name="password" placeholder="パスワードを入力">
                <input class="button_main" type="submit" value="登録する">
            </form>





       <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script src="./main.js"></script>
</body>

    </body>
</html>