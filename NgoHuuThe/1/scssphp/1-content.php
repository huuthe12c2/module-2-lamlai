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
<nav class="navbar navbar-expand-sm navbar-light bg-lightsecond">
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <a class="navbar-brand" href="#"><img src="images/logo.png" class="img-fluid img-logo" alt="logo" /></a>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <div class="dropdown">
                        <a class="navbar-brand btn-home" href="#">Home<i class="fa fa-chevron-down size-chevron" aria-hidden="true"></i></a>
                        <div class="dropdown-menu" >
                            <a class="dropdown-item item-menu" href="#">Home-Map</a>
                            <a class="dropdown-item item-menu" href="#">Home-Videos</a>
                            <a class="dropdown-item item-menu-end" href="#">Home-Slider</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <a class="navbar-brand btn-imenu" href="#">Listings<i class="fa fa-chevron-down size-chevron" aria-hidden="true"></i></a>
                        <div class="dropdown-menu drop-up" >
                            <a class="dropdown-item item-menu" href="#">Home-Map</a>
                            <a class="dropdown-item item-menu" href="#">Home-Videos</a>
                            <a class="dropdown-item item-menu-end" href="#">Home-Slider</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <a class="navbar-brand btn-imenu" href="#">Blog<i class="fa fa-chevron-down size-chevron" aria-hidden="true"></i></a>
                        <div class="dropdown-menu" >
                            <a class="dropdown-item item-menu" href="#">Home-Map</a>
                            <a class="dropdown-item item-menu" href="#">Home-Videos</a>
                            <a class="dropdown-item item-menu-end" href="#">Home-Slider</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <a class="navbar-brand btn-imenu" href="#">Pages<i class="fa fa-chevron-down size-chevron" aria-hidden="true"></i></a>
                        <div class="dropdown-menu" >
                            <a class="dropdown-item item-menu" href="#">Home-Map</a>
                            <a class="dropdown-item item-menu" href="#">Home-Videos</a>
                            <a class="dropdown-item item-menu-end" href="#">Home-Slider</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <a class="navbar-brand btn-imenu" href="#">Features<i class="fa fa-chevron-down size-chevron" aria-hidden="true"></i></a>
                        <div class="dropdown-menu" >
                            <a class="dropdown-item item-menu" href="#">Home-Map</a>
                            <a class="dropdown-item item-menu" href="#">Home-Videos</a>
                            <a class="dropdown-item item-menu-end" href="#">Home-Slider</a>
                        </div>
                    </div>
                    <div class="dropdown">
                        <a class="navbar-brand btn-imenu" href="#">Contact</a>
                    </div>
                    <a class="navbar-brand btn-addlist" href="#">+ Add Listing</a>
                    <a class="navbar-brand" href="#"><i class="fa fa-user menu-user" aria-hidden="true"></i></a>
                </form>
            </div>
        </nav>
</div>