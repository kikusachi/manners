<?php
    // PHPコードを記述します
    //確認する際はxamppのApache
    $score = 0;
    //memo:pタグは段落

    //正解の答え(仮)
    $correct_answers = array(
        "question1" => "b", // 問題1の正解は "b"
        "question2" => "a"  // 問題2の正解は "a"
    );

    // フォームが送信された場合
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // 各質問に対するユーザーの回答を取得
        $user_answers = array(
            "question1" => $_POST["question1"],
            "question2" => $_POST["question2"]
        );

        // ユーザーの回答と正解を比較し、得点を計算
        foreach ($correct_answers as $question => $correct_answer) {
            if ($user_answers[$question] == $correct_answer) {
                $score++;
            }
        }

        // 得点を表示
        echo "<h2>あなたの得点: $score / " . count($correct_answers) . "</h2>";
    }
?>