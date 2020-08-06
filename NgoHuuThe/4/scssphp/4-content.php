<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

</div>
<div class="type-4">
<div class="benner-header">
                <h2 class="Title-benner">What are you looking for ?</h2>
                <div class="desc-benner">Explore restaurants, bars, and cafés by locality</div>
                <form class="form-benner">
                    <div class="row">
                        <div class="col-md-3">
                            <input class="single-text inp-title" type="text" placeholder="Title"></input>
                        </div>
                        <div class="col-md-3">
                            <div class="dropdown-cate single-text">
                                <a  class="navbar-brand btn-imenu" href="#">All Categories<i class="fa fa-chevron-down size-chevron" aria-hidden="true"></i></a>
                                <div class="dropdown-menu" >
                                    <a class="dropdown-item item-menu" href="#">Home-Map</a>
                                    <a class="dropdown-item item-menu" href="#">Home-Videos</a>
                                    <a class="dropdown-item item-menu" href="#">Home-Slider</a>
                                </div>
                               
                            </div>
                        </div>
                        <div class="col-md-3" >
                            <div class="dropdown-cate single-text">
                                <a  class="navbar-brand btn-imenu" href="#">All Locations<i class="fa fa-chevron-down size-chevron" aria-hidden="true"></i></a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item item-menu" href="#">Home-Map</a>
                                    <a class="dropdown-item item-menu" href="#">Home-Videos</a>
                                    <a class="dropdown-item item-menu" href="#">Home-Slider</a>
                                </div>
                               
                            </div>
                        </div>
                        <div class="col-md-3 apply">
                            <button class="single-apply">Apply</button>
                        </div>

                    </div>
                </form>
                <div class="column-content"><ul>
                    <li class="most">Most Searches</li>
                    <li class="bd-column-content"><a href="#">Beautiful</a></li>
                    <li class="bd-column-content"><a href="#">Bars &amp; Pubs</a></li>
                    <li class="bd-column-content"><a href="#">Shopping</a></li>
                    <li class="bd-column-content"><a href="#">Hotels</a></li>
                </ul></div>
            </div>

</div>