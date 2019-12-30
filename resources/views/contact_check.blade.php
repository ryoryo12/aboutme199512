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
        <meta charset="utf-8">

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

        </style>
        </head>
    <body>

        <?php if (count($errors) === 0): ?>

        <div class="content">
            <div class ="left_content">
                <ul class="links">
                    <a href="/prof">Profile</a>
                    <a href="/work">Works</a>
                    <a href="https://github.com/ryoryo12">GitHub</a>
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