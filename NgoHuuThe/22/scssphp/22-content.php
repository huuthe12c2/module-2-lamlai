<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

</div>
<div class="type-22">
    <div class="container">

        <div class="mg-bg">
            <div class="gsc-heading ">
                <div class="sub-title"><span>Expert Tips &amp; News</span></div>
                <h2 class="title"><span>Keep up to date with the latest news articles from Lozin.</span></h2>
                <div class="title-desc">
                    <p>Lorem ipsum dolor sit amet,
                        consectetur adipisicing elit, sed do eiusmod tempor incididunt .</p>
                </div>
            </div>
            <div class="hover-slide-next">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="slide-img">
                                <img src='./images/listing-7.jpg' class="img-slide" />
                                <div class="name-slide">
                                    <a href="#" class="new-post">Music</a>
                                    <div class="desc-post">Coffeeshops continue to conquer</div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="slide-img">
                                <img src='./images/listing-7.jpg' class="img-slide" />
                                <div class="name-slide">
                                    <a href="#" class="new-post">Music</a>
                                    <div class="desc-post">Coffeeshops continue to conquer</div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="slide-img">
                                <img src='./images/listing-7.jpg' class="img-slide" />
                                <div class="name-slide">
                                    <a href="#" class="new-post">Music</a>
                                    <div class="desc-post">Coffeeshops continue to conquer</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
            <!-- Swiper JS -->
            <script src="./js/swiper.min.js"></script>
            <script src="./js/22.js"></script>
            <!-- Initialize Swiper -->
        </div>
    </div>