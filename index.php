<?php   
    // User: Adam West

$app = new Application();


$router->get('/', function(){
    return 'Hello World';
})

$app->run();