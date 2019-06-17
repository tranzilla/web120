<?php include 'includes/config-portal.php';?> 
<!DOCTYPE html>
<html lang="en">
	<head>
		<title><?=$title?></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width" />
		<meta name="robots" content="noindex,nofollow" />
        <!--link to google fonts -->
		<link href="https://fonts.googleapis.com/css?family=Playfair+Display|Source+Serif+Pro" rel="stylesheet" />
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/nav.css" />
		<link rel="stylesheet" href="css/form.css" />
        <script src="https://use.fontawesome.com/4550dfe2e1.js"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
	</head>	
<body>
        <nav>
            <div class="toggle">
                <i class="fa fa-bars menu" aria-hidden="true"></i>
            </div>
            <ul class="nav">
                  <?=makeLinks($nav1)?>
                <!--
                <li><a href="index.php" class="active">Home</a></li>
                <li><a href="big/index.php">BIG</a></li>
                <li><a href="aia.php">AIA</a></li>
                <li><a href="flowchart.php">Flowchart</a></li>
                <li><a href="fp/index.php">Final Project</a></li>
                <li><a href="contact.php">Contact Tran</a></li>
                -->
            </ul>
        </nav>
        
        <script>
            $(document).ready(function(){
                $('.menu').click(function(){
                $('ul').toggleClass('active');
              })
            })
        </script>

