<body>
<div class="container mt-5">
<h1>コメント一覧</h1>
    <table style='border: 1px solid'>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>comment</th>
        </tr>
       
        //コネクションを開く
       // $linc = mysqli_connect("localhost", "root", "mariadb", "sample");

        //文字コードを設定する
        //mysqli_set_charset($linc, "utf8mb4");

        //SELECT文を発行する
       // $result = mysqli_query($linc, "SELECT*FROM talk;");

        <?php
        ini_set('display_errors', "On");


       
       $talk = new talk();
       

        //レコードを繰り返し取得する
        while ($talk->read()) {
        echo "<tr>";
            echo "<td>" . htmlspecialchars($row["id"]) . "</td>";
            echo "<td>" . htmlspecialchars($row["name"]) . "</td>";
            echo "<td>" . htmlspecialchars($row["comment"]) . "</td>";
            echo "</tr>";
        }
        // レコードセットを解放する
        mysqli_free_result($result);

        // コネクションを閉じる（データベースからログアウト）
        mysqli_close($link);
       ?>
      <a class="btn btn-primary" href="index2.php">ログイン画面に移る</a>
</body>

</html>