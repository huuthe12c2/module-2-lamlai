<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

</div>
<div class="type-37">
<div class="container">
            <div class="benner-comment">
                <div class="title-comment">Comment</div>
                <div class="blog-new-comment">
                    <section>
                        <div class="befor-add"></div>
                        <h5>ADD NEW COMMENT</h5>
                        <form class="form-comment">
                            <div class="your-name">
                                <label>Your name</label>
                                <input type="text" size="30" class="form-text" />
                            </div>
                            <div class="subject">
                                <label>Subject</label>
                                <input type="text" size="30" class="form-text" />
                            </div>
                            <div class="comment">
                                <label>Comment</label>
                                <div class="comment-teatare">
                                    <textarea class="text-full-textarea "  name="texttextarea" id="" cols="60" rows="5"></textarea>
                                    
                                </div>
                            </div>
                            <div class="filter-guidelines">
                                <ul>
                                    <li>You can align images (<code>data-align="center"</code>), but also videos, blockquotes, and so <a href="#" class="about-text">About text formats</a> on.</li>
                                    <li>You can caption images (<code>data-caption="Text"</code>), but also videos, blockquotes, and so on.</li>
                                </ul>
                            </div>
                            <button class="btn-action">Save</button>
                        </form>
                    </section>
                </div>
            </div>
        </div>
</div>