<?php   
ini_set("display_errors", On);  
error_reporting(E_ALL);  
?>

<?php
session_start();

if(!isset($_SESSION['join']))
{
  header('Location: index1.php');
}
?>

<!DOCTYPE HTML>
<html lang="ja">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<form method="post">
  <h1>会員登録フォーム</h1>
  <div class="form-group">
    <dt>ニックネーム</dt>
    <dd><dd>
      <?php echo htmlspecialchars($_SESSION['join']['username'],ENT_QUOTES, 'UTF-8'): ?>
  </div>
  <div class="form-group">
    <dt>メールアドレス</dt>
        <dd><dd>
      <?php echo htmlspecialchars($_SESSION['join']['mail'],ENT_QUOTES, 'UTF-8'): ?>
   </div>
  <div>
      <div class="form-group">
  <dt>画像</dt>
  </div>
  <div class="form-group">
    <input type="password" class="form-control" name="password" placeholder="パスワード" required />
          <?php echo htmlspecialchars($_SESSION['join']['mail'],ENT_QUOTES, 'UTF-8'): ?>
  </div>
  <input type="submit" class="btn btn-default" name="signup">会員登録する</input>
  <a href="index1.php">ログインはこちら</a>
</form>
</div>
</body>
</html>