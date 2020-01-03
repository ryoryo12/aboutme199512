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
 
//前後にある半角全角スペースを削除する関数
function spaceTrim ($str) {
	// 行頭
	$str = preg_replace('/^[ 　]+/u', '', $str);
	// 末尾
	$str = preg_replace('/[ 　]+$/u', '', $str);
	return $str;
}
 
//エラーメッセージの初期化
$errors = array();
 
if(empty($_POST)) {
	header("Location: contact_form.php");
	exit();
}else{
	//POSTされたデータを各変数に入れる
	$name = isset($_POST['name']) ? $_POST['name'] : NULL;
	$mail = isset($_POST['mail']) ? $_POST['mail'] : NULL;
	$comment = isset($_POST['comment']) ? $_POST['comment'] : NULL;
	
	//前後にある半角全角スペースを削除
	$name = spaceTrim($name);
	$mail = spaceTrim($mail);
	$comment = spaceTrim($comment);
 
	//名前入力判定
	if ($name == ''){
		$errors['name'] = "名前が入力されていません。";
	}else{
		if(mb_strlen($name)>10){
			$errors['name_length'] = "名前は10文字以内で入力して下さい。";
		}
	}
	
	//メール入力判定
	if ($mail == ''){
		$errors['mail'] = "メールが入力されていません。";
	}else{
		if(!preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $mail)){
			$errors['mail_check'] = "メールアドレスの形式が正しくありません。";
		}
	}
	
	//コメント入力判定
	if ($comment == ''){
		$errors['comment'] = "コメントが入力されていません。";
	}else{
		if(mb_strlen($comment)>1000){
			$errors['comment_length'] = "コメントは1000文字以内で入力して下さい。";
		}
	}
}
 
//エラーが無ければセッションに登録
if(count($errors) === 0){
	$_SESSION['name'] = $name;
	$_SESSION['mail'] = $mail;
	$_SESSION['comment'] = $comment;
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>お問い合わせ内容の確認</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
        <meta charset="utf-8">

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

          .content{
            height: 100vh;
            width: 100%;
            margin: 0 auto;
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

          form{
            text-align: center;
          }

          .footer{
                height: 8vh;
                position: fixed;
                width: 85%;
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

        <?php if (count($errors) === 0): ?>

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

              <form action="/contact_send" method="post">
              @csrf


                  <p>名前：<?=htmlspecialchars($name, ENT_QUOTES)?></p>
                  <p>メールアドレス：<?=htmlspecialchars($mail, ENT_QUOTES)?></p>
                  <p><?=nl2br(htmlspecialchars($comment, ENT_QUOTES))?></p>

                  <input type="button" value="戻る" onClick="history.back()">
                  <input type="hidden" name="token" value="<?=$_POST['token']?>">
                  <input type="submit" value="送信する">

              </form>
            </div>
            <div class="footer">
                <div class="footer_text_box">
                    <i class="fas fa-at"></i>
                    <div class='footer_text'>ryoryo's portfolio</div>
                    <span id="view_clock"></span>
                </div>
            </div>

        </div>

        <?php elseif(count($errors) > 0): ?>

        <?php
        foreach($errors as $value){
          echo "<p>".$value."</p>";
        }
        ?>

        <input type="button" value="戻る" onClick="history.back()">

        <?php endif; ?>

    </body>
</html>