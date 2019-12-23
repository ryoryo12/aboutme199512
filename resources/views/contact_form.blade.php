<?php
session_start();

header("Content-type: text/html; charset=utf-8");

//クリックジャッキング対策
header('X-FRAME-OPTIONS: SAMEORIGIN');

?>

<!DOCTYPE html>
<html>
    <head>

        <meta charset="utf-8">

        <title>メールフォーム</title>

        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <style>

          html, body {
              background-color: #333333;
              color: #777777;
              font-family: 'Nunito', sans-serif;
              font-weight: 200;
              height: 100vh;
              margin: 0;
          }

          .content{
            height: 100vh;
            width: 100vh;
            margin: 0 auto;
          }

          h1{
            text-align: center;
          }

          form{
            text-align: center;
          }

          
        </style>
      </head>
      <body>
        <div class="content">
            <h1> お問い合わせフォーム</h1>
            
            <form action="/contact_check" method="post">

            @csrf
            
                <p>名前：<input type="text" name="name"></p>
                <p>メールアドレス：<input type="text" name="mail" size="50"></p>
                <p><textarea name="comment" rows="4" cols="40">コメントをどうぞ</textarea></p>
                
                <input type="hidden" name="token" value="<?=sha1(session_id())?>">
                <input type="submit" value="確認する">
            
            </form>
          </div>

    </body>
</html>