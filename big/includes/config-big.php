<?php

/*
portal-config.php

Used to store all of our WEB120 configuration information

*/

//echo basename($_SERVER['PHP_SELF']);
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;

//die;

switch(THIS_PAGE){
    
    case 'index.php':
        $title = "Home";
        //$logo = 'fa-pencil-square-o';
        $pageID = 'Client Questionnaire';
    break;
        
    case 'flexbox.php':
        $title = "Flexbox";
        //$logo = 'fa-pencil-square-o';
        $pageID = 'Flexbox';
    break;
        
    case 'gallery.php':
        $title = "LightBox";
        //$logo = 'fa-pencil-square-o';
        $pageID = 'Gallery';
    break;

    case 'map.php':
        $title = "Google Maps";
        //$logo = 'fa-pencil-square-o';
        $pageID = 'Maps';
    break;


    case 'calendar.php':
        $title = "Google Calendar";
        //$logo = 'fa-pencil-square-o';
        $pageID = 'Calendar';
    break;

        
    case 'youtube.php':
        $title = "Google Youtube Videos";
        //$logo = 'fa-pencil-square-o';
        $pageID = 'Google Youtube Video';
    break;
        
    case 'shoppingcart.php':
        $title = "Shopping Carts";
        //$logo = 'fa-pencil-square-o';
        $pageID = 'Shopping Carts';
    break;
        
    case 'siteapp.php':
        $title = "Responsive vs. Mobile";
        //$logo = 'fa-pencil-square-o';
        $pageID = 'Responsive vs. Mobile';
    break;
        
    default:
        $title = THIS_PAGE;
        $logo = '';//no icon by default 
        $pageID = 'Welcome';       
}



?>


           