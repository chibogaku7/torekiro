<!DOCTYPE html>
<html>
    <head>
        <title>TOREKIROログイン</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
        <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    </head>


    <body>
        <div>
            <div class="nav_wrapper">
                <nav class="nav">
                    <img src="{{asset('assets/img/torekiro_logo.png')}}" class="nav_img">
                    <p class="nav_text">TOREKIRO</p>
                </nav>
            </div>

            <div class="body_wrapper">
                <h1 class="title">会員登録</h1>
                <p class="text">以下の項目を入力して<br/>会員登録を完了させてください。</p>
            </div>



            <form method="POST" action="{{url('/user/register')}}" class="login_form_wrapper">
                <div class="login_form_text_wrapper">
                    <div>
                        @csrf
                        <input type="text" placeholder="ニックネームを入力" name="nickname" class="login_form_text">
                            @if ($errors->first('nickname'))  
                            <p class="validation">※{{$errors->first('nickname')}}</p>
                            @endif
                    </div>

                    <div>
                        <input type="password" placeholder="パスワードを入力" name="password" class="login_form_text">
                            @if ($errors->first('password'))
                            <p class="validation">※{{$errors->first('password')}}</p>
                            @endif
                    </div>

                </div>
                <input type="submit" value="新規会員登録" class="login_form_submit">
            </form>
        </div>

    </body>
</html>



