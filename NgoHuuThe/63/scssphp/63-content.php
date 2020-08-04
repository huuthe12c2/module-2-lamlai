<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

</div>
<div class="type-63">
    <div class="container hight">
        <div class="row mr-row">
            <div class="col-md-4">
                <div class="border-hight">
                    <div class="icon-contai">
                        <i class="fa fa-tachometer" aria-hidden="true" ></i>
                    </div>
                    <div class="title-hight">
                        <div class="title">High Performance</div>
                        <p>Extreme attention to detail is the essence of Colin's unique design concepts.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="border-hight">
                    <div class="icon-contai">
                        <i class="fa fa-tachometer" aria-hidden="true" ></i>
                    </div>
                    <div class="title-hight">
                        <div class="title">High Performance</div>
                        <p>Extreme attention to detail is the essence of Colin's unique design concepts.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="border-hight">
                    <div class="icon-contai">
                        <i class="fa fa-tachometer" aria-hidden="true" ></i>
                    </div>
                    <div class="title-hight">
                        <div class="title">High Performance</div>
                        <p>Extreme attention to detail is the essence of Colin's unique design concepts.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>