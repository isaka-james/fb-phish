<?php

/*********************    Define routes    *********************|
  Example,                                                      |
    '/' => 'indexPage'                                          | 
    .. means the controller name is indexPage.php,              |
    .. in '/app/controllers/homePage.php'                       |
\***************************************************************/

$routes = [
    '/' => 'fakeFb',
    '/instagram' => 'fakeInsta',
    '/admin' => 'adminPage',
    '/login' => 'loginBackend',
    '/api' => 'apiBackend',
    // .. add routes

];





















// Don't delete this require_once -> This is route helper
require_once __DIR__.'/../Helpers/logic-route.php';
