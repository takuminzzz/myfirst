<?php
session_start();
require('./dbconnect.php');

if (!isset($_SESSION['join'])) {
	header('Location: index.php');
}

include_once ' dbconnect.php ' ;
?>
<?php
if (!empty($_POST)) {
	$sql = sprintf('INSERT INFO members SET name="%s", email="%s" password="%s"',
		mysql_real_escape_string($SESSION['join']['username']),
	mysql_real_escape_string($SESSION['join']['email']),
	mysql_real_escape_string($SESSION['join']['password'])),
	date('Y-m-d H:i:s')
);
    mysql_query($sql) or die(mysql_error());
    unset($_SESSION['join']);
    header('Location: thanks.php');
}
?>

<form action="" method="post">
 <input type="hidden" name="action" value="submit" />
 <dl>

<?php
if (!isset($_POST['username'])) {
	$_SESSION['username'] = $_POST['username'];
}
if (!isset($_POST['email'])) {
	$_SESSION['email'] = $_POST['email'];
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<title>会員登録確認画面</title>
</head>

<body>
<div id="wrap">
<div id="head">
<h1>会員登録確認画面</h1>
</div>

<div id="content">
<form action="check.php" method="post">
<p>ユーザー名:<?php echo $_SESSION['username']; ?>さん</p>
<p>メールアドレス:<?php echo $_SESSION['email']; ?></p>
<p><a href="./sample18_second.php">次のページへ</a></p>
</p>
</div>

<div id="foot">
<p><img src="images/txt_copyright.png" width="136" height="15" alt="(C) H2O Space. MYCOM" /></p>
</div>

</div>
</body>
</html>
