<?php
require('dbconnect.php');

$datas = $db->query('SELECT * FROM philosopher');
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LIST</title>
    <link rel="stylesheet" href="css/list.css">
</head>
<body>
<!-- ========== header ========== -->
<header>
<div class="container">
    <a class="headA" href="index.html">Philosophy</a>
    <nav class="headB">
        <ul>
            <li><a href="#">哲学者一覧へ</a></li>
            <li><a href="#">ポートフォリオ</a></li>
        </ul>
    </nav>
</div>
</header>


<section class="conList"> 
    <h1>哲学者一覧</h1>     
    <div class="container">
    <?php foreach($datas as $data): ?>
        <div class="personData">
            <p class="personName"><?php print(htmlspecialchars($data['name'], ENT_QUOTES)); ?></p>
            <img class="personImage" src="images/<?php print($data['picture']); ?>" >
        </div>
     <?php endforeach; ?>
    </div>
</section>


    
</body>
</html>