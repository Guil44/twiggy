<?php

require_once '../vendor/autoload.php';

$products = [ 'chat1', 'chat2',
 'chat3', 'chat4', 'chat5'];

 $loader = new 
Twig\Loader\FilesystemLoader(__DIR__.'/../src/view');
$twig = new Twig\Environment($loader);
echo $twig->render('index.html.twig', [

    'products' => $products
]);