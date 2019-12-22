<?php
session_start();
 
header("Content-type: text/html; charset=utf-8");
 
//クリックジャッキング対策
header('X-FRAME-OPTIONS: SAMEORIGIN');
 
?>
 
<!DOCTYPE html>
<html>
<head>
<title>メールフォーム</title>
<meta charset="utf-8">
</head>
<body>
 
<p> 全ての項目が必須です。</p>
 
<form action="contact_check.php" method="post">
 
<p>名前：<input type="text" name="name"></p>
<p>メールアドレス：<input type="text" name="mail" size="50"></p>
<p><textarea name="comment" rows="4" cols="40">コメントをどうぞ</textarea></p>
 
<input type="hidden" name="token" value="<?=sha1(session_id())?>">
<input type="submit" value="確認する">
 
</form>
 
</body>
</html>