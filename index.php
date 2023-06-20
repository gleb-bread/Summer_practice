<?php 
    $dir = __DIR__;
    $dir . '/public/css/picture/coffe1.png';
    session_start();
    if(!isset($_COOKIE['id_session'])){
        $_SESSION['id_session'] = uniqid();
        setcookie('id_session', $_SESSION['id_session'], 0, '/');
    } else{
        $_SESSION['id_session'] = $_COOKIE['id_session'];
    }
    $url = $_GET['url'] ?? 'main';
    $segment = explode('/', $url);
    $controll_name = ucfirst(array_shift($segment)) . 'Controller';
    $controller = new $controll_name();
    if(isset($controller)){
        $controller->Action();
    } else {
        
    }
?>