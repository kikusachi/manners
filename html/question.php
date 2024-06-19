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

            <h2 class="main-title-q">マナーなどの確認問題</h2>
            <h4 class="main-title-q"></h4>

            <!-- 入力された情報をphpファイルに送信 postメソッドで指定ファイルにデータ送信-->
                <!-- チェックボックス -->
                <input type="checkbox" name="hello">選択<br/><br/>

                <div class="question1">
                    <h2 class="question-title">Question1</h2>
                    <!-- ラジオボタン -->
                    <br/><input type="radio" name="question1" value="a" style="transform: scale(2.0);" class="answer-q"> ボタン
                    <br/><input type="radio" name="question1" value="b" style="transform: scale(2.0);"> button
                    <br/><input type="radio" name="question1" value="c" style="transform: scale(2.0);"> ぼたん
                </div>

                <div>
                    <h2>question2</h2>
                    <br/><input type="radio" name="question2" value="a" style="transform: scale(1.5);"> ボタン
                    <br/><input type="radio" name="question2" value="b" style="transform: scale(1.5);"> button
                    <br/><input type="radio" name="question2" value="c" style="transform: scale(1.5);"> ぼたん
                </div>

                <?php
                    // 得点をPHPで表示
                    echo "<h2>あなたの得点: $score / " . count($correct_answers) . "</h2>";
                ?>

                <!-- 相談したいこと
                me:明日は挨拶や敬語などの資料作成と発表
                ＝》席次についてまとめる
                1,クイズは〇×問題だけでいいのか
                →各自の判断に任せる:両方あってもいいかも：〇×は〇×で、三択なら三択でまとめてた方がいい
                2,出題する問題はこちらで決めるのか
                →自分でいくつか考える・明日共有・相談する
                3,問題数はいくつがいいのか・自分的には各項目に最低3つでいいかな
                →ひとり３種類作成→問題の形式・採用を決定する：敬語をメインに３つ担当する
                me:成果物の発表担当
                ・部長に「課長の田中を呼んできてくれないか？」頼まれたと伝えるときの敬語
                ・社外の人から電話で頼まれごとをしたが自分の部署が担当する事案ではないと伝える
                ・応接室に座る際の上座・下座等席次のルール←イラストを用意して1～6で３番目に席次が高いのは・・・のようにしたらいいのでは？
                -->
        </div>
    </body>
</html>