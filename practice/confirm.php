<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>確認画面</title>
</head>
<body>
<form action="complete.php" method="post">
<h1>ユーザー登録(2/3)確認</h1>
<p>以下の内容で登録します。よろしいですか？</p>
<?php
$username = $_POST["username"];
$email = $_POST["email"];
$age = $_POST["age"];
?>
<p>お名前:<?php echo htmlspecialchars($username, ENT_QUOTES, 'UTF-8'); ?></p>
<input type="hidden" name="username" value="<?php echo htmlspecialchars($username, ENT_QUOTES, 'UTF-8'); ?>">
<p>メールアドレス:<?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?></p>
<input type="hidden" name="email" value="<?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?>">
<p>年齢:<?php echo htmlspecialchars($age, ENT_QUOTES, 'UTF-8'); ?></p>
<input type="hidden" name="age" value="<?php echo htmlspecialchars($age, ENT_QUOTES, 'UTF-8'); ?>">
<input type="submit" value="登録する">
<button type="button" onclick="history.back()">戻る</button>
</body>
</html>