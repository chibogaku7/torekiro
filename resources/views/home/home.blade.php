<!DOCTYPE html>
<html>
    <head>
        <title>TOREKIROログイン</title>
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
        <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    </head>


    <body>
        <div class="main_wrapper">
            <p class="main_title">TOREKIRO</p>
            <p class="main_text">確かな成長を記録に</p>
            <img src="{{asset('assets/img/torekiro_logo.png')}}" class="main_img">
        </div>


        <div id="login_form_background">

            <form method="post" action="/login" class="login_form_wrapper">
                <div class="login_form_text_wrapper">
                    <input type="text" placeholder="ニックネームを入力" name="nickname" class="login_form_text">
                    <input type="password" placeholder="パスワードを入力" name="password" class="login_form_text">
                </div>
                <input type="submit" value="ログイン" class="login_form_submit">
            </form>
            
            <a href="/user/register" class="button_text">
                <p>新規会員登録する　>></p>
            </a>

        </div>
   </body>
</html>

