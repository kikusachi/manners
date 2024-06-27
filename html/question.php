<?php
    // PHPコードを記述します
    //確認する際はxamppのApache
    $score = 0;
    //memo:pタグは段落

    //元の場所に戻らせるかどうかのフラグ
    $is_return = false;

    //正解の答え(仮)
    $correct_answers = array(
        "question1" => "c", // 問題1の正解は "c"
        "question2" => "a",  // 問題2の正解は "a"
        "question3" => "b", // 問題3の正解は "b"
        "question4" => "a",  // 問題4の正解は "a"
        "question5" => "c",  // 問題5の正解は "c"
        "question6" => "a",  // 問題6の正解は "a"
        "question7" => "b",  // 問題7の正解は "b"
        "question8" => "c",  // 問題8の正解は "c"
        "question9" => "1",  // 問題9の正解は "1"
        "question10" => "2",  // 問題10の正解は "2"
        "question11" => "3",  // 問題11の正解は "3"
    );

    // フォームが送信された場合
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // 各質問に対するユーザーの回答を取得
        $user_answers = array(
            //空白かどうかもチェックする
            "question1" => isset($_POST["question1"]) ? $_POST["question1"] : "",
            "question2" => isset($_POST["question2"]) ? $_POST["question2"] : "",
            "question3" => isset($_POST["question3"]) ? $_POST["question3"] : "",
            "question4" => isset($_POST["question4"]) ? $_POST["question4"] : "",
            "question5" => isset($_POST["question5"]) ? $_POST["question5"] : "",
            "question6" => isset($_POST["question6"]) ? $_POST["question6"] : "",
            "question7" => isset($_POST["question7"]) ? $_POST["question7"] : "",
            "question8" => isset($_POST["question8"]) ? $_POST["question8"] : "",
            "question9" => isset($_POST["question9"]) ? $_POST["question9"] : "",
            "question10" => isset($_POST["question10"]) ? $_POST["question10"] : "",
            "question11" => isset($_POST["question11"]) ? $_POST["question11"] : "",
        );

        // いずれかの回答が空の場合、エラーメッセージをセット
        foreach ($user_answers as $answer) {
            if (empty($answer)) {
                $is_return = true;
            }else{
                $is_return = false;
            }
        }

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
            <h4 class="main-title-q">～回答：解説～</h4>

            <?php
                if ($is_return)
                {
                    echo('<a href="question.html" class="to_question">戻る</a>');
                }
                else
                {
                    echo('
                        <!-- 問題１ -->
                        <div class="question1">
                            <h1 class="question-title">面接</h1>
                            <h2 class="question-title">問題１：面接入室時の正しいマナーを選びなさい</h2>
                            <h2>1,面接時の入室の流れとして正しいものを選びなさい</h2>
                            <h3>正答： C,cとあ </h3><br/>
                            <div class="explanation-tab">
                                < 解説 ><br/>
                            </div>
                            <div class="explanation">
                                a:入室時には「失礼します」と一言声をかける必要があります
                            </div>
                            <div class="explanation">
                                b:ドアのノックは３回或いは２回が一般的
                            </div>
                            <h2>２，面接室に入室した際のドアの締め方で正しいものを選びなさい</h2>
                            <div class="explanation-tab">
                                < 解説 ><br/>
                            </div>
                            <div class="explanation">
                                い:背中を向けて扉を閉めるのは失礼にあたるため不適切
                            </div>
                        </div>
                        <br/>
                        <!-- 問題2 -->
                        <div class="question2">
                            <h2 class="question-title">問題2：面接官が後から入室してくる場合の待ち方で誤っているものを選びなさい</h2>
                            <h3>正答： a </h3>
                            <div class="explanation-tab">
                                < 解説 ><br/>
                            </div>
                            <div class="explanation">
                                1:面接官が入室する前に座るのは失礼なため間違い
                            </div>
                        </div>

                        <!-- 問題3 -->
                        <div class="question3">
                            <h1 class="question-title">身だしなみ</h1>
                            <h2 class="question-title">問題3：スーツならどんなものを着てもよい。○か×か</h2>
                            <h3>正答： × </h3>
                            <div class="explanation-tab">
                                < 解説 ><br/>
                            </div>
                            <div class="explanation">
                                黒や紺などの基本的なスーツを着用してください
                            </div>
                        </div>

                        <!-- 問題4 -->
                        <div class="question4">
                            <h2 class="question-title">問題4：身だしなみの基本ルールで正しいものは？</h2>
                            <h3>正答： 1 </h3>
                            <div class="explanation-tab">
                                < 解説 ><br/>
                            </div>
                            <div class="explanation">
                                ２:ビジネスシーンにおいては「控え目」であることが重要で、ビジネスシーンにそぐわないこともあるため不適切
                            </div>
                            <div class="explanation">
                                ３:ビジネスの場で求められる上品さや落ち着きとは相反するものであるため不適切
                            </div>
                        </div>

                        <!-- 問題5 -->
                        <div class="question5">
                            <h1 class="question-title">敬語</h1>
                            <h2 class="question-title">問題5：課長へ「部長が呼んでいる」と伝えたい</h2>
                            <h3>正答： c </h3>
                            <div class="explanation-tab">
                                < 解説 ><br/>
                            </div>
                            <div class="explanation">
                                a:「お呼びになっています」だと直接的で命令的な印象があるため不適切。より間接的で敬意を示す表現が好ましい
                            </div>
                            <div class="explanation">
                                b:謙譲語を使用しているがさらに丁寧な表現が必要・このままだと丁寧な表現が不十分なため不適切
                            </div>
                        </div>

                        <!-- 問題6 -->
                        <div class="question6">
                            <h2 class="question-title">問題6：上司への伝言を書いたメモを机の上に置いた。このメモを見たのか確認したい</h2>
                            <h3>正答： a </h3>
                            <div class="explanation-tab">
                                < 解説 ><br/>
                            </div>
                            <div class="explanation">
                                b:「ご確認していただけましたか？」が不自然なため不適切。また、文の流れが全体的にぎこちないため敬意を表現できていない
                            </div>
                            <div class="explanation">
                                c:文全体が不自然。「ご覧いただけましたでしょうか」は相手に確認したのかを丁寧に尋ねる表現なのでそちらを使用した方が適切かつ丁寧になる
                            </div>
                        </div>

                        <!-- 問題7 -->
                        <div class="question7">
                            <h1 class="question-title">マナー・挨拶</h1>
                            <h2 class="question-title">問題7：挨拶の際、どの時間でも「おはようございます」と言っても良い○か×か</h2>
                            <h3>正答： × </h3>
                            <div class="explanation-tab">
                                < 解説 ><br/>
                            </div>
                            <div class="explanation">
                                午前１０時までは「おはようございます」で構わない
                            </div>
                        </div>

                        <!-- 問題8 -->
                        <div class="question8">
                            <h2 class="question-title">問題8：ビジネスの電話で相手に一番最初に伝えるもの</h2>
                            <h3>正答： c </h3>
                            <div class="explanation-tab">
                                < 解説 ><br/>
                            </div>
                            <div class="explanation">
                                a:誰と話しているのかわからず混乱を招く可能性があるので不適切
                            </div>
                            <div class="explanation">
                                b:確認することも重要だが先に自身の所属などを明確にする方が優先される
                            </div>
                        </div>

                        <!-- 問題9 -->
                        <div class="question9">
                            <h1 class="question-title">席次</h1>
                            <h2 class="question-title">問題9：お客様３人を応接室にご案内している。それぞれの役職は課長、部長、新入社員である。それぞれに適切な座席を答えよ</h2>
                            <div class="img-div">
                                <img src="images/zaseki.png" alt="マナー" class="img-q">
                            </div>
                            <h3>正答： 課長:1, 部長:2, 新入社員:3 </h3>
                            <div class="explanation-tab">
                                < 解説 ><br/>
                            </div>
                            <div class="explanation">
                                招かれた側はドアから遠いほうの席に座るため1~3に座る
                                また、ドアから遠いほうが上座となるので1に最も位の高い課長を、3にはドアから最も近い席には新入社員が座るようにする。
                            </div>
                        </div>
                    ');

                }
            ?>
            <div class="result">
                <?php
                if($score <= 11 && $score > 10)
                {
                    echo('<img src="images/hanko_good.gif" alt="大変よくできました" >');
                }else if($score <= 10 && $score > 6)
                {
                    echo('<img src="images/hanko_best.gif" alt="とても大変よくできました" class="img-result">');
                }else if($score<=6)
                {
                    echo('<img src="images/hanko_dobest.gif" alt="頑張りましょう" >');
                }
                echo "<h2>あなたの得点: $score / " . count($correct_answers) . "</h2>";
                ?>
                <!-- 得点をPHPで表示-->
                <br/>
                <a href="question.html" class="to_goquestion">問題集のページに戻る</a>
            </div>
        </div>
    </body>
</html>