<?php

$uri = get_template_directory_uri();

get_header();

?>

<main class="subp page-engineer">

    <section class="fv subpTop">
        <div class="swiper fvTop">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper mt-3">
                <!-- Slides -->
                <div class="swiper-slide">
                    <img class="sp" src="<?php echo $uri; ?>/img/slide_02.png" alt="">
                    <img class="pc" src="<?php echo $uri; ?>/img/pc_slide_02.png" alt="">
                    <div class="slideText">
                        <div class="slideTextBg">
                            <p>常識を覆した</p>
                        </div>
                        <div class="slideTextBg">
                            <p>ITエンジニア支援</p>
                        </div>
                        <span>働き方に囚われないエンジニアを生み出す</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="egRecruit" style="padding-top: 0;">
        <div class="wrap strengthTitle skew">
            <p>エンジニア未経験の方へ<span class="sp">経験者の方はこちら<img class="torecruitArrow sp" src="<?php echo $uri; ?>/img/white_arrow.svg" alt=""></span></p>
        </div>
        <a href="<?php echo home_url("/entry/") ?>" class="toRecruit fbf wrap">
            <img class="pc" src="<?php echo $uri; ?>/img/blue_arrow.svg" alt="">
            <p>採用情報を見る</p>
            <img class="sp" src="<?php echo $uri; ?>/img/blue_arrow.svg" alt="">
        </a>
    </section>

    <section class="egIntro">
        <table class="egIntroTable wrap910">
            <tr class="fadeIn">
                <th><img class="checkWhite" src="<?php echo $uri; ?>/img/check_white.svg" alt=""></th>
                <td>リモートで勤務したい</td>
            </tr>
            <tr class="fadeIn">
                <th><img class="checkWhite" src="<?php echo $uri; ?>/img/check_white.svg" alt=""></th>
                <td>黙々と作業に取り組むことが好き</td>
            </tr>
            <tr class="fadeIn">
                <th><img class="checkWhite" src="<?php echo $uri; ?>/img/check_white.svg" alt=""></th>
                <td>ゲームやパソコンが好き</td>
            </tr>
            <tr class="fadeIn">
                <th><img class="checkWhite" src="<?php echo $uri; ?>/img/check_white.svg" alt=""></th>
                <td>IT業界が伸びていくと感じてスキルをつけたい</td>
            </tr>
        </table>
        <p class="mt-4">
            何か1つでも当てはまれば、エンジニアとしてのキャリアを<br class="sp">
            積むことをお勧めしております。
        </p>
    </section>

    <section class="sks">
        <p class="wrap" style="text-align: center;">しかし、未経験でも勤務できる会社には次のような実態があります</p>
    </section>

    <section class="borrow">

        <div class="wrap borrowContainer">
            <div class="fadeLeft pcCover">
                <div class="mt-2 skewCard">
                    <div class="skewCardInner">
                        <span class="listNum">01.</span>
                        <img class="cardIcon" src="<?php echo $uri; ?>/img/eg_intro_01.svg" alt="">
                        <p class="sp">成長に繋がらない業務の<br>関わるリスク</p>
                    </div>
                </div>
                <p class="pc mt-1 mc-center">成長に繋がらない業務の関わるリスク</p>
            </div>

            <div class="fadeLeft pcCover">
                <div class="mt-2 skewCard">
                    <div class="skewCardInner">
                        <span class="listNum">02.</span>
                        <img class="cardIcon" src="<?php echo $uri; ?>/img/eg_intro_02.svg" alt="">
                        <p class="sp borrowCardText2">教育体制が整っていない</p>
                    </div>
                </div>
                <p class="pc mt-1">教育体制が整っていない</p>
            </div>

            <div class="fadeLeft pcCover">
                <div class="mt-2 skewCard">
                    <div class="skewCardInner">
                        <span class="listNum">03.</span>
                        <img class="cardIcon" src="<?php echo $uri; ?>/img/eg_intro_03.svg" alt="">
                        <p class="sp borrowCardText3">昇給が見込めない環境</p>
                    </div>
                </div>
                <p class="pc mt-1">昇給が見込めない環境</p>
            </div>

        </div>

    </section>

    <section class="sks">
        <p class="wrap" style="text-align: center; font-weight: bold;">これらを解決したキャリアをCockPitがご提案します</p>
    </section>

    <section class="egCareer">
        <div class="egCareerContainer wrap">
            <div class="careerList mt-2">
                <div class="careerListTitle fbf">
                    <p class="careerx">Career<span>A</span></p>
                    <p class="careerTitleText income">目標年収 <br class="sp"><span>400</span> 万円</p>
                    <p class="careerTitleText kinmu"><span class="careerpoint">Point</span> <br class="sp">週 3 日勤務</p>
                </div>
                <div class="pcCover fbf">
                    <div class="fadeLeft Cover">
                        <div class="mt-2 skewCard shadow">
                            <div class="skewCardInner">
                                <span class="listNum">01.</span>
                                <img class="cardIcon" src="<?php echo $uri; ?>/img/eg_solu_01.svg" alt="">
                                <p class="sp">講習受講</p>
                            </div>
                        </div>
                        <p class="pc mt-2">講習受講</p>
                    </div>
                    <div class="fadeLeft Cover">
                        <div class="mt-2 skewCard shadow">
                            <div class="skewCardInner">
                                <span class="listNum">02.</span>
                                <img class="cardIcon" src="<?php echo $uri; ?>/img/eg_solu_02.svg" alt="">
                                <p class="sp">CockPitエンジニア</p>
                            </div>
                        </div>
                        <p class="pc mt-2">CockPitエンジニア</p>
                    </div>
                </div>
            </div>

            <div class="careerList mt-4">
                <div class="careerListTitle fbf">
                    <p class="careerx">Career<span>B</span></p>
                    <p class="careerTitleText income">目標年収 <br class="sp"><span>600</span> 万円</p>
                    <p class="careerTitleText kinmu"><span class="careerpoint">Point</span> <br class="sp">有名アプリ開発</p>
                </div>
                <div class="wrap pcCover fbf">
                    <div class="fadeLeft Cover">
                        <div class="mt-2 skewCard shadow">
                            <div class="skewCardInner">
                                <span class="listNum">01.</span>
                                <img class="cardIcon" src="<?php echo $uri; ?>/img/eg_solu_01.svg" alt="">
                                <p class="sp">講習受講</p>
                            </div>
                        </div>
                        <p class="pc mt-2">講習受講</p>
                    </div>
                    <div class="fadeLeft Cover">
                        <div class="mt-2 skewCard shadow">
                            <div class="skewCardInner">
                                <span class="listNum">02.</span>
                                <img class="cardIcon" src="<?php echo $uri; ?>/img/eg_solu_02.svg" alt="">
                                <p class="sp">CockPitエンジニア</p>
                            </div>
                        </div>
                        <p class="pc mt-2">CockPitエンジニア</p>
                    </div>
                    <div class="fadeLeft Cover">
                        <div class="mt-2 skewCard shadow">
                            <div class="skewCardInner">
                                <span class="listNum">03.</span>
                                <img class="cardIcon cardIcon" src="<?php echo $uri; ?>/img/eg_solu_03.svg" alt="">
                                <p class="sp">自社開発大手IT企業</p>
                            </div>
                        </div>
                        <p class="pc mt-2">自社開発大手IT企業</p>
                    </div>
                </div>
            </div>

            <div class="careerList mt-4">
                <div class="careerListTitle fbf">
                    <p class="careerx">Career<span>C</span></p>
                    <p class="careerTitleText income">目標年収 <br class="sp"><span>800</span> 万円</p>
                    <p class="careerTitleText kinmu"><span class="careerpoint">Point</span> <br class="sp">リモート勤務</p>
                </div>
                <div class="pcCover fbf">
                    <div class="fadeLeft Cover">
                        <div class="mt-2 skewCard shadow">
                            <div class="skewCardInner">
                                <span class="listNum">01.</span>
                                <img class="cardIcon" src="<?php echo $uri; ?>/img/eg_solu_01.svg" alt="">
                                <p class="sp">講習受講</p>
                            </div>
                        </div>
                        <p class="pc mt-2">講習受講</p>
                    </div>
                    <div class="fadeLeft Cover">
                        <div class="mt-2 skewCard shadow">
                            <div class="skewCardInner">
                                <span class="listNum">02.</span>
                                <img class="cardIcon" src="<?php echo $uri; ?>/img/eg_solu_02.svg" alt="">
                                <p class="sp">IT企業(2年)</p>
                            </div>
                        </div>
                        <p class="pc mt-2">IT企業(2年)</p>
                    </div>
                    <div class="fadeLeft Cover">
                        <div class="mt-2 skewCard shadow">
                            <div class="skewCardInner">
                                <span class="listNum">03.</span>
                                <img class="cardIcon icon54" src="<?php echo $uri; ?>/img/eg_solu_05.svg" alt="">
                                <p class="sp">フリーランスエンジニア</p>
                            </div>
                        </div>
                        <p class="pc mt-2">フリーランスエンジニア</p>
                    </div>
                </div>

            </div>

        </div>

    </section>

    <section class="bullet2">
        <p class="wrap" style="text-align: center;">なぜCockPitは実現できるのか？</p>
    </section>

    <section class="why">
        <div class="whyContainer wrap1080 fbf">
            <div class="fadeLeft whyItem">
                <img src="<?php echo $uri; ?>/img/why_01.svg" alt="">
                <p class="mt-1">
                    講師や面談を請負う者は<br class="sp">CockPitのスクールを卒業した <br>
                    現役フリーランスエンジニア or <br class="sp">弊社エンジニア
                </p>
            </div>
            <div class="fadeLeft whyItem">
                <img src="<?php echo $uri; ?>/img/why_02.svg" alt="">
                <p class="mt-1">
                    エンジニアになるまでのサポートに加え、<br>
                    3年後に自社開発かフリーランスエンジニアに<br>なる事を前提とした研修
                </p>
            </div>
        </div>

    </section>

    <section class="bullet">
        <p class="" style="text-align: center;"><span></span></p>
        <p class="mt-1" style="text-align: center;"><span></span></p>
        <p class="mt-1" style="text-align: center;"><span></span></p>
    </section>

    <section class="recCta ">
        <p class="fadeIn wrap">
            研修を受けた人の内、50%が高卒、90%が未経験です。<br>
            CockPitはエンジニアになること自体を目的とせず、<Br>
            エンジニアとして（高年収で）活躍する人材をテーマ<br class="sp">
            に教育をしております。<br>
            <br>
            リモートワーク、高収入、フリーランス<br>
            理想を諦めず、CockPitと共に未来を切り開こう！
        </p>
        <a href="<?php echo home_url("/entry/") ?>" class="recBtn">採用情報を見る<img src="<?php echo $uri; ?>/img/blue_arrow.svg" alt=""></a>
    </section>

    <section class="yami">
        <div class="wrap strengthTitle skew">
            <p>SES業界の闇に気づいた方へ</p>
        </div>
        <a href="<?php echo home_url("/entry/") ?>" class="toRecruit fbf wrap">
            <img class="pc" src="<?php echo $uri; ?>/img/blue_arrow.svg" alt="">
            <p>採用情報を見る</p>
            <img class="sp" src="<?php echo $uri; ?>/img/blue_arrow.svg" alt="">
        </a>
        <div class="SubTitle skew purple">
            <p>実態</p>
        </div>

        <div class="jittai">
            <table class="wrap">
                <tr class="fadeIn">
                    <th><img class="checkWhite" src="<?php echo $uri; ?>/img/check_white.svg" alt=""></th>
                    <td>
                        単価を知って驚いたが、<br class="sp">
                        大きな金額を所属会社に取られている、、、
                    </td>
                </tr>
                <tr class="fadeIn">
                    <th><img class="checkWhite" src="<?php echo $uri; ?>/img/check_white.svg" alt=""></th>
                    <td>興味の無い案件に入ってばかり、、、</td>
                </tr>
                <tr class="fadeIn">
                    <th><img class="checkWhite" src="<?php echo $uri; ?>/img/check_white.svg" alt=""></th>
                    <td>リモートで働くことができない、、、</td>
                </tr>
            </table>
            <div class="wrap">
                <p class="mt-4 center">
                    普段、エンジニア様とお会いしていると、このような声をたくさん聞きます。<br>
                    しかし、知識がなければこのような状況に陥いる<br class="sp">仕組みになっているのがSES業界の実態です。
                </p>
            </div>


        </div>


        <div class="sesIntroduce">
            <div class="SubTitle skew ft25">
                <p>受託・開発企業様のご紹介</p>
            </div>

        </div>

    </section>

    <section class="egIntro egIntroPc egInrto2">
        <table class="wrap">
            <tr class="fadeIn tnone">
                <th><img class="checkWhite" src="<?php echo $uri; ?>/img/check_white.svg" alt=""></th>
                <td>フリーランス勤務としての支援</td>
            </tr>
            <tr class="fadeIn">
                <th><img class="checkWhite" src="<?php echo $uri; ?>/img/check_white.svg" alt=""></th>
                <td>自社開発の企業様のご紹介</td>
            </tr>
        </table>
        <p class="fadeIn mt-2 wrap egBottomText eg2BottomText">
            CockPitはそのようなエンジニア様に向けたサービスをご用意しています。
        </p>
        <p class="fadeIn mt-2 wrap ft20">
            尚、多数の案件を抱えているため、<br>
            フリーランスとして働くことのメリットや働き方をお伝えしております。
        </p>
    </section>

    <section class="freelance">
        <p class="wrap bold freelanceIntro">フリーランスと聞いて、みなさんどのような働き方を想像されますか？</p>
        <div class="SubTitle skew purple ft25">
            <p>フリーランスへのイメージ</p>
        </div>
        <div class="jittai mt-2">
            <table class="wrap">
                <tr class="fadeIn">
                    <th><img class="checkWhite" src="<?php echo $uri; ?>/img/check_white.svg" alt=""></th>
                    <td>契約書等が面倒で損害賠償が怖い、、、</td>
                </tr>
                <tr class="fadeIn">
                    <th><img class="checkWhite" src="<?php echo $uri; ?>/img/check_white.svg" alt=""></th>
                    <td>税金の申告が大変、、、</td>
                </tr>
                <tr class="fadeIn">
                    <th><img class="checkWhite" src="<?php echo $uri; ?>/img/check_white.svg" alt=""></th>
                    <td>仕事を獲得できるイメージがわかない、、、</td>
                </tr>
            </table>
            <p class="mt-4 wrap1200 freelanceBottom">
                このような声をよく聞きますが、弊社でのサポートの場合、<br>
                これら全てをこちらで行うためご安心ください。<br class="sp">
                下記のようにいくつか固定給での中から案件を選べるイメージとなります。
            </p>
        </div>
    </section>

    <p class="wrap bold freelanceIntro center">あなたはどれを選びますか？</p>

    <div class="workSubTitle SubTitle skew">

        <p>CockPitが提案する働き方</p>
    </div>

    <div class="workVal mt-2">

        <div class="fadeIn workExm wrap">
            <img src="<?php echo $uri; ?>/img/income_graph.svg" alt="">
        </div>
        <p class="fadeLeft wrap mt-2 workValText">
            数多くの案件の中で業務内容や働き方を選べて、<br>
            自分次第で人生を魅力的に変えることのできるチャレンジをしませんか？
        </p>
        <a href="<?php echo home_url("/entry/") ?>" class="fadeLeft recBtn fbf wrap">
            <p>採用情報を見る</p><img src="<?php echo $uri; ?>/img/blue_arrow.svg" alt="">
        </a>
    </div>

    <?php echo get_template_part("section/sec-contact"); ?>


</main>

<?php get_footer(); ?>