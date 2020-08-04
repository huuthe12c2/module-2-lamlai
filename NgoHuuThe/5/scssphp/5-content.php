<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

</div>
   <div class="type-5">
   <div class="container">

<div class="mg-bg">
    <div class="gsc-heading ">
        <h2 class="title"><span>Featured Categories</span></h2>
        <div class="title-desc"><p>What do you need to find?</p>
        </div>
    </div>
    <div class="hover-slide-next">
        <div class="row">
            <div class="col-md-4">
                <div class="slide-img">
                    <div class="img-scale">
                        <img src='./images/listing-9.jpg' class="img-slide" />
                    </div>
                    <div class="cat-icon"><i class="fa fa-coffee" aria-hidden="true"></i></div>
                    <div class="name-slide">
                        <a href="#" class="new-post">Food & Drink</a>
                        <div class="desc-post">Enjoy the best places in…</div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="slide-img">
                    <div class="img-scale">
                        <img src='./images/listing-7.jpg' class="img-slide" />
                    </div>
                    <div class="cat-icon"><i class="fa fa-coffee" aria-hidden="true"></i></div>
                    <div class="name-slide">
                        <a href="#" class="new-post">Food & Drink</a>
                        <div class="desc-post">Enjoy the best places in…</div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="slide-img">
                    <div class="img-scale">
                        <img src='./images/listing-9.jpg' class="img-slide" />
                    </div>
                    <div class="cat-icon"><i class="fa fa-coffee" aria-hidden="true"></i></div>
                    <div class="name-slide">
                        <a href="#" class="new-post">Food & Drink</a>
                        <div class="desc-post">Enjoy the best places in…</div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <div class="hover-slide-next">
        <div class="row">
            <div class="col-md-4">
                <div class="slide-img">
                    <div class="img-scale">
                        <img src='./images/listing-7.jpg' class="img-slide" />
                    </div>
                    <div class="cat-icon"><i class="fa fa-coffee" aria-hidden="true"></i></div>
                    <div class="name-slide">
                        <a href="#" class="new-post">Food & Drink</a>
                        <div class="desc-post">Enjoy the best places in…</div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="slide-img">
                    <div class="img-scale">
                        <img src='./images/listing-9.jpg' class="img-slide" />
                    </div>
                    <div class="cat-icon"><i class="fa fa-coffee" aria-hidden="true"></i></div>
                    <div class="name-slide">
                        <a href="#" class="new-post">Food & Drink</a>
                        <div class="desc-post">Enjoy the best places in…</div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="slide-img">
                    <div class="img-scale">
                        <img src='./images/listing-7.jpg' class="img-slide" />
                    </div>
                    <div class="cat-icon"><i class="fa fa-coffee" aria-hidden="true"></i></div>
                    <div class="name-slide">
                        <a href="#" class="new-post">Food & Drink</a>
                        <div class="desc-post">Enjoy the best places in…</div>
                    </div>
                </div>
            </div>
        </div>


    </div>

</div>
</div>

</div>