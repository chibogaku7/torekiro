<!DOCTYPE html>
<html>
    <head>
        <title>TOREKIROログイン</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
        <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    </head>


    <body>

        <div class="nav_wrapper">
            <nav class="nav">
                <img src="{{asset('assets/img/torekiro_logo.png')}}" class="nav_img">
                <p class="nav_text">TOREKIRO</p>
            </nav>
        </div>

        <div class="body_wrapper">
            <h1 class="title">{{$nickname}}さんようこそ</h1>
            <p class="text">ホーム画面から<br/>トレーニングを開始してください</p>
        </div>

        <a href="{{url('/')}}" class="button_1">ホームへ</a>
        



    </body>
</html>

