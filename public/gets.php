<!DOCTYPE>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name"viewport" content="width=device-width, initial-scale=1.0">
    <title>Getメソッドのデータ</title>
</head>

<body>
    <h4>0J03013 下川晶万</h4>
    Getメソッドで送られてきた複数のデータを受け取る。><br>
        <?php
        echo "出席番号:" . $_GET['course'] . $_GET['class'] . $_GET['number'] . "、氏名:" . $_GET['name'];

        echo '</br>';
        var_dump($_GET);
        ?>
</body>
</html>