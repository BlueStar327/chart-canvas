<?php

$uri = get_template_directory_uri();
get_header();


?>

<main class="subp page-agancy">

    <section class="fv subpTop">
        <div class="swiper fvTop">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper mt-3">
                <!-- Slides -->
                <div class="swiper-slide">
                    <img class="sp" src="<?php echo $uri; ?>/img/slide_03.png" alt="">
                    <img class="pc" src="<?php echo $uri; ?>/img/pc_slide_03.png" alt="">
                    <div class="slideText">
                        <div class="slideTextBg">
                            <p>自分らしい働き方で</p>
                        </div>
                        <div class="slideTextBg">
                            <p>自分らしい暮らしを</p>
                        </div>
                        <span>十人十色な働き方の実現へ</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="prob">
        <div class="wrap1200">
            <h2 class="blue secTitle">
                ABOUT US
            </h2>
        </div>

        <div class="probContainer wrap mt-2">
            <p>CockPitが正社員での転職支援を行う中で、<br class="sp"><strong>2つの課題</strong>を発見しました。</p>
        </div>
    </section>

    <section class="borrow grey">
        <p class="white  "><span class="din">01.</span>転職回数が多い方を受けて入れて下さる企業様が少ない</p>
        <p class="white  mt-2"><span class="din">02.</span>残業無しで勤務したい方向けの仕事が少ない</p>
    </section>

    <section class="story">
        <div class="fadeIn wrap storyTitle">
            <p>
                1億2000万人の月曜日を豊かに
            </p>
        </div>
        <p class="fadeIn wrap mt-2 storyTitleNext">
            そして、CockPitの合言葉である1億2000万人の月曜日を豊かに<br>
            を実現するためにこの事業を立ち上げました。
        </p>
        <div class="aboutImg mt-2">
            <img class="sp" src="<?php echo $uri; ?>/img/about_01.png" alt="">
        </div>
    </section>

    <section class="service">
        <div class="wrap910">
            <h2 class="blue secTitle wrap">
                OUR SERVICE
            </h2>
        </div>

        <div class="strengthTitle skew hajimeni">
            <p>はじめに</p>
        </div>
    </section>


    <section class="learn">

        <div class="learnContainer">
            <h2 class="learnTitl pc">企業様・求職者様が安心な事前研修</h2>
            <div class="pcCover wrap910">
                <div class="fadeLeft Cover">
                    <div class="mt-2 skewCard shadow">
                        <div class="skewCardInner">
                            <span class="listNum">01.</span>
                            <img class="cardIcon" src="<?php echo $uri; ?>/img/our_service_01.svg" alt="">
                            <p class="sp">CockPit独自の<br>研修プログラム</p>
                        </div>
                    </div>
                    <p class="pc mt-1">CockPit独自の研修プログラム</p>
                </div>
                <div class="fadeLeft Cover">
                    <div class="mt-2 skewCard shadow">
                        <div class="skewCardInner">
                            <span class="listNum">02.</span>
                            <img class="cardIcon" src="<?php echo $uri; ?>/img/our_service_02.svg" alt="">
                            <p class="sp">タイピング研修</p>
                        </div>
                    </div>
                    <p class="pc mt-1">タイピング研修</p>
                </div>
                <div class="fadeLeft Cover">
                    <div class="mt-2 skewCard shadow">
                        <div class="skewCardInner">
                            <span class="listNum">03.</span>
                            <img class="cardIcon" src="<?php echo $uri; ?>/img/our_service_03.svg" alt="">
                            <p class="sp">マナー研修</p>
                        </div>
                    </div>
                    <p class="pc mt-1">マナー研修</p>
                </div>
            </div>
            <p class="mt-2 center wrap1200 white learnText">
                弊社では、派遣社員としてキャリアを上げる、<br class="sp">
                その後正社員を目指すと将来への目標を持った方が多いです。<br>
                そのため、重要である勤怠の管理、そして職場での振る舞いや<br class="sp">
                当事者意識も持った勤務態度含め、独自の研修にて管理しております。
            </p>
        </div>

    </section>

    <section class="dataSection">
        <div class="dataIntro wrap">
            <div class="strengthTitle skew">
                <p>企業様へ　-データで見るCockPit-</p>
            </div>
            <a href="" class="toRecruit fbf wrap">
                <img class="pc" src="<?php echo $uri; ?>/img/blue_arrow.svg" alt="">
                <p>求職者様へ</p>
                <img class="sp" src="<?php echo $uri; ?>/img/blue_arrow.svg" alt="">
            </a>
        </div>
        <div class="pcCover pcFbf pcBorderTop pcBorderBottom">

            <div class="data dataAge wrap1200 pcBorderLeft">
                <div class="SubTitle skew ft25">
                    <p>派遣社員の平均年齢</p>
                </div>
                <div class="dataContainer fbf wrap mt-2">
                    <div class="dataList1">
                        <p class="average">平均年齢</p>
                        <p class="age"><span>41</span>歳</p>
                        <p class="ageList">業界</p>
                    </div>
                    <div class="dataList1">
                        <p class="average">平均年齢</p>
                        <p class="age"><span style="color: #171f63">26</span>歳</p>
                        <p class="ageList blue">CockPit</p>
                    </div>
                </div>
                <p class="center mt-1 dataAgeText">20-30代に特化したサービスです</p>
            </div>

            <div class="data dataService wrap1200 ">
                <div class="SubTitle skew ft25">
                    <p>事業成長率</p>
                </div>
                <div class="dataContainer fbf wrap mt-2">
                    <div class="dataList2 fbf wrap">
                        <p class="year">2021</p>
                        <img src="<?php echo $uri; ?>/img/NC-bar_serv_2021.svg" alt="">
                    </div>
                    <div class="dataList2 fbf wrap mt-1">
                        <p class="year">2022</p>
                        <img src="<?php echo $uri; ?>/img/NC-bar_serv_2022.svg" alt="">
                    </div>
                    <div class="dataList2 fbf wrap mt-1">
                        <p class="year year-bgc">2023</p>
                        <img src="<?php echo $uri; ?>/img/NC-bar_serv_2023.svg" alt="">
                    </div>
                </div>
                <!-- <p class="compared">昨対比 <span>118</span> %UP</p> -->
                 <p class="compared">昨対比 <span>335</span> %UP</p>
                <p class="mt-1 textUp">出向や派遣社員数 UP</p>
            </div>

        </div>


        <div class="data dataSatis wrap">
            <div class="SubTitle skew">
                <p>満足度</p>
            </div>
            <div class="dataContainer">
                <img class="sp dataSatisList" src="<?php echo $uri; ?>/img/graph_satis_sp.svg" alt="">
                <img class="pc" src="<?php echo $uri; ?>/img/pc_graph_satis.svg" alt="">
            </div>
            <p class="dataSatisText">
                リモートワーク案件や、残業時間の少ない案件が<br class="sp">
                増えてきたことで実現
            </p>
        </div>

        <div class="pcCover pcFbf dataGrid">
            <div class="Cover">
                <div class="data dataValiation wrap">
                    <div class="SubTitle skew">
                        <p>職種構成</p>
                    </div>
                    <div class="dataContainer mt-2">
                        <img src="<?php echo $uri; ?>/img/graph_valiation.svg" alt="">
                    </div>
                    <p class="validText">
                        事務は正社員転職での求人が多いため、<br>
                        コールセンターの割合が多い状態です
                    </p>
                </div>
            </div>
            <div class="Cover pcSeparate">
                <div class="data dataCapital wrap pcSeparateChild">
                    <div class="SubTitle skew">
                        <p>資本金</p>
                    </div>
                    <div class="mt-2 capital">
                        <p><span>4,500</span>万円</p>
                    </div>
                </div>

                <div class="data dataEmp wrap bbt pcSeparateChild">
                    <div class="SubTitle skew">
                        <p>稼働者数</p>
                    </div>
                    <div class="dataContainer mt-2 emp">
                        <p class="empNum"><span>120</span>名</p>
                        <p class="mt-1 emphosok">業務委託・社外パートナー含む</p>
                    </div>
                </div>
            </div>

        </div>


    </section>

    <div class="confi">
        <div class="wrap confiContainer">
            <div class="SubTitle skew">
                <p>求職者様へ</p>
            </div>
        </div>
        <div class="wrap confi2">
            <div class="SubTitle skew pcMax ft15">
                <p>
                    CockPitは正社員前提のお仕事紹介にも自信があります
                </p>
            </div>
        </div>
    </div>

    <section class="agancy">
        <div class="agancyContainer">
            <div class="agancyList">
                <div class="pcCover pcFbf wrap910">

                    <div class="fadeLeft Cover">
                        <div class="mt-2 skewCard shadow">
                            <div class="skewCardInner">
                                <span class="listNum">01.</span>
                                <img class="cardIcon" src="<?php echo $uri; ?>/img/agancy_01.svg" alt="">
                                <p class="sp">
                                    日本トップクラスの<br>
                                    転職対応満足度
                                </p>
                            </div>
                        </div>
                        <p class="pc mt-1">
                            日本トップクラスの<br>
                            転職対応満足度
                        </p>
                    </div>

                    <div class="fadeLeft Cover">
                        <div class="mt-1 skewCard shadow">
                            <div class="skewCardInner">
                                <span class="listNum">02.</span>
                                <img class="cardIcon" src="<?php echo $uri; ?>/img/agancy_02.svg" alt="">
                                <p class="sp">
                                    日本トップクラスの<br>
                                    早期離職率の低さ
                                </p>
                            </div>
                        </div>
                        <p class="pc mt-1">
                            日本トップクラスの<br>
                            早期離職率の低さ
                        </p>
                    </div>

                    <div class="fadeLeft Cover">
                        <div class="mt-1 skewCard shadow">
                            <div class="skewCardInner">
                                <span class="listNum">03.</span>
                                <img class="cardIcon" src="<?php echo $uri; ?>/img/agancy_03.svg" alt="">
                                <p class="sp">
                                    転職回数が多い方への<br>
                                    キャリア構築力
                                </p>
                            </div>
                        </div>
                        <p class="pc mt-1">
                            転職回数が多い方への<br>
                            キャリア構築力
                        </p>
                    </div>

                    <div class="fadeLeft Cover">
                        <div class="mt-2 skewCard shadow">
                            <div class="skewCardInner">
                                <span class="listNum">04.</span>
                                <img class="cardIcon" src="<?php echo $uri; ?>/img/agancy_04.svg" alt="">
                                <p class="sp">
                                    育児中の女性に<br>
                                    リモート勤務環境を提供
                                </p>
                            </div>
                        </div>
                        <p class="pc mt-2">
                            育児中の女性に<br>
                            リモート勤務環境を提供
                        </p>
                    </div>

                    <div class="fadeLeft Cover">
                        <div class="mt-2 skewCard shadow">
                            <div class="skewCardInner">
                                <span class="listNum">05.</span>
                                <img class="cardIcon" src="<?php echo $uri; ?>/img/agancy_05.svg" alt="">
                                <p class="sp">
                                    派遣業でありながら<br>
                                    年収400-500万円を<br>超える方多数
                                </p>
                            </div>
                        </div>
                        <p class="pc mt-2">
                            派遣業でありながら<br>
                            年収400-500万円を
                            超える方多数
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <div class="inter">
        <div class="borderInter wrap910"></div>
        <div class="SubTitle skew ft25">
            <p>
                安心のキャリア面談
            </p>
        </div>
    </div>

    <section class="interview">
        <div class="pcFbf wrap1080">
            <div class="Cover">
                <img class="interviewImg" src="<?php echo $uri; ?>/img/interview.png" alt="">
                <div class="interviewContainer">
                    <div class="interviewList">
                        <table class="wrap">
                            <tr>
                                <th><img class="checkWhite" src="<?php echo $uri; ?>/img/check_white.svg" alt=""></th>
                                <td>毎月1回のキャリア面談</td>
                            </tr>
                            <tr>
                                <th><img class="checkWhite" src="<?php echo $uri; ?>/img/check_white.svg" alt=""></th>
                                <td>キャリア構築相談</td>
                            </tr>
                            <tr>
                                <th><img class="checkWhite" src="<?php echo $uri; ?>/img/check_white.svg" alt=""></th>
                                <td>プロのスタッフがご対応</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="fadeLeft Cover">
                <p class="mt-2 interviewText">
                    CockPitは稼働者様のご要望に合わせ、正社員キャリアアドバイザー、<br class="pc">派遣営業スタッフのいずれかにて月に1回面談を行っております。<br
                        class="pc">そしてこのタイミングにて、仕事に求めること、<br class="pc">どんなことを満たせる職に就きたいかをヒアリングし、<br
                        class="pc">その目標に向けてのキャリア作りのアドバイスをおこなっております。<br><br class="sp">
                    この仕組みにより、長期的な視点での目標を立て、<br class="pc">派遣、正社員等の雇用形態にとらわれずにキャリアを歩むことができます。
                </p>
            </div>
        </div>


    </section>

    <section class="career2">
        <div class="borderCareer wrap910"></div>
        <div class="SubTitle skew ft25">
            <p>
                CockPitが提供するキャリア
            </p>
        </div>
        <div class="career2Container">
            <div class="career2List wrap">
                <!-- <div class="changeCharWrap">
                    <img class="changeChar" src="<?php echo $uri; ?>/img/change_01.svg" alt="">
                    <p class="changeNum">転職経験5回</p>
                </div>
                <img class="changeImg" src="<?php echo $uri; ?>/img/change_stair_01.svg" alt=""> -->
                <img src="<?php echo $uri; ?>/img/change_stair_001-sp.svg" alt="">
            </div>
            <div class="career2List wrap mt-4">
                <!-- <div class="changeCharWrap">
                    <img class="changeChar" src="<?php echo $uri; ?>/img/change_02.svg" alt="">
                    <p class="changeNum">転職経験1回</p>
                </div>
                <img class="changeImg" src="<?php echo $uri; ?>/img/change_stair_02.svg" alt=""> -->
                <img src="<?php echo $uri; ?>/img/change_stair_002-sp.svg" alt="">
            </div>
            <div class="career2List wrap mt-4">
                <!-- <div class="changeCharWrap">
                    <img class="changeChar" src="<?php echo $uri; ?>/img/change_03.svg" alt="">
                    <p class="changeNum">転職経験2回</p>
                </div>
                <img class="changeImg" src="<?php echo $uri; ?>/img/change_stair_03.svg" alt=""> -->
                <img src="<?php echo $uri; ?>/img/change_stair_003-sp.svg" alt="">
            </div>
        </div>
    </section>

    <?php echo get_template_part("section/sec-contact"); ?>

</main>


<?php get_footer(); ?>
