<?php

session_start();

if (!empty($_POST)){


$_session['join'] = $_post;
$_session['join']['image'] = $image;
header('Location: check2.php'); 

}

?>

<!DOCTYPE HTML>
<html lang="ja">

<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>PHPの会員登録機能</title>

<!-- Bootstrap読み込み（スタイリングのため） -->
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">-->
</head>
<body>
<div class="col-xs-6 col-xs-offset-3">

<form action="check2.php" method="post">
  <h1>会員登録フォーム</h1>
  <div class="form-group">
    <input type="text" class="form-control" name="username" placeholder="ユーザー名" required />
  </div>
  <div class="form-group">
    <input type="email"  class="form-control" name="email" placeholder="メールアドレス" required />
  </div>
  <div>
      <div class="form-group">
    <input type="file"  class="form-control" name="gazou" size="10" placeholder="画像" required />
  </div>
  <div class="form-group">
    <input type="password" class="form-control" name="password" placeholder="パスワード" required />
  </div>
  <input type="submit" class="btn btn-default" name="signup"/>
  <a href="index.php">ログインはこちら</a>
</form>

</div>
</body>
</html>