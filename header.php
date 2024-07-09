<?php

$uri = get_template_directory_uri();

get_header();

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>株式会社 CockPit</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="<?php echo $uri; ?>/assets/base.css">
    <link rel="stylesheet" href="<?php echo $uri; ?>/assets/main.css">
    <link rel="stylesheet" href="<?php echo $uri; ?>/assets/subp.css">
    <link rel="stylesheet" href="<?php echo $uri; ?>/assets/subp2.css">
    <link rel="stylesheet" href="<?php echo $uri; ?>/assets/subp3.css">
    <link rel="icon" href="<?php echo $uri; ?>/img/favicon.png">
    <script>
        (function(d) {
            var config = {
                    kitId: 'acz8bew',
                    scriptTimeout: 3000,
                    async: true
                },
                h = d.documentElement,
                t = setTimeout(function() {
                    h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
                }, config.scriptTimeout),
                tk = d.createElement("script"),
                f = false,
                s = d.getElementsByTagName("script")[0],
                a;
            h.className += " wf-loading";
            tk.src = 'https://use.typekit.net/' + config.kitId + '.js';
            tk.async = true;
            tk.onload = tk.onreadystatechange = function() {
                a = this.readyState;
                if (f || a && a != "complete" && a != "loaded") return;
                f = true;
                clearTimeout(t);
                try {
                    Typekit.load(config)
                } catch (e) {}
            };
            s.parentNode.insertBefore(tk, s)
        })(document);
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.10.0/lottie.min.js"></script>
    <?php wp_head(); ?>
</head>

<body>

    <header>

        <div class="headerInner fbf wrap">

            <a class="headerLogo" href="<?php echo home_url(); ?>">
                <img src="<?php echo $uri; ?>/img/logo.svg" alt="">
            </a>
            <div class="humb sp">
                <div class="humbInner">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>

            </div>

            <nav class="pc gNav">
                <ul>
                    <li class="relative gNavRecruit">
                        <p>サービス</p>
                        <ul class="pc gNav2">
                            <li class="gNav2List"><a href='<?php echo home_url("/recruit/"); ?>'>転職支援</a></li>
                            <li class="gNav2List"><a href='<?php echo home_url("/engineer/"); ?>'>エンジニア × 革新</a></li>
                            <li class="gNav2List"><a href='<?php echo home_url("/agancy/"); ?>'>人材派遣</a></li>
                            <li class="gNav2List"><a href='<?php echo home_url("/coaching/"); ?>'>CockPit × コーチング企業</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href='<?php echo home_url("/about/"); ?>'>企業情報</a></li>
                    <li><a href='https://shine-parsnip-fd7.notion.site/RECRUIT-53a5c827a92a4e17922557073cb09afb?pvs=4' target="_blank">採用情報</a></li>
                    <li><a href='https://shine-parsnip-fd7.notion.site/2229636b028e4741ac2f55987572de2f?pvs=4' target="_blank">サービスを利用した方の声</a></li>
                    <li class="relative gNavRecruit">
                        <p>お問い合わせ</p>
                        <ul class="pc gNav2 contactGNav2">
                            <li class="gNav2List"><a href='<?php echo home_url("/form1/"); ?>'>メールでお問い合わせ</a></li>
                            <li class="gNav2List"><a href='<?php echo home_url("/form2/"); ?>'>採用フォーム</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>


        </div>


    </header>

    <nav class="spNav">
        <ul>
            <li class="spNav1 spNavTop"><a href='<?php echo home_url(); ?>'>トップ</a></li>
            <li class="spNavService">サービス</li>
            <ul class="pc spNav2">
                <li class="spNav2List"><a href='<?php echo home_url("/recruit/"); ?>'>転職支援</a></li>
                <li class="spNav2List"><a href='<?php echo home_url("/engineer/"); ?>'>エンジニア × 革新</a></li>
                <li class="spNav2List"><a href='<?php echo home_url("/agancy/"); ?>'>人材派遣</a></li>
                <li class="spNav2List"><a href='<?php echo home_url("/coaching/"); ?>'>CockPit × コーチング企業</a></li>
            </ul>
            <li class="spNav1"><a href='<?php echo home_url("/about/"); ?>'>企業情報</a></li>
            <li class="spNav1"><a href='https://shine-parsnip-fd7.notion.site/RECRUIT-53a5c827a92a4e17922557073cb09afb?pvs=4' target="_blank">採用情報</a></li>
            <li class="spNav1"><a href='https://shine-parsnip-fd7.notion.site/2229636b028e4741ac2f55987572de2f?pvs=4' target="_blank">サービスをご利用いただいた方の声
                </a></li>
            <li class="spNav1"><a href='<?php echo home_url("/form1/"); ?>'>お問い合わせ</a></li>
            <li class="spNav1"><a href='<?php echo home_url("/form2/"); ?>'>お問い合わせ<span class="spNavSpan">(CockPitへ就職希望の方)</span></a>
            </li>
        </ul>
        <div class="humbClose sp">
            <span></span>
            <span></span>

        </div>
        <img class="spNavLogo" src="<?php echo $uri; ?>/img/logo_white.svg" alt="">
    </nav>