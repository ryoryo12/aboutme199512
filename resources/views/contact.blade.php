<!DOCTYPE html>
<?php 
if(!$_POST){
header('Location: /');
}
session_start();
if(isset($_POST['name'],$_POST['email'],$_POST['comment'])){
$_SESSION['name'] = $_POST['name'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['comment'] = $_POST['comment'];
}
?>
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
                right: 753px;
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
                font-size: 17px;
                width: 300px;
            }
        </style>
    </head>
    <body>
    <div class="tb-cell mail-form">
<form id="form" action="mail.php" method="post">
<div class="row">
<div class="cell">
<label>name</label>
<!--cell--></div>
<div class="cell">
<input type="text" name="name" required>
<!--cell--></div>
<!--row--></div>
<div class="row">
<div class="cell">
<label>email</label>
<!--cell--></div>
<div class="cell">
<input type="email" name="email" required>
<!--cell--></div>
<!--row--></div>
<div class="row">
<div class="cell">
<label>comment</label>
<!--cell--></div>
<div class="cell">
<textarea name="comment" required></textarea>
<!--cell--></div>
<!--row--></div>
<div class="row">
<div class="cell">
&nbsp;
<!--cell--></div>
<div class="cell">
<button type="submit" id="sbtn" name="action" value="post">入力内容を確認</button>
<button type="reset" id="rbtn">リセット</button>
<!--cell--></div>
<!--row--></div>
</form>
<!--tb-cell--></div>
    </body>
</html>
