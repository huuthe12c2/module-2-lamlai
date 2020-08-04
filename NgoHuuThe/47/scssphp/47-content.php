<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

</div>
<div class="type-47">
<div class="container">
            <div class="row skil-member">
                <div class="col-md-4">
                    <div class="shadow-br">
                    <div class="hover-img">
                            <img src='./images/team-3.jpg' class="img-fluid img-bg" />
                            <div class="dropdown-icon">
                                <div class="dropdown-menu1" >
                                    <a class="dropdown-item item-menu" href="#"><i class="fa fa-facebook-official fa-icon" aria-hidden="true"></i></a>
                                    <a class="dropdown-item item-menu" href="#"><i class="fa fa-google-plus-official fa-icon" aria-hidden="true"></i></a>
                                    <a class="dropdown-item item-menu" href="#"><i class="fa fa-twitter-square fa-icon" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <h4 class="name-member">Marko Stoiber</h4>
                        <div class="cv">Supervisor</div>
                        <div class="labels">
                            <span>Code</span>
                            <span>80%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                <span></span>
                            </div>
                        </div>
                        <div class="labels mg-skill">
                            <span>Drupal</span>
                            <span>90%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bar-2" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                <span></span>
                            </div>
                        </div>
                        <div class="labels mg-skill">
                            <span>Opencart</span>
                            <span>75%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bar-3" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                <span></span>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="col-md-4">
                    <div class="shadow-br">
                        <div class="hover-img">
                            <img src='./images/team-3.jpg'  class="img-fluid" />
                            <div class="dropdown-icon">
                                <div class="dropdown-menu1" >
                                    <a class="dropdown-item item-menu" href="#"><i class="fa fa-facebook-official fa-icon" aria-hidden="true"></i></a>
                                    <a class="dropdown-item item-menu" href="#"><i class="fa fa-google-plus-official fa-icon" aria-hidden="true"></i></a>
                                    <a class="dropdown-item item-menu" href="#"><i class="fa fa-twitter-square fa-icon" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <h4 class="name-member">Marko Stoiber</h4>
                        <div class="cv">Supervisor</div>
                        <div class="labels">
                            <span>Design</span>
                            <span>80%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                <span></span>
                            </div>
                        </div>
                        <div class="labels mg-skill">
                            <span>Wordpress</span>
                            <span>90%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bar-2" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                <span></span>
                            </div>
                        </div>
                        <div class="labels mg-skill">
                            <span>Drupal</span>
                            <span>75%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bar-3" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                <span></span>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="shadow-br">
                    <div class="hover-img">
                            <img src='./images/team-3.jpg'  class="img-fluid" />
                            <div class="dropdown-icon">
                                <div class="dropdown-menu1" >
                                    <a class="dropdown-item item-menu" href="#"><i class="fa fa-facebook-official fa-icon" aria-hidden="true"></i></a>
                                    <a class="dropdown-item item-menu" href="#"><i class="fa fa-google-plus-official fa-icon" aria-hidden="true"></i></a>
                                    <a class="dropdown-item item-menu" href="#"><i class="fa fa-twitter-square fa-icon" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <h4 class="name-member">Marko Stoiber</h4>
                        <div class="cv">Supervisor</div>
                        <div class="labels">
                            <span>Design</span>
                            <span>80%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                <span></span>
                            </div>
                        </div>
                        <div class="labels mg-skill">
                            <span>Drupal</span>
                            <span>90%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bar-2" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                <span></span>
                            </div>
                        </div>
                        <div class="labels mg-skill">
                            <span>Code</span>
                            <span>75%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bar-3" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
</div>