<?php

$uri = get_template_directory_uri();
get_header();


?>
<main class="subp page-recruit">

    <section class="fv subpTop">
        <div class="swiper fvTop">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper mt-3">
                <!-- Slides -->
                <div class="swiper-slide">
                    <img class="sp" src="<?php echo $uri; ?>/img/slide_01.png" alt="">
                    <img class="pc" src="<?php echo $uri; ?>/img/pc_slide_01.png" alt="">
                    <div class="slideText">
                        <div class="slideTextBg">
                            <p>あなたの挑戦が</p>
                        </div>
                        <div class="slideTextBg">
                            <p>きっと誰かの背中を押す</p>
                        </div>
                        <span>あなたの"人生"を考えたキャリア支援</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about">
        <div class="wrap1200">
            <h2 class="secTitle">
                ABOUT US
            </h2>
        </div>

        <div class="aboutContainer mt-2">
            <div class="">
                <h3 class="pc aboutTextTitle aboutTextTitle1">
                    <span class="din">01.</span>
                    私たちについて
                </h3>
                <div class="wrap1200 aboutList">
                    <div class="aboutImg">
                        <img src="<?php echo $uri; ?>/img/about_01.png" alt="">
                    </div>
                    <div class="aboutTextContainer wrap pcCover fadeIn">
                        <h3 class="sp aboutTextTitle aboutTextTitle1">
                            <span class="din">01</span>
                            私たちについて
                        </h3>
                        <div class="aboutText mt-2">
                            <p>
                                完全紹介制で全業界の転職支援を行っている総合人材会社です。<br>
                                1人1人の人生を本気で考え、歩みたい人生、なりたい姿に<br class="pc">近づくキャリア形成を第一に行っております。<br>
                                <br class="sp">
                                転職は 人生を豊かにする、自分に自信をつける最も大切な手段の一つです。<br>
                                <br class="sp">
                                人生全体を踏まえてその人に最適な仕事選びを共に考え、求職者様に本気で向き合い、<br class="pc">
                                共にセクシー（魅力的な）人生を築いていきましょう。
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-4">
                <h3 class="pc aboutTextTitle aboutTextTitle2">
                    <span class="din">02.</span>
                    なぜ完全紹介制なのか
                </h3>
                <div class="wrap1200 aboutList aboutList2">
                    <div class="aboutImg">
                        <img src="<?php echo $uri; ?>/img/about_02.png" alt="">
                    </div>
                    <div class="aboutTextContainer wrap fadeIn">
                        <h3 class="sp aboutTextTitle">
                            <span class="din">02</span>
                            なぜ完全紹介制なのか
                        </h3>
                        <div class="aboutText mt-2">
                            <p>
                                仕事を通じて周囲の方々がより魅力的な人生を実現できるよう、<br class="pc">
                                手助けをしたいと考えたからです。<br class="sp"><br class="sp">仕事は人生において7割を占めます。<br><br class="sp">
                                その時間をよりよいものにすることで魅力的な人生を作っていけると感じております。<br class="pc">
                                現在では、完全紹介制で毎月約80名の方に転職支援サービスを利用して頂いております。<br><br class="sp">
                                まずは周囲の方の豊かな人生を実現し、世の中に影響を与えていきたいと考えております。
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="service">
        <div class="wrap1200">
            <h2 class="blue secTitle">
                OUR SERVICE
            </h2>
        </div>

        <div class="wrap strengthTitle skew">
            <p>CockPitが選ばれる理由</p>
        </div>
        <div class="SubTitle skew">
            <p>転職支援フロー</p>
        </div>
        <div class="flow flow1">
            <!-- <div class="wrap">
                <h4 class="pt-2">CockPitのフロー</h4>
            </div>

            <div class="flowContainer wrap fbf mt-2 pcCover">
                <div class="flowItem fadeLeft">
                    <img src="<?php echo $uri; ?>/img/flow_01.svg" alt="">
                    <p class="mt-1">
                        人生全般を考えた<br class="sp">キャリアコンサルを行い、<br>
                        今までになかった選択を行います<br>
                        (1時間程度)
                    </p>
                </div>
                <div class="flowItem fadeLeft">
                    <img src="<?php echo $uri; ?>/img/flow_02.svg" alt="">
                    <p class="mt-1">
                        適正なレベルを見定めたうえで、厳選し、<br>
                        ワンランク上のご提案もします
                    </p>
                </div>
                <div class="flowItem fadeLeft">
                    <img src="<?php echo $uri; ?>/img/flow_03.svg" alt="">
                    <p class="mt-1">
                        全ての書類をダブルチェックを行います<br>
                        (社員＋部長クラス）
                    </p>
                </div>
                <div class="flowItem fadeLeft">
                    <img src="<?php echo $uri; ?>/img/flow_04.svg" alt="">
                    <p class="mt-1">
                        少なくとも３回はオンラインにて行います。<br>
                        しっかりとface to faceでアドバイスを<br class="sp">行い、<br class="pc">
                        求職者様が安心して面接に臨めるように<br class="pc">サポートします
                    </p>
                </div>
                <div class="flowItem fadeLeft">
                    <img src="<?php echo $uri; ?>/img/flow_05.svg" alt="">
                    <p class="mt-1">
                        求職者様を新たなステージへ<br class="sp">送り出します
                    </p>
                </div>
                <div class="flowItem fadeLeft">
                    <img src="<?php echo $uri; ?>/img/flow_06.svg" alt="">
                    <p class="mt-1">
                        入社前、入社後2〜3回の面談を必ず行い、<br>
                        長期的に求職者様のフォローを行います<br>
                        弊社はご紹介でのみ成り立っているため、<br>
                        1人1人の支援を大切に行っております
                    </p>
                </div>
            </div> -->

            <div class="flowContainer wrap mt-2 pcCover flowList ">
                <div class="flow_img-pc only_pc">
                    <img src="<?php echo $uri; ?>/img/flow_img01-pc.svg" alt="">
                </div>
                <div class="flow_img-sp only_sp">
                    <img src="<?php echo $uri; ?>/img/flow_img01-sp.svg" alt="">
                </div>
            </div>
        </div>
        <div class="flow flow2 only_sp">
            <!-- <div class="wrap">
                <h4 class="pt-2">大手人材会社のフロー</h4>
            </div>

            <div class="flowContainer wrap fbf mt-2 pcCover">
                <div class="flowItem fadeLeft">
                    <img src="<?php echo $uri; ?>/img/b_flow_01.svg" alt="">
                    <p class="mt-1">
                        将来を見据えた提案ではなく、今の経験で内定
                        をもらいやすいところを重点的に提案していく<br>
                        (電話にて20分程度)
                    </p>
                </div>
                <div class="flowItem fadeLeft">
                    <img src="<?php echo $uri; ?>/img/b_flow_02.svg" alt="">
                    <p class="mt-1">
                        メールにて一度に30社〜50社提案し、<br>
                        とにかく受けさせる形をとっている
                    </p>
                </div>
                <div class="flowItem fadeLeft">
                    <img src="<?php echo $uri; ?>/img/b_flow_03.svg" alt="">
                    <p class="mt-1">
                        書類の添削、面接対策を行わず企業へ<br class="sp">エントリーし面接へ
                        面接の対策を行ったとしても、電話にて10分程度<br>
                        （転職活動を通じて1〜２回程度）
                    </p>
                </div>
            </div> -->
            <div class="flowContainer wrap pcCover flowList ">
                <div class="flow_img-sp only_sp">
                    <img src="<?php echo $uri; ?>/img/flow_img02-sp.svg" alt="">
                </div>
            </div>
        </div>

        <div class="graph wrap1080">
            <div class="naitei">
                <div class="SubTitle skew">
                    <p>圧倒的な内定率</p>
                </div>
                <div class="naiteiContainer mt-2">
                    <div class="naiteiImg">
                        <img class="sp" src="<?php echo $uri; ?>/img/graph_naitei.svg" alt="">
                        <img class="pc" src="<?php echo $uri; ?>/img/pc_graph_naitei.svg" alt="">
                        <!-- <div id="circle"></div> -->

                        <p class="naiteiCaution pc">※Cockpit調べ</p>
                    </div>


                </div>
        </div>

        <div class="change ">
            <div class="SubTitle skew">
                <p>ワンランク上を目指す転職支援</p>
            </div>
            <div class="changeContainer wrap1080">
                <div class="changeList mt-2">
                    <!-- <img class="sp" src="<?php echo $uri; ?>/img/change_img_1.png" alt=""> -->
                     <img class="sp" src="<?php echo $uri; ?>/img/change_img001-sp.svg" alt="">
                    <!-- <img class="pc" src="<?php echo $uri; ?>/img/pc_change_img01.svg" alt=""> -->
                     <img class="pc" src="<?php echo $uri; ?>/img/change_img001-pc.svg" alt="">
                    <!-- <p class="mt-2 fadeIn">
                        CockPitは完全紹介制のため、<br class="pc">
                        求職者様の人生を考え、チャレンジを応援します。<br class="pc">
                        求職者様の能力以上の企業からご提示し、<br class="pc">
                        時間をかけてでも、企業レベルの最適解を見つけ出します。
                    </p> -->
                </div>
                <div class="changeList mt-4">
                    <!-- <img class="sp" src="<?php echo $uri; ?>/img/change_img_2.png" alt="">
                    <img class="pc" src="<?php echo $uri; ?>/img/pc_change_img02.svg" alt=""> -->
                    <img class="sp" src="<?php echo $uri; ?>/img/change_img002-sp.svg" alt="">
                    <img class="pc" src="<?php echo $uri; ?>/img/change_img002-pc.svg" alt="">
                    <!-- <p class="mt-2 fadeIn">
                        大手企業は、応募総数も多く<br class="pc">
                        求職者様1人1人に向き合い切れません。<br class="pc">
                        効率よく内定を取ることを最優先にするため、<br class="pc">
                        求職者様の能力に対して低いレベルの企業がメインとなります。
                    </p> -->
                </div>
            </div>
        </div>
        </div>

    </section>
    <section class="member ">
        <div class="titleWhite memberTitle">
            <p>あらゆる職種に精通したキャリアアドバイザー</p>
        </div>
        <div class="memberContainer wrap1080 mt-2">

            <div class="memberList mt-2">
                <div class="memberImg card">
                    <!-- 裏面のコンテンツ -->
                    <div class="back">
                        <img class="" src="<?php echo $uri; ?>/img/member_yamanaka.jpg" alt="">
                    </div>
                    <!-- 表面のコンテンツ -->
                    <div class="front">
                        <img class="" src="<?php echo $uri; ?>/img/ura_yamanaka.jpg" alt="">
                    </div>
                </div>


                <div class="skew memberText catchcopy">
                    <p>溢れるパッションで全力支援</p>
                </div>
                <div class="memberName">
                    <div class="skew memberText memberTextName">
                        <p>山中 滉太</p>
                    </div>
                    <div class="skew memberText memberCareer">
                        <p>新卒インターン▶︎入社</p>
                    </div>
                </div>
                <a href="<?php echo home_url("/career/#yamanaka") ?>" class="memberArrow sp"><img class=""
                        src="<?php echo $uri; ?>/img/member_arrow.svg" alt=""></a>

                <a class="btnSkew pc" href="<?php echo home_url("/career/#yamanaka") ?>">
                    <p class="more">more</p>
                </a>
            </div>

            <div class="memberList mt-2">
                <div class="memberImg card">
                    <!-- 裏面のコンテンツ -->
                    <div class="back">
                        <img class="" src="<?php echo $uri; ?>/img/member_shinjo.jpg" alt="">
                    </div>
                    <!-- 表面のコンテンツ -->
                    <div class="front">
                        <img class="" src="<?php echo $uri; ?>/img/ura_shinjo.jpg" alt="">
                    </div>
                </div>


                <div class="skew memberText catchcopy">
                    <p>適応して打破する</p>
                </div>
                <div class="memberName">
                    <div class="skew memberText memberTextName">
                        <p>新城 大志</p>
                    </div>
                    <div class="skew memberText memberCareer">
                        <p>医療機器メーカー▶︎フリーランスにて営業<br class="only_pc">▶︎中途入社</p>
                    </div>
                </div>
                <a href="<?php echo home_url("/career/#shinjo") ?>" class="memberArrow sp"><img class=""
                        src="<?php echo $uri; ?>/img/member_arrow.svg" alt=""></a>

                <a class="btnSkew pc" href="<?php echo home_url("/career/#shinjo") ?>">
                    <p class="more">more</p>
                </a>
            </div>

            <div class="memberList mt-2">
                <div class="memberImg card">
                    <!-- 裏面のコンテンツ -->
                    <div class="back">
                        <img class="" src="<?php echo $uri; ?>/img/member_ikeda.jpg" alt="">
                    </div>
                    <!-- 表面のコンテンツ -->
                    <div class="front">
                        <img class="" src="<?php echo $uri; ?>/img/ura_ikeda.jpg" alt="">
                    </div>
                </div>

                <!-- <div class="memberText catchcopy double">
                    <div class="pc skew textWhite">
                        <p>献身的なサポートで</p>
                    </div>
                    <div class="pc skew textWhite mt-1">
                        <p>最適な提案を生み出す</p>
                    </div>
                    <div class="sp skew textWhite shinjoCopy">
                        <p>献身的なサポートで最適な提案を生み出す</p>
                    </div>
                </div> -->

                <div class="skew memberText catchcopy">
                    <p>枠にとらわれず、常識を疑え</p>
                </div>
                <div class="memberName">
                    <div class="skew memberText memberTextName">
                        <p>池田 麗</p>
                    </div>
                    <div class="skew memberText memberCareer">
                        <p>教師▶︎中途入社</p>
                    </div>
                </div>
                <a href="<?php echo home_url("/career/#ikeda") ?>" class="memberArrow sp"><img class=""
                        src="<?php echo $uri; ?>/img/member_arrow.svg" alt=""></a>


                <a class="btnSkew pc" href="<?php echo home_url("/career/#ikeda") ?>">
                    <p class="more">more</p>
                </a>
            </div>
			<?php /* ?>
			            <div class="memberList mt-2">

                <div class="memberImg card">
                    <!-- 裏面のコンテンツ -->
                    <div class="back">
                        <img class="" src="<?php echo $uri; ?>/img/member_ikeda.jpg" alt="">
                    </div>
                    <!-- 表面のコンテンツ -->
                    <div class="front">
                        <img class="" src="<?php echo $uri; ?>/img/ura_ikeda.jpg" alt="">
                    </div>
                </div>

                <div class="memberText catchcopy double">
                    <div class="pc skew textWhite">
                        <p>丁寧な対応で求職者様に</p>
                    </div>
                    <div class="pc skew textWhite mt-1">
                        <p>安心感を与え、内定に導く</p>
                    </div>
                    <div class="sp skew textWhite shinjoCopy">
                        <p>丁寧な対応で求職者様に<br>安心感を与え、内定に導く</p>
                    </div>
                </div>

                <div class="memberName">
                    <div class="skew memberText memberTextName">
                        <p>池田  麗</p>
                    </div>
                    <div class="skew memberText memberCareer">
                        <p>教員 ▶︎ 中途入社</p>
                    </div>
                </div>
                <a href="<?php echo home_url("/career/#shinjo") ?>" class="memberArrow sp"><img class=""
                        src="<?php echo $uri; ?>/img/member_arrow.svg" alt=""></a>


                <a class="btnSkew pc" href="<?php echo home_url("/career/#shinjo") ?>">
                    <p class="more">more</p>
                </a>
            </div>
　　　　　　　　　　　　　　　　　<?php */ ?>
            <!-- <div class="memberList mt-2">
                <img class="memberImg" src="<?php echo $uri; ?>/img/member_shinjou.jpg" alt="">
                <div class="skew memberText catchcopy">
                    <p>キャッチコピー</p>
                </div>
                <div class="memberName">
                    <div class="skew memberText memberTextName">
                        <p>池田 麗</p>
                    </div>
                    <div class="skew memberText memberCareer">
                        <p>教員▶︎中途入社</p>
                    </div>
                </div>
                <img class="memberArrow sp" src="<?php echo $uri; ?>/img/member_arrow.svg" alt="">
            </div> -->

        </div>

        <div class="memberContainer mt-2 memberContainer_bottom">
            <div class="memberList mt-2">
                <div class="memberImg card">
                    <!-- 裏面のコンテンツ -->
                    <div class="back">
                        <img class="" src="<?php echo $uri; ?>/img/member_yabuno.jpg" alt="">
                    </div>
                    <!-- 表面のコンテンツ -->
                    <div class="front">
                        <img class="" src="<?php echo $uri; ?>/img/ura_yabuno.jpg" alt="">
                    </div>
                </div>


                <div class="skew memberText catchcopy">
                    <p>人生を本気で考え、コトに向かう</p>
                </div>
                <div class="memberName">
                    <div class="skew memberText memberTextName">
                        <p>藪野 雄斗</p>
                    </div>
                    <div class="skew memberText memberCareer">
                        <p>販売職▶︎大手広告<br>▶︎人材ベンチャー▶︎中途入社</p>
                    </div>
                </div>
                <a href="<?php echo home_url("/career/#yabuno") ?>" class="memberArrow sp"><img class=""
                        src="<?php echo $uri; ?>/img/member_arrow.svg" alt=""></a>

                <a class="btnSkew pc" href="<?php echo home_url("/career/#yabuno") ?>">
                    <p class="more">more</p>
                </a>
            </div>

            <div class="memberList mt-2">
                <div class="memberImg card">
                    <!-- 裏面のコンテンツ -->
                    <div class="back">
                        <img class="" src="<?php echo $uri; ?>/img/member_sato.jpg" alt="">
                    </div>
                    <!-- 表面のコンテンツ -->
                    <div class="front">
                        <img class="" src="<?php echo $uri; ?>/img/ura_sato.jpg" alt="">
                    </div>
                </div>


                <div class="skew memberText catchcopy">
                    <p>常に学び、初心忘るべからず</p>
                </div>
                <div class="memberName">
                    <div class="skew memberText memberTextName">
                        <p>佐藤 優生</p>
                    </div>
                    <div class="skew memberText memberCareer">
                        <p>大手貿易会社▶︎中途入社</p>
                    </div>
                </div>
                <a href="<?php echo home_url("/career/#sato") ?>" class="memberArrow sp"><img class=""
                        src="<?php echo $uri; ?>/img/member_arrow.svg" alt=""></a>

                <a class="btnSkew pc" href="<?php echo home_url("/career/#sato") ?>">
                    <p class="more">more</p>
                </a>
            </div>

            <div class="memberList mt-2">
                <div class="memberImg card">
                    <!-- 裏面のコンテンツ -->
                    <div class="back">
                        <img class="" src="<?php echo $uri; ?>/img/member_joudoji.jpg" alt="">
                    </div>
                    <!-- 表面のコンテンツ -->
                    <div class="front">
                        <img class="" src="<?php echo $uri; ?>/img/ura_joudoji.jpg" alt="">
                    </div>
                </div>


                <div class="skew memberText catchcopy">
                    <p>やるか、やらないか</p>
                </div>
                <div class="memberName">
                    <div class="skew memberText memberTextName">
                        <p>淨土寺 優希</p>
                    </div>
                    <div class="skew memberText memberCareer">
                        <p>投資用不動産会社▶︎OA機器営業会社<br>▶︎営業代行独立▶︎中途入社</p>
                    </div>
                </div>
                <a href="<?php echo home_url("/career/#joudoji") ?>" class="memberArrow sp"><img class=""
                        src="<?php echo $uri; ?>/img/member_arrow.svg" alt=""></a>

                <a class="btnSkew pc" href="<?php echo home_url("/career/#joudoji") ?>">
                    <p class="more">more</p>
                </a>
            </div>
            <div class="memberList mt-2">
                <div class="memberImg card">
                    <!-- 裏面のコンテンツ -->
                    <div class="back">
                        <img class="" src="<?php echo $uri; ?>/img/member_arasawa.jpg" alt="">
                    </div>
                    <!-- 表面のコンテンツ -->
                    <div class="front">
                        <img class="" src="<?php echo $uri; ?>/img/ura_arasawa.jpg" alt="">
                    </div>
                </div>


                <div class="skew memberText catchcopy">
                    <p>人生のきっかけを生み出す</p>
                </div>
                <div class="memberName">
                    <div class="skew memberText memberTextName">
                        <p>新澤 忠将</p>
                    </div>
                    <div class="skew memberText memberCareer">
                        <p>大手不動産会社マネージャー▶︎中途入社</p>
                    </div>
                </div>
                <a href="<?php echo home_url("/career/#arasawa") ?>" class="memberArrow sp"><img class=""
                        src="<?php echo $uri; ?>/img/member_arrow.svg" alt=""></a>

                <a class="btnSkew pc" href="<?php echo home_url("/career/#arasawa") ?>">
                    <p class="more">more</p>
                </a>
            </div>
        </div>
        <div class="member_btn">
            <a href="<?php echo home_url("/career") ?>" class="popUp recBtn">
                <p>キャリアアドバイザーの想い</p><img src="<?php echo $uri; ?>/img/blue_arrow.svg" alt="">
            </a>
        </div>

    </section>

    <div class="introduction">
        <div class="SubTitle skew">
            <p>主なご紹介先</p>
        </div>
        <div class="fadeIn itdContainer mt-4">
            <img class="sp" src="<?php echo $uri; ?>/img/sp_introduction.png" alt="">
            <img class="pc" src="<?php echo $uri; ?>/img/pc_companies.png" alt="">
        </div>

        <div class="point3 wrap">
            <div class="SubTitle skew">
                <p>企業様も安心のサービス</p>
            </div>
            <div class="point3Container fbf mt-2 pcCover">
                <img src="<?php echo $uri; ?>/img/point3_01.svg" alt="">
                <img src="<?php echo $uri; ?>/img/point3_02.svg" alt="">
                <img src="<?php echo $uri; ?>/img/point3_03.svg" alt="">
            </div>
            <p class="point3Caution pcCover mt-1 pc">（通常、6ヶ月以内10.7％）</p>
        </div>
    </div>

    <section class="quitExp mt-2">
        <div class="fadeIn quitContainer wrap">
            <p>
                弊社の短期離職率は1％（通常、6ヶ月以内10.7％）です。<br><br class="sp">
                完全紹介制かつ最適な提案を行っているからこそ、短期離職が少ない実績があります。<br class="pc">
                短期離職した人の一番の原因は入社後のギャップです。<br class="pc">
                完全無欠の企業様は存在しないため、メリット・デメリットを誠実にお伝えしております。<br><br class="sp">
                また、弊社の転職紹介先は過去にお送りしたことのある企業様が70％を占めるからこそ、<br class="pc">
                時には社員面談を行ったりと様々な視点から納得した形で入社して頂いております。
            </p>
        </div>
    </section>

    <?php echo get_template_part("section/sec-contact"); ?>

    <!--
    <div id="bar1"></div>
    <div id="bar2"></div> -->

</main>


<?php get_footer(); ?>
