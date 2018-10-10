<!DOCTYPE html>
<html lang = "jp">
    <head>
        <meta charset="UTF-8">
        <title>4eachblog</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div id="logo"><img src="4eachblog_logo.jpg" ></div>
        <header>
            <ul>
                <li>トップ</li>
                <li>プロフィール</li>
                <li>4eachについて</li>
                <li>登録フォーム</li>
                <li>問い合わせ</li>
                <li>その他</li>
            </ul>
        </header>        
        <main>
            <div class="main_container">
                <div class="left">
                    <h1>プログラミングに役立つ掲示板</h1>
                    <div class="nyuryoku">
                        <h2>入力フォーム</h2>
                        <form method="post" action="insert.php">
                            <div>
                                <label>ハンドルネーム</label>
                                <br>
                                <input type="text" class="text" size="35" name="handlename">
                            </div>
                            <div>
                                <label>タイトル</label>
                                <br>
                                <input type="text" class="text" size="35" name="title">
                            </div>
                            <div>
                                <label>コメント</label>
                                <br>
                                <textarea cols="60" rows="7" name="comments"></textarea>
                            </div>
                            <div>
                                <input type="submit" class="submit" value="投稿する">
                            </div>
                        </form>
                    </div>
                    <?php
                        mb_internal_encoding("utf8");
                        $pdo=new PDO("mysql:dbname=taka;host=localhost;","root","mysql");
                        $stmt=$pdo->query("select*from 4each_keijiban");
                        
                        while($row=$stmt->fetch()){
                        echo "<div class='kiji'>";
                        echo "<h3>".$row['title']."</h3>";
                        echo "<div class='contents'>";
                        echo $row['comments'];
                        echo "<div class='handlename'>posted by ".$row['handlename']."</div>";
                        echo "</div>";
                        echo "</div>";                            
                        }
                    ?>
                </div>
                <div class="right">
                    <ul>
                        <li><h2>人気の記事</h2></li>
                        <li>PHPオススメ本</li>
                        <li>PHP MyAdminの使い方</li>
                        <li>今人気のエディタTop5</li>
                        <li>HTMLの基礎</li>
                        <li><h2>オススメリンク</h2></li>
                        <li>インターノウス株式会社</li>
                        <li>XAMPPのダウンロード</li>
                        <li>Eclipseのダウンロード</li>
                        <li>Bracketsのダウンロード</li>
                        <li><h2>カテゴリ</h2></li>
                        <li>HTML</li>
                        <li>PHP</li>
                        <li>MySQL</li>
                        <li>JavaScript</li>
                    </ul>
                </div>
            </div>
        </main>
        
        
        <footer>
            copylight © internous | 4each blog is the one which
             provides A to Z about programming.
        </footer>
    </body>
</html>