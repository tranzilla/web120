<?php

//echo basename($_SERVER['PHP_SELF']);
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;

//die;

switch(THIS_PAGE){

    case 'index.php':
        $title = "Wyatt Schrepele - Professional Pilot - Photography - Banner Towing -Scenic Flights";
        $pageID = 'WYATT SCHREPEL PROFESSIONAL PILOT SERVICES';
    break;
        
    case 'contact.php':
        $title = "Contact Wyatt";
        //$logo = 'fa-pencil-square-o';
        $pageID = 'Contact Wyatt';
    break;
    
    default:
        $title = THIS_PAGE;
        $logo = '';//no icon by default 
        $pageID = 'Welcome';
        
}
$nav1['../index.php'] = "Web120";
$nav1['index.php'] = "Home";
$nav1['contact.php'] = "Contact Wyatt";

/*Function to navigate links and keep the highlight on current page*/
function makeLinks($nav1) 
{
    $myReturn = '';
    foreach($nav1 as $url => $text){
        
        if($url == THIS_PAGE){
            $myReturn .= "<li><a class=\"active\" href=\"$url\">$text</a></li>";
        }else {
            $myReturn .= "<li><a href=\"$url\">$text</a></li>";
        } 
    }
    
    return $myReturn; 
}
    








?>
