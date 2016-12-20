<!DOCTYPE html>
<html lang="ja">
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="keywords">
        <meta name="description" content="">
        <title>Shigeki Kozawa</title>
        <meta name="viewport" content="width=device-width">

        <!-- CSS -->
        <link rel="stylesheet" href="./css/style.css" type="">

         <!-- JavaScript -->
        <script type="text/javascript" src="script/jquery1.js"></script>
        <script src="script/jquery.fademover.js"></script>
        <script type="text/javascript" src="script/Shigeki's Scripts.js"></script>
    </head>

    <body>

        <div id="pagewrap">

        <?php require_once("header.php");?>

        <nav class="mainmenu">

        <ul class="mainmenu">
        <li><a href="index.php" class="menu">Home</a></li>
        <li><a href="profile.php" class="menu" id="thispage">Profile</a></li>
        <li><a href="works.php" class="menu">Works</a></li>
      <img src="images/profile.jpg" id="work_bg2"><!--自分の写真-->
        </ul>
        </nav>

        <div class="maincontents">
             <div id="profile">
                <div id=leftBox>
                <br><br>
                    <h1>Profile</h1><br/>

                    <h1>小澤 繁輝<span>こざわ しげき</span></h1>
                    <div>生年月日：1994年8月21日<br/>出身地：札幌<br/>血液型：A<br/>趣味：webサイト作成、音楽鑑賞、旅行<br/>特技：剣道、テニス<br/>サークル：ハンドボール部 アウトドア部<br/>勉強しているプログラミング言語：C言語 Processing Max HTML CSS JQuery PHP<br/>勉強していること（その他）：TOEIC 簿記 基本情報技術者 Illustrator Photoshop<br/>Mail：b1013026@fun.ac.jp<br/>Facebook：<a href="https://ja-jp.facebook.com/people/Sigeki-Kozawa/100005526343283">小澤 繁輝</a><br/><br/></div>


                </div>
            </div>
            <div class="clearfix"></div>
        </div>

        <footer class="bottom">
             <div class="left"><p id="copy">&copy; 2015 Shigeki Kozawa's portfolio. All rights reserved.</p></div>
        </footer>
        </div><!-- pagewrap -->
    </body>
</html>
