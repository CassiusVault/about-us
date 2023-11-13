<?php 
include_once('router.php');
// if($_GET['route'] == "new");
if($route == "news"){
    if(isset($_GEET['post'])){
        include_once('views/components/news-template.php');
    }else{
        include_once('views/components/layout.php');
    }
}elseif($route == "subscriptions")
{
    include_once('subscriptions-vault.php');
}
else {
    include_once('views/comingsoon.php');
    // include_once('views/components/layout.php');
}
