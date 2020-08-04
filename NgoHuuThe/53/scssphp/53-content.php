<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

</div>
<div class="type-53">
<div class="expert">
            <div class="text-benner">
                <h2>We’re professionals for grow your business!</h2>
                <div class="title-desc"><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                Aenean commodo ligula eget dolor. Aenean massa.
                    Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus.</p>
                </div>
                <button class="btn-action">Read More <i class="fa fa-arrow-right" aria-hidden="true"></i></button>
                
            </div>
        </div>
</div>