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

            .links{
                position: absolute;
                width: 25%;
                height: 100vh;
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
                margin: 100px;
            }

            .accent{
                position: absolute;
                color: #FF8C00;
                top: 292px;
                font-size: 120px;
                right: 896px;
            }

            .boxes_1{
                width: 100%;
                position: absolute;
                border-bottom: solid 1px #FF8C00;
                top: 25vh;
            }
            .boxes_2{
                height: 100vh;
                width: 20%;
                position: absolute;
                border-right: solid 1px #FF8C00;
                top: 0px;
                left: 50vh;
            }

            .right_content{
                height: 100vh;
                width: 15%;
                margin: 0 auto;
            }

            .right_text{
                display: inline-block;
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
                <div class="links">
                    <a href="/work">Works</a>
                    <a href="https://github.com/ryoryo12">GitHub</a>
                    <a href="https://www.facebook.com/ryota.hirata.986">Facebook</a>
                    <a href="/contact_form">Contact</a>
                </div>
            </div>

            <div class ="center_content">
                <div class="title">
                    Thanks
                <br>
                    For
                <br>
                    Coming
                </div>
                <div class="accent">
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
