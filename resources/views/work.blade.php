<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Works</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
            <script>
            </script>
        </script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- Styles -->
        <style>
            
            html, body {
                background-color: #333333;
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

        </style>
    </head>
    <body>
        <div class="content">
            <div class="left_content">
                <ul class="links">
                    <a href="/work">Works</a>
                    <a href="https://github.com/ryoryo12">GitHub</a>
                    <a href="https://www.facebook.com/ryota.hirata.986">Facebook</a>
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
                            <a href="https://practice951220.herokuapp.com/">https://practice951220.herokuapp.com/</a>
                            
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
                            <a href="https://myrecipess.herokuapp.com/">https://myrecipess.herokuapp.com/</a>
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
                            
                            <a href="http://3.112.169.24/">http://3.112.169.24/</a>
                        </h2>
                    </div>
                </div>
                
            </div>
        </div>
    </body>
</html>