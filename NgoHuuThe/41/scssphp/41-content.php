<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

</div>
<div class="type-41">
    <div class="container">
        <div class="block-views">
            <h2 class="block-title"><span>Categories</span></h2>
            <div class="block-content">
                <ul>
                    <li class="view-list-item"><a href="#">Fashion</a></li>
                    <li class="view-list-item"><a href="#">Food</a></li>
                    <li class="view-list-item"><a href="#">Lift Style</a></li>
                    <li class="view-list-item"><a href="#">Music</a></li>
                    <li class="view-list-item"><a href="#">Sport</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>