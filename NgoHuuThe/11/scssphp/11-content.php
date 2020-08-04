<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

</div>
<div class="type-11">
    <div class="expert">
        <div class="text-benner">
            <h2>Expert Tips & News</h2>
            <div class="title-desc">Checkout latest news and articles from our blog</div>
        </div>
        <div class="container">
            <div class="mg-bg">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="slide-tip">
                                <img src='./images/post-11.jpg' class="img-slide" />
                                <div class="slide-title">
                                    <a href="#">Latest Fashion Trends 2016</a>
                                </div>
                            </div>
                            
                        </div>
                        <div class="swiper-slide">
                            <div class="slide-tip">
                                <img src='./images/post-10.jpg' class="img-slide" />
                                <div class="slide-title">
                                    <a href="#">Latest Fashion Trends 2016</a>
                                </div>
                            </div>
                            
                        </div>
                        <div class="swiper-slide">
                            <div class="slide-tip">
                                <img src='./images/post-11.jpg' class="img-slide" />
                                <div class="slide-title">
                                    <a href="#">Latest Fashion Trends 2016</a>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Swiper JS -->
    <script src="./js/swiper.min.js"></script>
    <script src="./js/11.js"></script>
    <!-- Initialize Swiper -->
</div>