<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Profile</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
            <script>
            </script>
        </script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
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
                height: 100%;
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
                    <div class="content_title">ME</div>
                <div class="right_content_text">
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>