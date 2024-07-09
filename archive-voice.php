<?php

$uri = get_template_directory_uri();
get_header();


?>

<main class="subp archive archive-voice">
    <section>
        <h1>転職者様</h1>
        <div class="voiceContainer wrap">
            <?php
            $args = array(
                'post_type' => 'voice',
                'posts_per_page' => 10,
                'ignore_sticky_posts' => true,
                //'meta_key' => 'お客様の声', //カスタムフィールドのキー
                //'meta_value' => '転職者' //カスタムフィールドの値
            );
            $query = new WP_Query($args); ?>
            <?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>

            <div class="voiceList fbf">
                <div class="voiceImg">
                    <?php the_post_thumbnail() ?>
                    <div class="voiceName skew memberText">
                        <p><?php the_title(); ?><span style="font-size: 0.9em;">さん</span></p>
                    </div>
                </div>

                <div class="voiceContents mt-2">
                    <div class="voiceIntro">
                        <p class="voiceRole"><?php the_field("経歴") ?></p>
                        <p class="voiceComment">
                            <?php the_field("コメント") ?>
                        </p>
                    </div>
                    <p class="voiceQ">転職を決めた理由<img class="icon_plus" src="<?php echo $uri; ?>/img/icon_plus.svg" alt="">
                    </p>
                    <p class="voiceA">
                        <?php the_field("転職を決めた理由") ?>
                    </p>
                    <p class="voiceQ">転職活動<img class="icon_plus" src="<?php echo $uri; ?>/img/icon_plus.svg" alt=""></p>
                    <p class="voiceA">
                        <?php the_field("転職活動") ?>
                    </p>
                    <p class="voiceQ">転職活動をしている方へ<img class="icon_plus" src="<?php echo $uri; ?>/img/icon_plus.svg"
                            alt="">
                    </p>
                    <p class="voiceA">
                        <?php the_field("転職活動をしている方へ") ?>
                    </p>
                </div>
            </div>
            <?php endwhile;
            endif; ?>
            <div class="pagination"></div>
        </div>
    </section>
    <section>
        <h1>コーチング会社様</h1>
        <div class="voiceContainer wrap">
            <?php
            $args = array(
                'post_type' => 'voice2',
                'posts_per_page' => 10,
                'ignore_sticky_posts' => true,
                //'meta_key' => 'お客様の声', //カスタムフィールドのキー
                //'meta_value' => '転職者' //カスタムフィールドの値
            );
            $query = new WP_Query($args); ?>
            <?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>

            <div class="voiceList fbf">
                <div class="voiceImg">
                    <?php the_post_thumbnail() ?>
                </div>

                <div class="voiceContents mt-2">
                    <div class="voiceIntro">
                        <p class="voiceRole"><?php the_title(); ?><span style="font-size: 0.9em;"> 様</span></p>
                        <p class="voiceComment"></p>
                    </div>
                    <p class="voiceQ">事業として何をしているのか？<img class="icon_plus" src="<?php echo $uri; ?>/img/icon_plus.svg"
                            alt="">
                    </p>
                    <p class="voiceA">
                        <?php the_field("事業として何をしているのか？") ?>
                    </p>
                    <p class="voiceQ">その中での関わり合い、連携<img class="icon_plus" src="<?php echo $uri; ?>/img/icon_plus.svg"
                            alt=""></p>
                    <p class="voiceA">
                        <?php the_field("その中での関わり合い、連携") ?>
                    </p>
                    <p class="voiceQ">CockPitの魅力<img class="icon_plus" src="<?php echo $uri; ?>/img/icon_plus.svg"
                            alt="">
                    </p>
                    <p class="voiceA">
                        <?php the_field("CockPitの魅力") ?>
                    </p>
                    <p class="voiceQ">キャリアに悩んでいる方へ<img class="icon_plus" src="<?php echo $uri; ?>/img/icon_plus.svg"
                            alt="">
                    </p>
                    <p class="voiceA">
                        <?php the_field("キャリアに悩んでいる方へ") ?>
                    </p>
                </div>
            </div>
            <?php endwhile;
            endif; ?>
            <div class="pagination"></div>
        </div>
    </section>
	
	<section class="contact" style="background:#fff;">
    <div class="wrap1200">
        <h2 class="blue secTitle wrap">
            CONTACT
        </h2>
    </div>

    <div class="contactContainer wrap1200 mt-2">
        <p>
            「人生」は一度きりです。毎日朝が来ることを楽しみに生きることが理想です。<br class="pc">
            CockPitはお客様の未来を少しでも良い方向に導き、より魅力的な人生を送れるように全力でサポートいたします。<br>
            <br>
            そして、どれだけ大きな売上や社員数になってもベンチャー企業らしく社会の常識を疑い、<br class="pc">より良い未来を創り、社会の発展に貢献していきます。<br><br class="sp">
            皆さん、CockPitと一緒に力を合わせて、セクシー（魅力的）な人生を作り上げましょう。
        </p>
    </div>
    <a href="<?php echo home_url("form1") ?>" class="contactBtn">
        <p>お問い合わせ</p>
    </a>
    <div class="contactBottom mt-2">
        <a href="tel: 03-6822-2265" class="tel">
            03-6822-2265
        </a>
        <p class="">
            受付時間 | 9:00~17:00<br>
            (土日祝・年末年始除く)
        </p>
    </div>
</section>

</main>

<?php get_footer(); ?>