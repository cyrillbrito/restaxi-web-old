<?php
$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
switch ($lang){
    case "pt":
        header('Location: pt');
        break;
    case "fr":
        header('Location: fr');
        break;
    case "en":
        header('Location: en');
        break;        
    default:
        header('Location: en');
        break;
}
?>