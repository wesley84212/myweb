<?php
function __autoload($classname){

    list($filename ,$name) = explode('_',$classname);

    $file = SERVER_ROOT.'/model/'.strtolower($filename).'.php';
    if(file_exists($file)){
        include_once($file);
    }else {
        die(strtolower($filename).' model is not found!');
    }
}

//get server all requert(GET)
$request = $_SERVER['QUERY_STRING'];
$parsed = explode('&',$request);
$getvar = array();

//get controller page name url=
$page = array_shift($parsed);  
$page = str_replace('url=','',$page);

//get GET value
foreach($parsed as $i){

    list($variable,$value) = explode('=',$i);
    $getvar[$variable]=$value;

}

if($page===''){
    $page='myweb';
}

$target = SERVER_ROOT.'/controller/'.$page.'.php';

if(file_exists($target)){

    include_once($target);
    $class = ucfirst($page).'_Controller';

    if(class_exists($class)){
        $controller = new $class;
    }else {
        die('class does not exist!');
    }

}else {
    die('page does not exist!');
}
$controller->index();
?>
