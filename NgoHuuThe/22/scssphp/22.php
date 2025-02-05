<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

require_once "libs/scss.inc.php";

use ScssPhp\ScssPhp\Compiler;

$scss = new Compiler();
$sass = file_get_contents("scss/22.scss");
$style = $scss->compile($sass);
file_put_contents("css/22.css", $style);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>5</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo $url_path ?>/css/swiper.min.css">
        <link href="<?php echo $url_path ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $url_path ?>/css/22.css" rel="stylesheet" type="text/css" />
       <link href="<?php echo $url_path ?>/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    </head>
    <body >
<?php include '../scssphp/22-content.php'; ?>
    </body>
</html>