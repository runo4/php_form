<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sample index</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="main-container">
        <form action="confirm.php" method="post">
            <div class="form" id="form__title">お問い合わせ</div>
            <div class="form" id="form__name">
                <div>お名前</div>
                <input type="text" name="name" />
            </div>
            <div class="form" id="form__gender">
                <div>性別</div>
                <label>
                    <input type="radio" name="gender" value="男性" checked/>男性
                </label>
                <label>
                    <input type="radio" name="gender" value="女性"/>女性
                </label>
            </div>
            <div class="form" id="form__age">
                <div>ご年齢</div>
                <select name="age">
                    <?php
                        for($i = 20; $i <= 60; $i += 10){
                            echo "<option value='{$i}'>{$i}代</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="form" id="form__inquiry-type">
                <div>お問い合わせの種類</div>
                <select name="inquiry-type">
                    <?php
                        $types = array("このサイトに関するお問い合わせ", "ご意見・ご要望", "ご依頼", "その他");
                        foreach($types as $type){
                            echo "<option value='{$type}'>{$type}</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="form" id="form__inquiry-body">
                <div>お問い合わせ内容</div>
                <textarea name="inquiry-body" rows="6" wrap="hard" 
                    placeholder="お問い合わせ内容を入力してください。"></textarea>
            </div>
            <div class="form" id="form__submit">
                <input type="submit" value="送信" />
            </div>
        </form>
    </div>
</body>
</html>