<!DOCTYPE html>
<html>
    <head>
        <title>TOREKIRO</title>
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


        <div class="main_page">
        <img src="./img/logo.png" class="logo">
        </div>

        <div class="main_text">
            <p class="title">TOREKIRO</p>
            <p class="sub_title">タップだけの簡単入力<br/>継続できる筋トレ管理</p>
        </div>

       <a class="button_main" href="train_name.php">トレーニングを始める</a>
       <a class="button_sub" href="#">記録を見る</a>
  
       <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script src="main.js"></script>
</body>

    </body>
</html>