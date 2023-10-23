<?php 
session_start();
$route = $_GET['route'] ?? 'home';

switch($route){
    case 'home':
        $page = 'Home';
        $pageContent = file_get_contents('views/home.php');
         break;
    case 'how-it-works':
        $page = 'How does it look';
        $pageContent = file_get_contents('views/how-it-works.php');
        break;
    case 'our-team':
        $page = 'Our Team';
        $pageContent = file_get_contents('views/team.php');
        break;
    case 'contact-us':
        $page = 'Contact us';
        $pageContent = file_get_contents('views/contact-us.php');
        break;
    case 'benefits':
            $page = 'Benefits';
            $pageContent = file_get_contents('views/benefits.php');
            break;
    case 'subscriptions':
                $page = 'Subscription';
                $pageContent = file_get_contents('views/subscriptions.php');
                break;
    case 'news':

            if(isset($_GET['post'])){
                $page = 'News';
                $pageContent = file_get_contents('views/news-template.php');
                break;
            }
            else{
                $page = 'News';
                $pageContent = file_get_contents('views/news.php');
                break;
            }
            
    case 'account':
            if(!isset($_SESSION['user'])){
                header('Location: ./login');
            }else{
                $page = 'My Account';
                $pageContent = file_get_contents('views/account.php');
            }
            break;
    default:
        $page = '404';
        $pageContent = file_get_contents('views/404.php');
        break;
}