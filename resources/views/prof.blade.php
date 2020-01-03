<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Profile</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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


        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- Styles -->
        <style>
            
            html, body {
                background: #573317;
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
                background: #d0c7b9;
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

            .content_text_box{
                width: 80%;
                margin: 0 auto;
                border: solid 2px #FF8C00;
            }

            .content_text_name{
              font-size: 30px;
              color: #FF8C00;
            }

            .content_text_title{
              font-size: 50px;
              color: #FF8C00;
            }

            .content_text{
              font-size: 20px;
            }

            .content_text_skill{
              font-size: 20px;
              border: solid 1px #FF8C00;
              margin: 10px;
              display: inline;
            }



            .footer{
                height: 8vh;
                position: fixed;
                width: 80%;
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
                    <div class="content_title">PROFILE</div>
                </div>
                <div class="content_text_box">
                    <div class="content_text_name">
                    平田 亮太
                    </div>
                    <div class="content_text_title">HISTORY</div>
                    <div class="content_text">
                    現在24歳。
                    甲南大学経済学部経済学科を卒業後、新卒で某大手住宅会社に営業として入社し、約1年4ヶ月で退職。
                    その後TECH：EXPERTに入学し、プログラミングの楽しさを知り、夢中でプログラミングを学習中。
                    </div>
                    <div class="content_text_title">SKILLS</div>
                    <div class="content_text_skill">
                    HTML
                    </div>
                    <div class="content_text_skill">
                    CSS
                    </div>
                    <div class="content_text_skill">
                    SCSS
                    </div>
                    <div class="content_text_skill">
                    Ruby
                    </div>
                    <div class="content_text_skill">
                    Rails
                    </div>
                    <div class="content_text_skill">
                    JavaScript
                    </div>
                    <div class="content_text_skill">
                    jQuery
                    </div>
                    <div class="content_text_skill">
                    PHP
                    </div>
                    <div class="content_text_skill">
                    Laravel
                    </div>
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