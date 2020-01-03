<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Works</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
        <!-- Styles -->
        <style>
            
            html, body {
                background: #42275a;
                background: -webkit-linear-gradient(to right, #734b6d, #42275a);
                background: linear-gradient(to right, #734b6d, #42275a);
                color: #777777;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;

            }

            .links a {
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

            a{
                color: #777777;
                text-decoration: none;
            }

            .content {
                height: 100vh;
                width: 100%;
                display: flex;
            }

            .left_content{
                width: 14%;
                height: 100%;
                position: fixed;
                border-right: solid 1px #FFA500;
            }

            .right_content{
                width: 85%;
                position: absolute;
                right: 0px;
                border-left: solid 1px #FF8C00;
            }

            .content_title_box{
                width:40%;
                height:150px;
                background: #FF8C00;
                margin: 30px auto;
                text-align:center;
                transform:skew(5deg,5deg);
            }

            .content_title{
                text-align: center;
                margin: 10px;
                font-size: 100px;
                width: 100%;

            }

            .box{
                border: solid 3px #FF8C00;
                width: 800px;
                margin: 10px auto;
                
            }

            .img_box{
                height: 400px;
                width : 640px;
                margin: auto;
            }

            img{
                height: 400px;
                width : 640px;
            }

            .title{
                text-align: center;
            }

            .text{
                width: 640px;
                margin: 0 auto;
            }

            .footer{
                height: 8vh;
                position: relative;
                width: 70%;
                bottom: 0px;
                left: 15%;
            }
            .footer_text_box{
                text-align: center;
                bottom: 0px;
                margin-top: 10vh;
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
            <div class="left_content">
                <ul class="links">
                    <a href="/prof">Profile</a>
                    <a href="/work">Works</a>
                    <a href="https://github.com/ryoryo12" target="_blank">GitHub</a>
                    <a href="/contact_form">Contact</a>
                </ul>
            </div>
            <div class="right_content">
                <div class="content_title_box">
                    <div class="content_title">WORKS</div>
                </div>
                <div class="box">
                    <div class="title_box">
                        <h1 class="title">
                            サイト名：practice
                        </h1>
                    </div>
                    <div class="img_box">
                        <img src="https://i.gyazo.com/437f494d4d6c936811dbe6013bf12491.png" class="card-img" alt="...">
                    </div>
                    <div class="text_box">
                        <h2 class="text">
                            麻雀に関係する機能を詰め込んだアプリです。点数計算表、電卓アプリ、メモ機能、ブロック崩しゲームの実装を致しました。
                            言語はRuby,DBはPostgres,本番環境はHerokuです。下記URLからご覧いただけます。
                            <a href="https://practice951220.herokuapp.com/" target="_blank">https://practice951220.herokuapp.com/</a>
                            
                        </h2>
                    </div>
                </div>
                <div class="box">
                    <div class="title_box">
                        <h1 class="title">
                            サイト名：My recipe
                        </h1>
                    </div>
                    <div class="img_box">
                        <img src="https://i.gyazo.com/cc3d8974487acb293c451b38a4ce3b94.jpg" class="card-img" alt="...">
                    </div>
                    <div class="text_box">
                        <h2 class="text">
                            料理レシピ投稿サービスです。私が担当した箇所はユーザーのマイページ　ユーザーの一覧表示機能　トップページのマークアップ　レシピの詳細表示　ユーザーのプロフィール編集ページです。
                            言語はRuby,DBはMySQL,本番環境はHerokuです。下記URLからご覧いただけます。

                            <a href="https://myrecipess.herokuapp.com/" target="_blank">https://myrecipess.herokuapp.com/</a>
                        </h2>
                    </div>
                </div>
                <div class="box">
                    <div class="title_box">
                        <h1 class="title">
                            サイト名：freemarket_sample_61d
                        </h1>
                    </div>
                    <div class="img_box">
                        <img src="https://i.gyazo.com/33c2cda40acfc6dfcbc36cc30d6555df.jpg" class="card-img" alt="...">
                    </div>
                    <div class="text_box">
                        <h2 class="text">
                            フリーマーケットアプリケーションである「メルカリ」のコピーサイトを作成しました。担当箇所はトップページ　商品一覧表示機能　商品購入機能　カテゴリーごとの商品の一覧表示機能　モデルのテストです。
                            言語はRuby,DBはMySQL,本番環境はAWS EC2です。下記URLからご覧いただけます。（id:admin pass:2222です。）

                            <a href="http://3.112.169.24/" target="_blank">http://3.112.169.24/</a>
                        </h2>
                    </div>
                </div>
                <div class="footer">
                    <div class="footer_text_box">
                        <i class="fas fa-at"></i>
                        <div class='footer_text'>ryoryo's portfolio</div>
                        <span id="view_clock"></span>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>