<?php
require_once 'consts.php';
require_once 'functions.php';


$data = get_data(API_URL);
$untilMessage = get_until_message($data["days_until"]);
/*<pre style="font-size: 10px; overflow:scroll; height:200px;">
        <?php var_dump($data); ?>
    </pre>
    Poner esto en el body para que aparezca el array asociativo*/


?>
<?php require 'sections/head.php' ?>
<?php require 'templates/main.php' ?>
<?php require 'sections/styles.php' ?>
