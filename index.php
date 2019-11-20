<?php

require_once("vendor/autoload.php");

$loader = new \Twig_Loader_Filesystem(__DIR__.'/templates');
$twig = new \Twig_Environment($loader);


$lorem = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. ' .
    'Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae?' .
    ' Reprehenderit soluta, eos quod consequuntur itaque. Nam.';

echo $twig->render('index.html.twig',
    [
        'titleBody' =>  'Start Twig Example',
        'myName'    =>  'Alexandre Matheus',
        'loremIpsum'          =>  $lorem,
    ]);
?>
