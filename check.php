<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>PHP基礎</title>
</head>
<body>

<?php
$nickname = $_POST['nickname'];
$email = $_POST['email'];
$goiken = $_POST['goiken'];
if($nickname === '' || $email === '' || $goiken === ''){
  print '全て入力してください'.'<br/>'.'<br/>';
}
else {
  print 'ようこそ'.'<br/>';
  print "{$nickname}様".'<br/>';
  print "メールアドレス: {$email}".'<br/>';
  print "ご意見「{$goiken}」".'<br/>'.'<br/>';
}

print '<form><input type="button" onclick="history.back()" value="戻る"></form>';
?>

</body>
</html>