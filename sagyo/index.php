
<?php

session_start();

if (!empty($_POST)){


$_session['join'] = $_post;
$_session['join']['image'] = $image;
header('Location: check.php'); 

}

?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<title>ログイン情報をログアウトするまで保持する</title>
</head>

<body>
<div id="wrap">
<div id="head">
<h1>会員登録</h1>
</div>

<div id="content">
<form action="check.php" method="post">
<dl>
<dt>ユーザー名</dt>
<dd><input type="text" class="form-control" name="username" placeholder="ユーザー名" required /></dd>

<dt>メールアドレス</dt>
<dd><input type="email"  class="form-control" name="email" placeholder="メールアドレス" required /></dd>

<dt>パスワード</dt>
<dd><input type="password" name="password" id="password" /></dd>
</dl>
<input type="submit" value="送信する" />
</form>
</div>

<div id="foot">
<p><img src="images/txt_copyright.png" width="136" height="15" alt="(C) H2O Space. MYCOM" /></p>
</div>

</div>
</body>
</html>
