<?php include 'includes/config-portal.php';?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?=$title?></title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width initial-scale=1" />
    <meta name="robots" content="noindex,nofollow" />
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text|Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Jacques+Francois" rel="stylesheet">
    <!--<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="css/nav.css" />
    <link rel="stylesheet" href="css/portal.css" />
    <link rel="stylesheet" href="css/form.css" />
    <link rel="stylesheet" href="css/tables.css" />
    <script src="https://use.fontawesome.com/4550dfe2e1.js"></script>

</head>
    
<body>
<header>
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
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.menu').click(function(){
            $('ul').toggleClass('active');
          })
        })
    </script>
    <div class="header">
        <a href="index.php">
            <div class="content-wrap">
                <h1>Tran Duong</h1>
                <h2>Developer</h2>
            </div>
        </a>
    </div>
</header>
