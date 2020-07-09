<?php
    //擷取字串
    $s = "22支將參與復賽的隊伍這幾天都將陸續前往奧蘭多，進入迪士尼樂園中泡泡式隔離，究竟球員能不能適應這樣生活也成為許多球迷關心焦點。
    日前塞爾蒂克球星華克（Kemba Walker）就透露，不擔心適應問題，因為自己已經過慣單身漢生活，而76人長人佩爾（Norvel Pelle）也以過往經歷替自我背書。
    過去曾在2014年來到台灣效力達欣，佩爾以當時旅台生活為例說：「我覺得這就像在海外打球，事實上我會拿跟自己過去在台灣日子作比較。」
    「因為當我在台灣打球，我真的就是去球場，之後就回房間，那裡沒人真的會說英語，所以我想情況很類似之後隔離生活，我應該可以很快調適」，佩爾指出。";

    // echo substr($s,0,3);
    // echo mb_substr($s,0,10,"utf-8");

    // echo nl2br($s);
    //no line to break

    $pw = 123456;
    echo md5($pw);
    echo "<br>";
    echo sha1($pw);
    echo "<br>";
    echo md5(sha1($pw));
    echo "<br>";
    echo md5(md5($pw));
    echo "<br>";
    echo sha1(md5($pw));
    echo "<br>";
    echo sha1(sha1($pw));
    echo "<br>";

    // echo uniqid();
    echo md5(uniqid());

    $str = "<h1>TITLE</h1>";
    echo $str;
    echo strip_tags($str);

    echo "<br>";

    $x = "Hello World";

    echo strtoupper($x);
    echo strtolower($x);
