<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------
| Here is where you can register web routes for your application.
| 
| Define routes for handling question management functionality.
|
*/

// General Routes
$router->get('/', 'Auth');
$router->get('/home', 'Home');

// Authentication routes
$router->group('/auth', function() use ($router){
    $router->match('/register', 'Auth::register', ['POST', 'GET']);
    $router->match('/login', 'Auth::login', ['POST', 'GET']);
    $router->get('/logout', 'Auth::logout');
    $router->match('/password-reset', 'Auth::password_reset', ['POST', 'GET']);
    $router->match('/set-new-password', 'Auth::set_new_password', ['POST', 'GET']);
});

$router->get('/exam_dashboard', 'ExamController');
$router->get('/take_exam', 'TakeExam');
$router->get('/exam_history', 'ExamHistory');
$router->get('/profile_management', 'ProfileManagement');