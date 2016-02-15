<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Clock.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('index.html.twig');
    });

    $app->get("/angle", function() use ($app) {
        $my_Clock = new Clock;
        $results = $my_Clock->angleBetweenHands($_GET['time']);
        return $app['twig']->render('index.html.twig', array('result' => $results));
    });

    return $app;
?>
