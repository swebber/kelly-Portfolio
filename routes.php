<?php

function startsWith($haystack, $needle) {
    return $needle === "" || strrpos($haystack, $needle, -strlen($haystack)) !== false;
}

function call($controller, $action) {

    $controllerFile = 'controllers/' . $controller . '_controller.php';
    $modelFile = 'models/' . $controller . '.php';

    require_once($controllerFile);

    if (file_exists($modelFile)) {
        require_once($modelFile);
    }

    // Class name MUST be the leading cap version of the controller name!!!
    $className = str_replace("-", "", ucwords($controller, "-")) . "Controller";
    //$className = ucFirst($controller) . "Controller";
    $controller = new $className;

    // switch ($controller) {
    //     case 'home':
    //         $controller = new HomeController();
    //         break;
    //     case 'pages':
    //         $controller = new PagesController();
    //         break;
    //     case 'posts':
    //         $controller = new PostsController();
    //         break;
    //     case 'terra':
    //         $controller = new TerraController();
    //         break;
    // }

    $controller->{ str_replace('-', '_', $action) }();
}

$viewFolder = 'views';
$viewPath = realpath($viewFolder);
$controllerFolder = $viewFolder . '/' . $controller;
$controllerPath = realpath($controllerFolder);
$actionFile = $controllerFolder . '/' . $action . '.php';
$actionPath = realpath($actionFile);

if (startsWith($controllerFolder, $viewFolder) && startsWith($actionPath, $controllerPath) && is_dir($controllerFolder) && is_file($actionFile)) {
    call($controller, $action);
} else {
    call('home', 'error');
}
