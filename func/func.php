<?php
/**
 * Created by PhpStorm.
 * User: TANG
 * Date: 2017/10/9
 * Time: 22:51
 */
function get($key){
    return empty($_GET[$key] )? '': htmlspecialchars(trim($_GET[$key]));
}

function post($key){
    return empty($_POST[$key])?'': htmlspecialchars(trim($_POST[$key]));
}

?>