<!DOCTYPE html>
<html>
    <head>
        <title>TOREKIROログイン</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
        <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    </head>


    <body>
    <div class="login_flex">
        <div class="main_wrapper">
            <p class="main_title">TOREKIRO</p>
            <p class="main_text">確かな成長を記録に</p>
            <img src="{{asset('assets/img/torekiro_logo.png')}}" class="main_img">
        </div>


       

        <div class="login_form_background">

            @if (session('message'))
            <div class="varidation">
                {{ session('message') }}
            </div>
            @endif
    

            <form method="POST" action="{{url('/login')}}" class="login_form_wrapper">
                @csrf
                @if ($errors->first('nickname'))  
                            <p class="validation">※{{$errors->first('nickname')}}</p>
                            @endif


                <div class="login_form_text_wrapper">
                    <div>
                       <input type="text" placeholder="ニックネームを入力" name="nickname" class="login_form_text">
                    </div>

                    <div>
                       <input type="password" placeholder="パスワードを入力" name="password" class="login_form_text">
                    </div>
                </div>
                <input type="submit" value="ログイン" class="login_form_submit">
            </form>
            
            <a href="/user/register" class="button_text">
                <p>新規会員登録する　>></p>
            </a>

        </div>
    </div>
   </body>
</html>

