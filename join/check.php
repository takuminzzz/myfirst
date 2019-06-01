<?php   
ini_set("display_errors", On);  
error_reporting(E_ALL);  
?>

<!DOCTYPE HTML>
<html lang="ja">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php
session_start();

if(!isset($_SESSION['join']))
{
  header('Location: index.php');
}
?>

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
  <button type="submit" class="btn btn-default" name="signup">会員登録する</button>
  <a href="index.php">ログインはこちら</a>
</form>
</div>
</body>
</html>