ob_start();
session_start();
if( isset($_SESSION['user']) != "") {
  header("Location: home.php");
}
include_once 'dbconnect.php';

<html lang="ja">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>PHPの会員登録機能</title>
<link rel="stylesheet" href="style.css">

<!-- Bootstrap読み込み（スタイリングのため） -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
</head>
<body>
<div class="col-xs-6 col-xs-offset-3">

<form method="post">
  <h1>会員登録フォーム</h1>
  <div class="form-group">
    <input type="text" class="form-control" name="username" placeholder="ユーザー名" required />
  </div>
  <div class="form-group">
    <input type="email"  class="form-control" name="email" placeholder="メールアドレス" required />
  </div>
  <div class="form-group">
    <input type="password" class="form-control" name="password" placeholder="パスワード" required />
  </div>
  <button type="submit" class="btn btn-default" name="signup">会員登録する</button>
  <a href="index.php">ログインはこちら</a>
</form>

</div>
</body>
</html>

// ログインボタンがクリックされたときに下記を実行
if(isset($_POST['login'])) {

  $email = $mysqli->real_escape_string($_POST['email']);
  $password = $mysqli->real_escape_string($_POST['password']);

  // クエリの実行
  $query = "SELECT * FROM users WHERE email='$email'";
  $result = $mysqli->query($query);
  if (!$result) {
    print('クエリーが失敗しました。' . $mysqli->error);
    $mysqli->close();
    exit();
  }

  // パスワード(暗号化済み）とユーザーIDの取り出し
  while ($row = $result->fetch_assoc()) {
    $db_hashed_pwd = $row['password'];
    $user_id = $row['user_id'];
  }

  // データベースの切断
  $result->close();

  // ハッシュ化されたパスワードがマッチするかどうかを確認
  if (password_verify($password, $db_hashed_pwd)) {
    $_SESSION['user'] = $user_id;
    header("Location: home.php");
    exit;
  } else { ?>
    <div class="alert alert-danger" role="alert">メールアドレスとパスワードが一致しません。</div>
  <?php }
}

