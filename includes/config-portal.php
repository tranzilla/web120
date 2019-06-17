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
        $title = "Tran Duong WEB120 Portal";
        $pageID = 'Hello!';
    break;
        
    case 'contact.php':
        $title = "Contact Tran";
        //$logo = 'fa-pencil-square-o';
        $pageID = 'Let\'s Chat!';
    break;
        
    case 'aia.php':
        $title = "AIA";
        //$logo = 'fa-pencil-square-o';
        $pageID = 'Audience, Issues and Approach (AIA)';
    break;
        
    case 'flowchart.php':
        $title = "Flowchart";
        //$logo = 'fa-pencil-square-o';
        $pageID = 'Flowchart';
    break;
    
    case 'big/index.php':
        $title = "Big";
        //$logo = 'fa-pencil-square-o';
        $pageID = '';
    break;
        
    case 'fp/index.php.php':
        $title = "Final Project";
        //$logo = 'fa-pencil-square-o';
        $pageID = '';
    break;
    
    default:
        $title = THIS_PAGE;
        $logo = '';//no icon by default 
        $pageID = 'Welcome';
        
}

$nav1['index.php'] = "Home";
$nav1['big/index.php'] = "BIG";
$nav1['aia.php'] = "AIA";
$nav1['flowchart.php'] = "Flowchart";
$nav1['fp/index.php'] = "Final Project";
$nav1['contact.php'] = "Contact Tran";

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


           