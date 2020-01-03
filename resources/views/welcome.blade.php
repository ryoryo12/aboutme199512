<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>About_Me</title>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <script>

            $(function() {
                setTimeout(function(){
                    $('.start h1').fadeIn(1600);
                },500); //0.5秒後にロゴをフェードイン!
                setTimeout(function(){
                    $('.start h2').fadeIn(1600);
                },1500); //0.5秒後にロゴをフェードイン!
                setTimeout(function(){
                    $('.start h3').fadeIn(1600);
                },2500); //0.5秒後にロゴをフェードイン!
                setTimeout(function(){
                    $('.start').fadeOut(500);
                },4000); //2秒後にロゴ含め真っ白背景をフェードアウト！
            });
            </script>
            
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
                background: #d0c7b9;
                color: #777777;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            .full-height {
                height: 100vh;
            }
            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }
            .position-ref {
                position: relative;
            }
            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
            .content {
            height: 100vh;
            width: 100%;
            display: flex;
            }
            .left_content{
                width: 15%;
                top: 0px;
                background: #573317;
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
            .center_content {
                border-left: solid 1px #FF8C00;
                border-right: solid 1px #FF8C00;
                font-size: 100px;
                height: 100vh;
                width: 70%;
            }
            .center_content_shadow {
                top: 0;
                left: 200px;
                border-left: solid 1px #FFA500;
                border-right: solid 1px #FFA500;
                font-size: 100px;
                height: 100vh;
                width: 72%;
                position: absolute;
            }
            .title{
                margin: 12% 20px;
                color: #a2522d;
                position: absolute;
            }
            .title_shadow{
                margin: 20% 35px;
                color: #666666;
            }
            .accent_1{
                position: absolute;
                color: #FF8C00;
                top: 364px;
                font-size: 120px;
                left: 439px;
                
            }
            .accent_2{
                position: absolute;
                color: #FF8C00;
                top: 80px;
                font-size: 200px;
                left: 542px;
            }
            .accent_1_shadow{
                position: absolute;
                color: #FFA500;
                left: 453px;
                top: 391px;
                font-size: 120px;
            }
            .accent_2_shadow{
                position: absolute;
                color: #FFA500;
                top: 105px;
                font-size: 200px;
                left: 560px;
            }
            .boxes_1{
                width: 85%;
                position: absolute;
                border-bottom: solid 1px #FF8C00;
                top: 10vh;
                right: 0px;
            }
            .boxes_2{
                width: 85%;
                position: absolute;
                border-bottom: solid 1px #FF8C00;
                bottom: 10vh;
                left: 0px
            }
            .boxes_1_shadow{
                width: 85%;
                position: absolute;
                border-bottom: solid 1px #FFA500;
                top: 8vh;
                right: 1%;
            }
            .boxes_2_shadow{
                width: 85%;
                position: absolute;
                border-bottom: solid 1px #FFA500;
                bottom: 8vh;
                left: 1%;
            }
            .right_content{
                height: 100vh;
                width: 15%;
                right: 0px;
                background: #573317;
            }
            .right_text{
                transform: rotate(270deg);
                margin-top: 600px;
                font-size: 20px;
                width: 300px;
            }

            .start {
                background: #a2522d;
                position: fixed;
                top: 0;
                left: 0;
                height: 100%;
                width: 100%;
                z-index: 9000;
            }
            .start h1 {
                position: absolute;
                margin: 0px;
                color: #FF8C00;
                font-size: 150px;
                top: 0px;
                left: 20px;
                display: none;
            }

            .start h2 {
                position: absolute;
                margin: 0px;
                color: #FF8C00;
                font-size: 150px;
                top: 308px;
                right: 500px;
                display: none;
            }

            .start h3 {
                position: absolute;
                margin: 0px;
                color: #FF8C00;
                font-size: 150px;
                right: 0;
                bottom: 0;
                display: none;
            }

            .footer{
                height: 8vh;
                position: fixed;
                width: 70%;
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
        <div class="start">
            <h1>WELCOME</h1>
            <h2>TO MY</h2>
            <h3>PORTFOLIO</h3>
        </div>
        <div class="content">
            <div class ="left_content">
                <ul class="links">
                    <a href="/prof">Profile</a>
                    <a href="/work">Works</a>
                    <a href="https://github.com/ryoryo12" target="_blank">GitHub</a>
                    <a href="/contact_form">Contact</a>
                </ul>
            </div>
            <div class ="center_content"> 
                <div class="title">
                    Thanks
                <br>
                    For
                <br>
                    Coming
                </div>
                <div class="title_shadow">
                    Thanks
                <br>
                    For
                <br>
                    Coming
                </div>
                <div class="accent_1">
                .
                </div>
                <div class="accent_2">
                .
                </div>
                <div class="accent_1_shadow">
                .
                </div>
                <div class="accent_2_shadow">
                .
                </div> 
                <div class="boxes_1"></div>
                <div class="boxes_2"></div>
                <div class="boxes_1_shadow"></div>
                <div class="boxes_2_shadow"></div>
            <div class ="center_content_shadow"></div>
            </div>
            <div class ="right_content">
                <div class="right_text">
                    I'm Ryota
                <br>
                    I will work as a system engineer
                <br>
                    based in Tokyo
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
    </body>
</html>
