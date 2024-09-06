
  <?php
  class talk
  {
    public $id;
    public $name;
    public $comment;

    public $link;


  
     ini_set('display_errors', "On");
    
    // コネクションを開く（データベースにログイン）
    // ホスト名、ユーザー名、パスワード、使用するデータベース名
    $link = mysqli_connect("localhost","root","mariadb","sample");

    // 文字コードを設定
    mysqli_set_charset($link, "utf8mb4");

selecat*from Board;

select Board.ID,
       Board .comment,
       User.username,
       from Board,user
       where Board.user-ID=User.ID












    public function create(){    

    $stmt = mysqli_prepare(
        $this -> $link,
        "INSERT INTO talk (id, name, comment)".
        " VALUES (?, ?, ?);"
    );
        // s：string型  i：int型 d：float型
        // 文字列型が５つなので、ｓを５つ並べている
    mysqli_stmt_bind_param(
    $stmt,
    "iss",
   $this->id,
   $this->username,
   $this->comment, 
    );
//データの追加実行
//$address->create()
//echo "レコードを追加しました";
?>
mysqli_stmt_execute($stmt);


    // コネクションを閉じる（データベースからログアウト）
    mysqli_close($this->$link);


</body>

</html>