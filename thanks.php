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

  $nickname = htmlspecialchars($nickname);
  $email = htmlspecialchars($email);
  $goiken = htmlspecialchars($goiken);
  
  print "{$nickname}様、ご意見ありがとうございました";
  print "頂いたご意見「{$goiken}」".'<br/>';
  print "{$email}にメールを送りましたのでご確認下さい";

  $mail_sub='アンケートを受け付けました。';
  $mail_body="{$nickname}様へ\nアンケートご協力ありがとうございました。";
  $mail_body=html_entity_decode($mail_body, ENT_QUOTES, "UTF-8");
  $mail_head='From: xxx@xxx.co.jp';
  mb_language('japanese');
  mb_internal_encoding("UTF-8");
  mb_send_mail($email, $mail_sub, $mail_body, $mail_head);

?>

</body>
</html>