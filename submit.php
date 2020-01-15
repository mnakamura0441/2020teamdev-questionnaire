<?php
// var_dump($_POST);
// exit();
$name = $_POST['name'];
$furigana = $_POST['furigana'];
$address = $_POST['address'];
$tel = $_POST['tel'];
$otoiawase = $_POST['otoiawase'];


// $body .= "お問い合わせいただきましてありがとうございます。下記の情報を受け取りました。\nこちらから折り返しご連絡させていただきます。\n\n";
// $body .= "お名前:" . $name . "\n";
// $body .= "フリガナ:" . $furigana . "\n";
// $body .= "メールアドレス:" . $address . "\n";
// $body .= "電話番号:" . $tel . "\n";
// $body .= "お問い合わせ内容:\n" . $otoiawase . "\n\n";

?>

<!DOCTYPE html>
<html>

<head>

</head>

<body>

  <p>問い合わせが完了しました。担当より折り返しご連絡させていただきます。</p>
  <p></p>
  <p>
    <a href="https://project02-m3.lolipop.io/">TOPに戻る</a>
  </p>

</body>

</html>