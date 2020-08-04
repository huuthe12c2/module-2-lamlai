<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

</div>
<div class="type-62">
    <div class="container hight">
        <h2>Hightlight</h2>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
            Accusamus, doloribus. Repellendus,
            <span class="bg-theme-white">Aliquam iaculis lobortis</span>mollitia voluptates odio
            saepe aliquam maiores est officia illum,
            <span class="bg-theme-black">Aliquam iaculis lobortis</span>velit quidem harum,
            exercitationem enim rem ad. Maxime, unde culpa.</p>
        <h2>Dropcap</h2>
        <div class="row desc-dropcap">
            <div class="col-md-6 col-sm-12 col-xs-12"><span class="dropcap dropcap-default">A</span> enean ac dignissim
                nibh. Suspendisse sapien. Donec in faucibus volutpat, velit in leo ultrices posuere ante a nisl. Sed nec
                magna. Donec enim luctus diam eu mauris. Pellentesque facilisis. Nulla augue a. orem ipsum dolor sit
                amet, consectetur adipiscing elit. Aliquam iaculis lobortis commodo. Vestibulum ac lorem id enim viverra
                estibulum ac. Pellentesque rhoncus vitae lorem vitae iaculis. Mauris sit amet feugiat lorem id enim
                viverra posuere</div>
            <div class="col-md-6 col-sm-12 col-xs-12"><span class="dropcap border-dropcap">A</span> enean ac dignissim
                nibh. Suspendisse sapien. Donec in faucibus volutpat, velit in leo ultrices posuere ante a nisl. Sed nec
                magna. Donec enim luctus diam eu mauris. Pellentesque facilisis. Nulla augue a. orem ipsum dolor sit
                amet, consectetur adipiscing elit. Aliquam iaculis lobortis commodo. Vestibulum ac lorem id enim viverra
                estibulum ac. Pellentesque rhoncus vitae lorem vitae iaculis. Mauris sit amet feugiat lorem id enim
                viverra posuere</div>
        </div>
        <div class="row desc-dropcap">
            <div class="col-md-6 col-sm-12 col-xs-12"><span class="dropcap bg-dropcap">A</span> enean ac dignissim nibh.
                Suspendisse sapien. Donec in faucibus volutpat, velit in leo ultrices posuere ante a nisl. Sed nec
                magna. Donec enim luctus diam eu mauris. Pellentesque facilisis. Nulla augue a. orem ipsum dolor sit
                amet, consectetur adipiscing elit. Aliquam iaculis lobortis commodo. Vestibulum ac lorem id enim viverra
                estibulum ac. Pellentesque rhoncus vitae lorem vitae iaculis. Mauris sit amet feugiat lorem id enim
                viverra posuere</div>
            <div class="col-md-6 col-sm-12 col-xs-12"><span class="dropcap circle-dropcap">A</span> enean ac dignissim
                nibh. Suspendisse sapien. Donec in faucibus volutpat, velit in leo ultrices posuere ante a nisl. Sed nec
                magna. Donec enim luctus diam eu mauris. Pellentesque facilisis. Nulla augue a. orem ipsum dolor sit
                amet, consectetur adipiscing elit. Aliquam iaculis lobortis commodo. Vestibulum ac lorem id enim viverra
                estibulum ac. Pellentesque rhoncus vitae lorem vitae iaculis. Mauris sit amet feugiat lorem id enim
                viverra posuere</div>
        </div>
    </div>
</div>