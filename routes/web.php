<?php
//$router->get('',[
//    'as'=>'web.home',
//    'uses'=>'HomeController@home'
//]);
$router->get('',[
    'as'=>'web.home',
    'uses'=>'HomeController@home'
]);
$router->get('/category',[
    'as'=>'web.category.index',
    'uses'=>'HomeController@getCategory'
]);
