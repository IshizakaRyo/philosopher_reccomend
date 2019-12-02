<?php
require('../dbconnect.php');

$datas = $db->query('SELECT * FROM philosopher WHERE id=14');
$data = $datas->fetch();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>あなたの結果・・・・・・</title>
<link rel="stylesheet" href="../css/style.css">
</head>
<body>
<!-- ========== header ========== -->
<header>
<div class="container">
    <a class="headA" href="../index.html">Philosophy</a>

    <nav class="headB">
        <ul>
            <li><a href="philosophers.php">哲学者一覧へ</a></li>
            <li><a href="../../work.html">ポートフォリオ</a></li>
        </ul>
    </nav>
</div>
</header>

<section class="conA kekka">
    <div class="container">
        <div class="text kekkaText">
            <div class="questionLogo">おすすめ哲学者</div>
            <p>あなたの結果は・・・</p>
            <p><span class="kekkaName"><?php print($data['name']); ?></span>がおすすめの哲学者です!</p>
        </div>
        <div class="kekkaImage">
            <!-- 写真 -->
            <img src="../images/<?php print($data['picture']); ?>">
        </div>
        <div class="kekkaProfile">
            <p>時代：<?php print($data['period']); ?><br />主要な著作：<?php print($data['work']); ?>etc. </p>
        </div>
        <div class="movie">
            <div class="container">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/dUR3XX_IwMY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/iPWwe-q1Jxg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</section>

</body>
</html>
