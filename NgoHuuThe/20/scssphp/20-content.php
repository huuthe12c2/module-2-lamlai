<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

</div>
<div class="type-20">
    <div class="container ">
        <div class="row">
            <div class="col-md-6">
                <div class="content-business">
                    <h2>Looking for business solutions?</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="read-more">
                    <button class="btn-action">Read More <i class="fa fa-arrow-right" aria-hidden="true"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>