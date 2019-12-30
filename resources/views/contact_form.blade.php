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
            height: 100%;
            width: 100%;
            margin: 0 auto;
          }

          h1{
            text-align: center;
          }

          form{
            text-align: center;
          }

          .left_content{
                width: 14%;
                top: 0px;
                position: fixed;
                border-right: solid 1px #FFA500;
            }

            .right_content{
                width: 85%;
                position: absolute;
                right: 0px;
                border-left: solid 1px #FF8C00;
                height: 100%;
            }

          a {
              display: block;
              margin: 150px; 
              transform: rotate(270deg);
              color: #777777;
              right: 0;
              font-size: 22px;
              font-weight: 600;
              letter-spacing: .1rem;
              text-decoration: none;
              text-transform: uppercase;
          }

          
        </style>
      </head>
      <body>
        <div class="content">
            <div class ="left_content">
                <ul class="links">
                    <a href="/prof">Profile</a>
                    <a href="/work">Works</a>
                    <a href="https://github.com/ryoryo12" target="_blank">GitHub</a>
                    <a href="/contact_form">Contact</a>
                </ul>
            </div>
            <div class="right_content">
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
        </div>

    </body>
</html>