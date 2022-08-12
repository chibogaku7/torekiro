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
            <p class="head_title">鍛える部位</p>
        </div>


        <div class="body_part">
            <a href="body_detail.php?id=chest" class="body_part_card">
                <img class="body_part_img" src="./img/chest.png">
                <p class="body_part_text">胸</p>
            </a>
        

            <a href="body_detail.php?id=back" class="body_part_card">
                <img class="body_part_img" src="./img/back.png">
                <p class="body_part_text">背中</p>
            </a>

            <a href="body_detail.php?id=arm" class="body_part_card">
                <img class="body_part_img" src="./img/arm.png">
                <p class="body_part_text">腕</p>
            </a>

            <a href="body_detail.php?id=shoulder" class="body_part_card">
                <img class="body_part_img" src="./img/shoulder.png">
                <p class="body_part_text">肩</p>
            </a>

            <a href="body_detail.php?id=leg" class="body_part_card">
                <img class="body_part_img" src="./img/leg.png">
                <p class="body_part_text">足</p>
            </a>

            <a href="body_detail.php?id=other" class="body_part_card">
                <img class="body_part_img" src="./img/other.png">
                <p class="body_part_text">その他</p>
            </a>


        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script src="./main.js"></script>
    </body>
</html> 