<?php

session_start();

header("Content-type: text/html; charset=utf-8");

//クリックジャッキング対策
header('X-FRAME-OPTIONS: SAMEORIGIN');

//トークン判定
if ($_POST['token'] != sha1(session_id()) ){
	echo "不正アクセスの可能性あり";
	exit();
}
if(empty($_POST)) {
	header("Location: contact_form.php");
	exit();
}

//メールの宛先
$mailTo = 'メールアドレス';
//Return-Pathに指定するメールアドレス
$returnMail = 'メールアドレス';

//セッション変数等を各変数に設定
$name = $_SESSION['name'];
$mail = $_SESSION['mail'];
$subject = "問い合わせです";
$body = $_SESSION['comment'];

mb_language('ja');
mb_internal_encoding('UTF-8');

//Fromヘッダーを作成
$header = 'From: ' . mb_encode_mimeheader($name). ' <' . $mail. '>';

if (mb_send_mail($mailTo, $subject, $body, $header, '-f'. $returnMail)) {
	
	//セッション変数を全て解除
	$_SESSION = array();
	
        //セッションクッキーの削除
	if (isset($_COOKIE["PHPSESSID"])) {
		setcookie("PHPSESSID", '', time() - 1800, '/');
	}

 	//セッションを破棄する
		session_destroy();
		
		echo "メールが送信されました。";
		
	} else {
		echo "メールの送信に失敗しました。";
	}

?>

<!DOCTYPE html>
<html>
    <head>

        <meta charset="utf-8">

        <title>メールフォーム</title>

        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <style>

				html, body {
					background-color: #333333;
					color: #777777;
					font-family: 'Nunito', sans-serif;
					font-weight: 200;
					height: 100vh;
					margin: 0;
			}

				.content{
					height: 100%;
					width: 100%;
					margin: 0 auto;
				}

				h1{
					text-align: center;
				}

				form{
					text-align: center;
				}

				.left_content{
							width: 14%;
							top: 0px;
							position: fixed;
							border-right: solid 1px #FFA500;
					}

					.right_content{
							width: 85%;
							position: absolute;
							right: 0px;
							border-left: solid 1px #FF8C00;
							height: 100%;
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
				</style>
      </head>
      <body>
        <div class="content">
            <div class ="left_content">
                <ul class="links">
										<a href="/prof">Profile</a>
                    <a href="/work">Works</a>
                    <a href="https://github.com/ryoryo12" target="_blank">GitHub</a>
                    <a href="/contact_form">Contact</a>
                </ul>
            </div>
            <div class="right_content">
                <h1> お問い合わせありがとうございます。</h1>
            </div>
        </div>
    </body>
</html>