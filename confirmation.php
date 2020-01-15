<?php
// var_dump($_POST);
// exit();
$name = $_POST['name'];
$furigana = $_POST['furigana'];
$address = $_POST['address'];
$tel = $_POST['tel'];
$otoiawase = $_POST['otoiawase'];

// var_dump($otoiawase);
// exit();
?>



<!DOCTYPE html>
<html>

<head>

  <style type="text/css">
    /* input[readonly] {
      background-color: #CCC;

    }

    .gray_bg {
      background-color: #CCC;

    } */

    .lead-form {
      text-align: center;
      font-size: 20px;
    }

    form {
      width: 460px;
      margin: 0 auto;
    }

    .item {
      overflow: hidden;
      margin-bottom: 20px;
    }

    .label {
      float: left;
      margin-right: 20px;
      width: 135px;
      border-left: solid 3px #e0505d;
      padding-left: 10px;
    }

    .btn-area {
      padding-left: 170px;
    }

    input[type="text"],
    input[type="email"] {
      border: solid 1px #aaa;
      border-radius: 5px;
      padding: 10px;
      font-size: 15px;
      width: 200px;
    }

    textarea {
      border: solid 1px #aaa;
      border-radius: 5px;
      padding: 10px;
      height: 160px;
      width: 200px;
      font-size: 15px;
    }

    .submit_btn {
      font-size: 1.4em;
      font-weight: bold;
      padding: 10px 30px;

    }

    .return_btn {

      font-size: 1.4em;
      font-weight: bold;
      padding: 10px 30px;
    }
  </style>

</head>


<body>
  <p class="lead-form">下記内容にて問い合わせをしますか？</p>
  <form action="submit.php" method="post" name="myform">
    <div class="item">
      <label class="label">お名前</label>
      <input type="text" name="name" readonly="readonly" value="<?= $name ?>" style="color: red">
    </div>
    <div class="item">
      <label class="label">フリガナ</label>
      <input type="text" name="furigana" readonly="readonly" value="<?= $furigana ?>" style="color: red">
    </div>
    <div class="item">
      <label class="label">メールアドレス</label>
      <input type="text" name="address" readonly value="<?= $address ?>" style="color: red">
    </div>
    <div class="item">
      <label class="label">電話番号</label>
      <input type="text" name="tel" readonly value="<?= $tel ?>" style="color: red">
    </div>
    <div class="item">
      <label class="label">お問い合わせ内容</label>
      <textarea name="otoiawase" class="gray_bg" readonly value="" style="color: red"><?= $otoiawase ?></textarea>
    </div>
    <div class="btn-area">
      <input type="submit" class="submit_btn" value="送信する">
      <input type="button" class="return_btn" value="戻る" onClick="history.back()" />
    </div>
  </form>
</body>



</html>