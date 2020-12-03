<?php
require 'vendor/autoload.php';

// use Michelf\Markdown;

// $my_text="tibaredha ## Titre de niveau 2";

// $my_html = Markdown::defaultTransform($my_text);

// echo $my_html;

// require 'app/helper/form.php';

// use app\helper\form as tiba;

// tiba::input();


use app\helper\Cryptage as redha;

$data="amranemimi";

echo "<br>";
echo redha::encrypt($data);echo "<br>";
echo redha::decrypt(redha::encrypt($data))
?>