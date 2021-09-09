<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sample index</title>
    <link rel="stylesheet" href="result.css">
</head>
<body>
    <div class="main-container">
        <div class="result" id="result__title">入力内容</div>
        <div class="result" id="result__name">
            <div>■ お名前</div>
            <?php echo $_POST['name']; ?>
        </div>
        <div class="result" id="result__gender">
            <div>■ 性別</div>
            <?php echo $_POST['gender']; ?>
        </div>
        <div class="result" id="result__age">
            <div>■ ご年齢</div>
            <?php echo $_POST['age']; ?>
        </div>
        <div class="result" id="result__type">
            <div>■ お問い合わせの種類</div>
            <?php echo $_POST['inquiry-type']; ?>
        </div>
        <div class="result" id="result__inquiry">
            <div>■ お問い合わせ内容</div>
            <?php echo nl2br($_POST['inquiry-body']); ?>
        </div>
        <div class="result" id="result__resume">
            <a href="index.php">戻る</a>
        </div>
    </div>
</body>
</html>