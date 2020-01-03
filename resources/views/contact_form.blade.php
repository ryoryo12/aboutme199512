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
        <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

                <script type="text/javascript">
                    timerID = setInterval('clock()',500); //0.5秒毎にclock()を実行

                    function clock() {
                        document.getElementById("view_clock").innerHTML = getNow();
                    }

                    function getNow() {
                        var now = new Date();
                        var year = now.getFullYear();
                        var mon = now.getMonth()+1; //１を足すこと
                        var day = now.getDate();
                        var hour = now.getHours();
                        var min = now.getMinutes();
                        var sec = now.getSeconds();

                        //出力用
                        var s = year + "/" + mon + "/" + day + "/" + hour + ":" + min + ":" + sec; 
                        return s;
                    }
                    
                </script>

        <style>

            html, body {
                background: #573317;
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
                background: #d0c7b9;
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

            .footer{
                height: 8vh;
                position: fixed;
                width: 85%;
                bottom: 0px;
                left: 15%;
            }
            .footer_text_box{
                text-align: center;
                bottom: 0px;
                margin-top: 4vh;
            }

            i{
                display: inline;
                font-size: 20px;
            }

            .footer_text{
                display: inline;
                font-size: 30px;
                font-variant: all-petite-caps;
            }

            span{
                font-size: 20px;
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

            <div class="footer">
                <div class="footer_text_box">
                    <i class="fas fa-at"></i>
                    <div class='footer_text'>ryoryo's portfolio</div>
                    <span id="view_clock"></span>
                </div>
            </div>
        </div>

    </body>
</html>