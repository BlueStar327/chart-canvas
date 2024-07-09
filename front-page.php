<?php

$uri = get_template_directory_uri();
get_header();


?>

<div class="loading loading-wrap">
<video class="video sp" autoplay muted preload="auto" playsinline>
	<source src="<?php echo $uri; ?>/img/sp_op_anime.mp4" />
	</video>
<video class="video pc" autoplay muted preload="auto" playsinline>
	<source src="<?php echo $uri; ?>/img/pc_op_anime.mp4" />
	</video>

</div>

<main class="front-page">

    <section class="fv">
        <div class="swiper fvTopSwiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper mt-3">
                <!-- Slides -->
                <div class="swiper-slide">
                    <div class="slidemak"></div>
                    <img class="sp" src="<?php echo $uri; ?>/img/slide_01.png" alt="">
                    <img class="pc" src="<?php echo $uri; ?>/img/pc_slide_01.png" alt="">
                    <div class="slideText">
                        <span>01/転職支援</span>
                        <div class="slideTextBg">
                            <p>あなたの挑戦が</p>
                        </div>
                        <div class="slideTextBg">
                            <p>きっと誰かの背中を押す</p>
                        </div>
                    </div>
                    <div class="slideInnerBtn">
                        <span>あなたの"人生"を考えたキャリア支援</span>
                        <a class="btn" href="<?php echo home_url("/recruit/") ?>">
                            サービスを見る
                            <img src="<?php echo $uri; ?>/img/btn_arrow.svg" alt="">
                        </a>
                    </div>
                </div>
                <!-- Slides -->
                <div class="swiper-slide">
                    <div class="slidemak"></div>
                    <img class="sp" src="<?php echo $uri; ?>/img/slide_02.png" alt="">
                    <img class="pc" src="<?php echo $uri; ?>/img/pc_slide_02.png" alt="">
                    <div class="slideText">
                        <span>02/エンジニア×革新</span>
                        <div class="slideTextBg">
                            <p>常識を覆した</p>
                        </div>
                        <div class="slideTextBg">
                            <p>ITエンジニア支援</p>
                        </div>
                    </div>
                    <div class="slideInnerBtn">
                        <span>働き方に囚われないエンジニアを生み出す</span>
                        <a class="btn" href="<?php echo home_url("/engineer/") ?>">
                            サービスを見る
                            <img src="<?php echo $uri; ?>/img/btn_arrow.svg" alt="">
                        </a>
                    </div>
                </div>
                <!-- Slides -->
                <div class="swiper-slide">
                    <div class="slidemak"></div>
                    <img class="sp" src="<?php echo $uri; ?>/img/slide_03.png" alt="">
                    <img class="pc" src="<?php echo $uri; ?>/img/pc_slide_03.png" alt="">
                    <div class="slideText">
                        <span>03/人材派遣</span>
                        <div class="slideTextBg slide3Text">
                            <p>自分らしい働き方で</p>
                        </div>
                        <div class="slideTextBg slide3Text">
                            <p>自分らしい暮らしを</p>
                        </div>
                    </div>
                    <div class="slideInnerBtn">
                        <span>十人十色な働き方の実現へ</span>
                        <a class="btn" href="<?php echo home_url("/agancy/") ?>">
                            サービスを見る
                            <img src="<?php echo $uri; ?>/img/btn_arrow.svg" alt="">
                        </a>
                    </div>
                </div>
                <!-- Slides -->
                <div class="swiper-slide">
                    <div class="slidemak"></div>
                    <img class="sp" src="<?php echo $uri; ?>/img/slide_04.png" alt="">
                    <img class="pc" src="<?php echo $uri; ?>/img/pc_slide_04.png" alt="">
                    <div class="slideText">
                        <span>04/CockPit×コーチング企業</span>
                        <div class="slideTextBg">
                            <p>“世界初” コーチング企業との</p>
                        </div>
                        <div class="slideTextBg">
                            <p>アラインアンスに特化した人材会社</p>
                        </div>
                    </div>
                    <div class="slideInnerBtn">
                        <span>キャリアの実現までコミットしたコーチングを共に作り出す</span>
                        <a class="btn" href="<?php echo home_url("/coaching/") ?>">
                            サービスを見る
                            <img src="<?php echo $uri; ?>/img/btn_arrow.svg" alt="">
                        </a>
                    </div>
                </div>

            </div>
            <div class="swiper-pagination"></div>

        </div>

        <div class="fvSlideBtn fbf pc">
            <a href="<?php echo home_url("/recruit/") ?>" class="fvSlideBtnList slideActive">
                <p>01.転職支援</p>
                <svg class="whiteArrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                    <g>
                        <path class="cls-1"
                            d="M16,0C7.16,0,0,7.16,0,16s7.16,16,16,16,16-7.16,16-16S24.84,0,16,0Zm-5.72,24.4c-.08,.06-.18,.08-.28,.08-.16,0-.32-.08-.42-.22-.15-.23-.09-.54,.14-.69l11.37-7.57-11.37-7.57c-.23-.15-.29-.46-.14-.69,.15-.23,.46-.29,.69-.14l12.63,8.4-12.63,8.4Z" />
                    </g>
                </svg>
            </a>
            <a href="<?php echo home_url("/engineer/") ?>" class="fvSlideBtnList">
                <p>02.エンジニア×革新</p>
                <svg class="whiteArrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                    <g>
                        <path class="cls-1"
                            d="M16,0C7.16,0,0,7.16,0,16s7.16,16,16,16,16-7.16,16-16S24.84,0,16,0Zm-5.72,24.4c-.08,.06-.18,.08-.28,.08-.16,0-.32-.08-.42-.22-.15-.23-.09-.54,.14-.69l11.37-7.57-11.37-7.57c-.23-.15-.29-.46-.14-.69,.15-.23,.46-.29,.69-.14l12.63,8.4-12.63,8.4Z" />
                    </g>
                </svg>
            </a>
            <a href="<?php echo home_url("/agancy/") ?>" class="fvSlideBtnList">
                <p>03.人材派遣</p>
                <svg class="whiteArrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                    <g>
                        <path class="cls-1"
                            d="M16,0C7.16,0,0,7.16,0,16s7.16,16,16,16,16-7.16,16-16S24.84,0,16,0Zm-5.72,24.4c-.08,.06-.18,.08-.28,.08-.16,0-.32-.08-.42-.22-.15-.23-.09-.54,.14-.69l11.37-7.57-11.37-7.57c-.23-.15-.29-.46-.14-.69,.15-.23,.46-.29,.69-.14l12.63,8.4-12.63,8.4Z" />
                    </g>
                </svg>
            </a>
            <a href="<?php echo home_url("/coaching/") ?>" class="fvSlideBtnList">
                <p>04.CockPit × <br>コーチング企業</p>
                <svg class="whiteArrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                    <g>
                        <path class="cls-1"
                            d="M16,0C7.16,0,0,7.16,0,16s7.16,16,16,16,16-7.16,16-16S24.84,0,16,0Zm-5.72,24.4c-.08,.06-.18,.08-.28,.08-.16,0-.32-.08-.42-.22-.15-.23-.09-.54,.14-.69l11.37-7.57-11.37-7.57c-.23-.15-.29-.46-.14-.69,.15-.23,.46-.29,.69-.14l12.63,8.4-12.63,8.4Z" />
                    </g>
                </svg>
            </a>
        </div>

    </section>

    <section class="fvBottom">
        <div class="CompanyLogo">
            <!-- Slider main container -->
            <div class="swiper logoSwiper-a">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper logoSwiper">
                    <!-- Slides -->
                    <div class="swiper-slide logoSwiperSlide"><img src="<?php echo $uri; ?>/img/com_logo_1_1.svg"
                            alt=""></div>
                    <div class="swiper-slide logoSwiperSlide"><img src="<?php echo $uri; ?>/img/com_logo_1_2.svg"
                            alt=""></div>
                    <div class="swiper-slide logoSwiperSlide"><img src="<?php echo $uri; ?>/img/com_logo_1_3.svg"
                            alt=""></div>
                    <div class="swiper-slide logoSwiperSlide"><img src="<?php echo $uri; ?>/img/com_logo_1_4.svg"
                            alt=""></div>
                    <div class="swiper-slide logoSwiperSlide"><img src="<?php echo $uri; ?>/img/com_logo_1_5.svg"
                            alt=""></div>
                    <div class="swiper-slide logoSwiperSlide"><img src="<?php echo $uri; ?>/img/com_logo_1_6.svg"
                            alt=""></div>
                    <div class="swiper-slide logoSwiperSlide"><img src="<?php echo $uri; ?>/img/com_logo_1_7.svg"
                            alt=""></div>
                    <div class="swiper-slide logoSwiperSlide"><img src="<?php echo $uri; ?>/img/com_logo_1_8.svg"
                            alt=""></div>
                    <div class="swiper-slide logoSwiperSlide"><img src="<?php echo $uri; ?>/img/com_logo_1_9.svg"
                            alt=""></div>
                    <div class="swiper-slide logoSwiperSlide"><img src="<?php echo $uri; ?>/img/com_logo_1_10.svg"
                            alt=""></div>
                    <div class="swiper-slide logoSwiperSlide"><img src="<?php echo $uri; ?>/img/com_logo_2_1.svg"
                            alt=""></div>
                    <div class="swiper-slide logoSwiperSlide"><img src="<?php echo $uri; ?>/img/com_logo_2_2.svg"
                            alt=""></div>
                    <div class="swiper-slide logoSwiperSlide"><img src="<?php echo $uri; ?>/img/com_logo_2_3.svg"
                            alt=""></div>
                    <div class="swiper-slide logoSwiperSlide"><img src="<?php echo $uri; ?>/img/com_logo_2_4.svg"
                            alt=""></div>
                    <div class="swiper-slide logoSwiperSlide"><img src="<?php echo $uri; ?>/img/com_logo_2_5.svg"
                            alt=""></div>
                    <div class="swiper-slide logoSwiperSlide"><img src="<?php echo $uri; ?>/img/com_logo_2_7.svg"
                            alt=""></div>
                    <div class="swiper-slide logoSwiperSlide"><img src="<?php echo $uri; ?>/img/com_logo_2_8.svg"
                            alt=""></div>
                    <div class="swiper-slide logoSwiperSlide"><img src="<?php echo $uri; ?>/img/com_logo_2_9.svg"
                            alt=""></div>
                    <div class="swiper-slide logoSwiperSlide"><img src="<?php echo $uri; ?>/img/com_logo_2_10.svg"
                            alt=""></div>
                </div>
            </div>
        </div>
    </section>

</main>


<script src="https://code.jquery.com/jquery-3.6.2.min.js"
    integrity="sha256-2krYZKh//PcchRtd+H+VyyQoZ/e3EcrkxhM8ycwASPA=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/script.js"></script>
<script>
// logo loop swiper
const slideLength = document.querySelectorAll(".logoSwiperSlide").length;

const logoSwiper_a = new Swiper(".logoSwiper-a", {
  slidesPerView: "auto",
  allowTouchMove: false,
  loop: true,
  autoplay: {
    delay: 0,
    disableOnInteraction: false,
  },
  speed: 4000,
});

</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js"></script>
<?php wp_footer(); ?>
</body>

</html>