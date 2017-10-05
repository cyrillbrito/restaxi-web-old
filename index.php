<?php
$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
switch ($lang){
    case "pt":
        header('Location: pt.html');
        break;
    case "fr":
        header('Location: fr.html');
        break;
    case "en":
        header('Location: en.html');
        break;        
    default:
        header('Location: en.html');
        break;
}
?>