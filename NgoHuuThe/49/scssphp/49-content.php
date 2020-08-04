<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

</div>
<div class="type-49">
    <div class="container">
        <div class="benner-partners">
            <div class="title-parners">
                <h2>Parners</h2>
            </div>
            <div class="conten-parners">
                <div class="desc-partners">
                    <p>Sanbro help clients worldwide stay ahead of the curve,
                        solve business challenges and navigate a new era in the financial services landscape.</p>
                </div>
                <div class="field-partners">
                    <div class="row">
                        <div class="col-md-4">
                            <img src='./images/partners-1.jpg' class="img-fluid img-slide" />
                        </div>
                        <div class="col-md-8">
                            <div class="title">
                                <a href="#">
                                    Envato Company </a> </div>
                            <div class="info">
                                <span class="category">Theme &amp; Marketing Consulting,</span>
                                <span class="address">Victoria 8007 Australia</span>
                            </div>
                            <div class="content">
                                <p>Envato is proudly based in Melbourne, Australia, but our people and community
                                    live and work from all over the world.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>