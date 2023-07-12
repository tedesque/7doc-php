<?php

$controller = new Controller;

$page = $_GET['page']??'login';

switch ($page) {
    case 'login': 
        $controller->do_Login();
        break;
    case 'register':
        $controller->do_Register();
        break;
    default:
        $controller->do_Not_Found();
        break;    
    }