<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

</div>
<div class="type-58">
<div class="container mg-contai">
      <div class="widget widget-content1">
        <div class="row">
          <div class="col-md-1">
            <div class="icon-content">
              <i class="icon fa fa-quote-left" ></i>
            </div>
          </div>
          <div class="col-md-11">
            <div class="desc-content">
              <p>I have found that, in the composition of the human body as compared with
              the bodies of animals, the organs of sense are duller and coarser. Thus, it is composed of
              less ingenious instruments, and of spaces less capacious
              for receiving the faculties of sense.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="widget widget-content2">
        <div class="row">
          <div class="col-md-1">
            <div class="icon-content">
              <i class="icon fa fa-quote-left"></i>
            </div>
          </div>
          <div class="col-md-11">
            <div class="desc-content">
              <p>I have found that, in the composition of the human body as compared with
              the bodies of animals, the organs of sense are duller and coarser. Thus, it is composed of
              less ingenious instruments, and of spaces less capacious
              for receiving the faculties of sense.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="widget widget-content3">
        <div class="row">
          <div class="col-md-1">
            <div class="icon-content">
              <i class="icon fa fa-quote-left" ></i>
            </div>
          </div>
          <div class="col-md-11">
            <div class="desc-content">
              <p>I have found that, in the composition of the human body as compared with
              the bodies of animals, the organs of sense are duller and coarser. Thus, it is composed of
              less ingenious instruments, and of spaces less capacious
              for receiving the faculties of sense.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>