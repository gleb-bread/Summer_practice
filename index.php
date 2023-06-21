<?php 
    include_once('./connections/core.php');
    include_once('./connections/models.php');
    include_once('./connections/controllers.php');
    include_once('./connections/view.php');


    $dir = __DIR__;
    session_start();
    if(!isset($_COOKIE['id_session'])){
        $_SESSION['id_session'] = uniqid();
        setcookie('id_session', $_SESSION['id_session'], 0, '/');
    } else{
        $_SESSION['id_session'] = $_COOKIE['id_session'];
    }

    $url = $_GET['url'];
    $segment = explode('/', $url);
    $controll_name = ucfirst(array_shift($segment)) . 'Controller';
    if(class_exists($controll_name)){
        $controller = new $controll_name();
        $controller->Action();
    } else {
        $errorController = new ErrorController();
        $errorController->Action();
    }
    
?>