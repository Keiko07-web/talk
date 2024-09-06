<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table style="border:1px solid">
        <form method="post" action="select2.php">

            <tr>
                <th>コメント</th>
                <td><textarea name="comment"></textarea> </td>
            </tr>
    </table>

    <?php
    ini_set('display_errors', "On");

    // コネクションを開く（データベースにログイン）
    // ホスト名、ユーザー名、パスワード、使用するデータベース名
    $link = mysqli_connect("localhost", "root", "mariadb", "sample");

    // 文字コードを設定
    mysqli_set_charset($link, "utf8mb4");

    //$stmt = mysqli_prepare(
    //$link,
    $sql = "INSERT INTO talk (comment)" .
        " VALUES (" .
         $_POST["comment"] .
    // );
//INSERT
    // s：string型  i：int型 d：float型
    // 文字列型が５つなので、ｓを５つ並べている
    // mysqli_stmt_bind_param(
    // $stmt,
    //,
    // "s"  ,
    //);

    //mysqli_stmt_execute($stmt);

    // コネクションを閉じる（データベースからログアウト）
    mysqli_close($link);
    ?>
    <input type="submit" value="入力">
    </form>
</body>

</html>