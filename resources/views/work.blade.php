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

            .content {
                height: 100vh;
                width: 100%;
                display: flex;
            }

            .left_content{
                background-color: #FF8C00;
                width: 15%;
                height: 100vh;
                posision: flex;
            }

            .right_content{
                width: 85%;
                height: 100vh;
            }

            .box{
                height: 300px;
                width: 900px;
                margin: 20px auto;
            }

            .img_box{
                height: 300px;
                width : 500px;
                margin: 0 auto;
            }

            img{
                width: 300px;
                height: 300px;
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
                            内容
                        </h2>
                    </div>
                </div>
                <div class="box">
                    <div class="img_box">
                        <img src="https://i.gyazo.com/cc3d8974487acb293c451b38a4ce3b94.jpg" class="card-img" alt="...">
                    </div>
                    <div class="title_box">
                        <h1 class="title">
                            サイト名：My recipe
                        </h1>
                    </div>
                    <div class="text_box">
                        <h2 class="text">
                            内容：
                        </h2>
                    </div>
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
                            内容
                        </h2>
                    </div>
                </div>
                
            </div>
        </div>
    </body>
</html>