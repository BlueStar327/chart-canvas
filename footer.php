<?php

$uri = get_template_directory_uri();

?>



<footer>

    <div class="footerInner">
        <div class="footerNav">
            <div class="footerLogo">
                <img src="<?php echo $uri; ?>/img/logo_white.svg" alt="">
            </div>
            <nav class="pc gNav">
                <ul>
                    <!-- <li><a href='<?php echo home_url("/recruit/"); ?>'>サービス</a></li> -->
                    <li><a href='<?php echo home_url("/about/"); ?>'>企業情報</a></li>
                    <li><a href='https://shine-parsnip-fd7.notion.site/RECRUIT-53a5c827a92a4e17922557073cb09afb?pvs=4' target="_blank">採用情報</a></li>
                    <li><a href='https://shine-parsnip-fd7.notion.site/2229636b028e4741ac2f55987572de2f?pvs=4' target="_blank">サービスを利用した方の声</a></li>
                    <li><a href='<?php echo home_url("/form1/"); ?>'>お問い合わせ</a></li>
                </ul>
            </nav>
        </div>

        <p><small>CockPit inc. Itd. All rights reserved. </small></p>
    </div>

</footer>

<script src="https://code.jquery.com/jquery-3.6.2.min.js"
    integrity="sha256-2krYZKh//PcchRtd+H+VyyQoZ/e3EcrkxhM8ycwASPA=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js"></script>
<script src="<?php echo $uri; ?>/assets/entry.js"></script>
<script src="<?php echo $uri; ?>/assets/script.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/protonet-jquery.inview/1.1.2/jquery.inview.min.js"></script>
<script src="<?php echo $uri; ?>/assets/page_recruit.js"></script>
<script src="<?php echo $uri; ?>/assets/page-agancy.js"></script>


<?php wp_footer(); ?>
</body>

</html>