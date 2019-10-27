<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHPのサンプル</title>
</head>
<body>
    <?php
    // $date = date("Y/m/d H:i:s");
    // print($date);
    // $a = 5;
    // if ($a == 3){
    //     print("$a is 3");
    // }else{
    //     print("$a is not 3");
    // }
    // for($i = 0; $i < 10; $i++){
    //     print($i);
    // }

    // コメントがPOSTされているなら
    if(isset($_POST["comment"])){
        // エスケープしてから表示
        $comment = htmlspecialchars($_POST["comment"]);
        print("あなたのコメントは「${comment}」です");
    }else{
        ?>
        <p>コメントしてください</p>
        <form method="POST" action="index.php">
            <input name="comment" />
            <input type="submit" value="送信" />
        </form>
    <?php
    }
    ?>
</body>
</html>
