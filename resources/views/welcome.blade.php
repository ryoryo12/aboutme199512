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
                background-color: #fff;
                color: #636b6f;
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
            width: 100%
            }

            .left_content{
                height: 100vh;
                width: 25%;
                top: 0px;
            }

            .links{
                
            }

            a {
                display: inline-block; 
                transform: rotate(270deg);
                color: #636b6f;
                right: 0;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .center_content {
                margin-bottom: 30px;
                font-size: 84px;
            }
        </style>
    </head>
    <body>
        <div class="content">
            <div class ="left_content">
                <div class="links">
                    <a href="https://laravel.com/docs">Works</a>
                    <a href="https://github.com/ryoryo12">GitHub</a>
                    <a href="https://laravel-news.com">Contact</a>
                </div>
            </div>
            <div class ="center_content">
                Thanks
            <ol></ol>
                For
            <ol></ol>
                Coming
            </div>
        
            <div class ="right_content">
                I'm Ryota
            <ol></ol>
                I will work as a system engineer
            <ol></ol>
                based in Tokyo

        </div>
            
        </div>
    </body>
</html>
