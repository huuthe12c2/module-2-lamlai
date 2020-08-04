<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

</div>
<div class="type-29">
    <div class="container">
        <div class="mg-bg">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="slide-tip">
                            <img src='./images/listing-7.jpg' class="img-fluid" />
                        </div>

                    </div>
                    <div class="swiper-slide">
                        <div class="slide-tip">
                            <img src='./images/listing-9.jpg' class="img-fluid" />
                        </div>

                    </div>
                    <div class="swiper-slide">
                        <img src='./images/listing-7.jpg' class="img-fluid" />

                    </div>
                    <div class="swiper-slide">
                        <img src='./images/listing-9.jpg' class="img-fluid" />

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Swiper JS -->
    <script src="./js/swiper.min.js"></script>
    <script src="./js/29.js"></script>
    <!-- Initialize Swiper -->
</div>