<?php
    // PHPコードを記述します
    //確認する際はxamppのApache
    $score = 0;
    //memo:pタグは段落

    //正解の答え(仮)
    $correct_answers = array(
        "question1" => "b", // 問題1の正解は "b"
        "question2" => "a",  // 問題2の正解は "a"
        "question3" => "b", // 問題3の正解は "b"
        "question4" => "a",  // 問題4の正解は "a"
        "question5" => "c",  // 問題5の正解は "c"
        "question6" => "a"  // 問題6の正解は "a"
    );

    // フォームが送信された場合
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // 各質問に対するユーザーの回答を取得
        $user_answers = array(
            "question1" => $_POST["question1"],
            "question2" => $_POST["question2"],
            "question3" => $_POST["question3"],
            "question4" => $_POST["question4"],
            "question5" => $_POST["question5"],
            "question6" => $_POST["question6"],
        );

        // ユーザーの回答と正解を比較し、得点を計算
        foreach ($correct_answers as $question => $correct_answer) {
            if ($user_answers[$question] == $correct_answer) {
                $score++;
            }
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="main">
            <header>
                <h1 class="header-name">東洋ワーク株式会社</h1>
                <ul class="header-menu">
                    <li class="menu-name"><a href="list_of_authors.html">研修生一覧</a></li>
                    <li class="menu-name"><a href="greeting.html">挨拶について</a></li>
                    <li class="menu-name"><a href="honorific.html">敬語について</a></li>
                    <li class="menu-name"><a href="interview.html">面接・服装について</a></li>
                </ul>
            </header>

            <h1 class="main-title-q">マナーなどの確認問題</h1>
            <h4 class="main-title-q"></h4>

            <?php
                // 得点をPHPで表示
                echo "<h2>あなたの得点: $score / " . count($correct_answers) . "</h2>";
            ?>
            <a href="question.html">問題集のページに戻る</a>
        </div>
    </body>
</html>