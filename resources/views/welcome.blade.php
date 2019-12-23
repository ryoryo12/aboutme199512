<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>About_Me</title>

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

            .title{
                margin: 12% 20px;
                color: #AAAAAA;
                position: absolute;
            }

            .title_shadow{
                margin: 20% 35px;
                color: #666666;
            }

            .accent_1{
                position: absolute;
                color: #FF8C00;
                top: 363px;
                font-size: 120px;
                left: 439px;
            }

            .accent_2{
                position: absolute;
                color: #FF8C00;
                top: 70px;
                font-size: 200px;
                left: 550px;
            }

            .accent_1_shadow{
                position: absolute;
                color: #FFA500;
                top: 393px;
                font-size: 120px;
                left: 454px;
            }

            .accent_2_shadow{
                position: absolute;
                color: #FFA500;
                top: 100px;
                font-size: 200px;
                left: 565px;
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

            .right_content{
                height: 100vh;
                width: 15%;
                right: 0px;
            }

            .right_text{
                transform: rotate(270deg);
                margin-top: 600px;
                font-size: 20px;
                width: 300px;
            }

        </style>
    </head>
    <body>
        <div class="content">
            <div class ="left_content">
                <ul class="links">
                    <a href="/work">Works</a>
                    <a href="https://github.com/ryoryo12">GitHub</a>
                    <a href="https://www.facebook.com/ryota.hirata.986">Facebook</a>
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
            
        </div>
    </body>
</html>
