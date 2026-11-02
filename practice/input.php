<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>フォーム</title>
</head>
<body>
<h1>ユーザー登録(1/3)入力</h1> 
<form action="confirm.php" method="post">
    
<div style="margin-bottom: 15px;">
<label for="username">お名前：</label>
<input type="text" id="username" name="username">
</div>

<div style="margin-bottom: 15px;">
<label> 
    メールアドレス:
    <input type="email" name="email">
</label>
</div>

<div style="margin-bottom: 15px;">
<label>
    年齢:
    <input type="number" name="age">
</label>
</div>

<div style="margin-bottom: 15px;">
   <input type="submit" value="確認画面へ">
</div>
</form>
</body>
</html>