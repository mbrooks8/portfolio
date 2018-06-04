<!DOCTYPE html>
<html>
    <head>
        <title>Michael's Portfolio</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
        <link rel="stylesheet" type="text/css"  href="./assets/css/hestia.css" async>
        <link rel="icon" href="../assets/img/logo.png">
        <link rel="manifest" href="./manifest.json">
        <meta name="theme-color"  content="#00CC99">
        <meta name="description" content="Hey! This is my porfolio! Give me a job please.">
        <link rel="icon" href="./assets/img/logo.png">
        <meta name="author" content="Michael Brooks">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" defer/>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script>
            if ('serviceWorker' in navigator) {
                window.addEventListener('load', function() {
                    navigator.serviceWorker.register('./sw.js').then(function(registration) {
                        // Registration was successful
                        console.log('ServiceWorker registration successful with scope: ', registration.scope);
                    }, function(err) {
                        // registration failed :(
                        console.log('ServiceWorker registration failed: ', err);
                    });
                });
            }
        </script>
    </head>
    <body>


        <!--Side Navigation Bar-->
        <div class="sidebar" id="side">
            <div class="sideBody">
                <ul >
                    <li><a href="./login" >Log In</a></li>
                    <!--<li><a href="./index.php">Home</a></li>
<li><a href="./projects.php">Projects</a></li>
<li><a href="./donate.php">Donate</a></li>-->
                </ul>
            </div>
        </div>

        <div class="site-content" style="" >
            <!--Top Navigation Bar-->
            <nav class="fixed">
                <div class="container">
                    <div class="nav-wrapper">
                        <a href="./index" class="logo"><img src="./assets/img/logo.svg" style="height:100%;" alt="Logo"></a>
                        <ul class="left hide-on-med-and-down">
                            <li><a class="black-text" href="./index.php">Michael's Portfolio</a></li>
                            <li><a class="black-text" href="./projects.php">Projects</a></li>
                            <li><a class="black-text" href="./donate.php">Donate</a></li>
                        </ul>
                        <ul class="right">
                            <li><a href="./login" class="black-text">Log In</a></li>
                            <!--this should be a modal or it could be a page idk-->
                            <li style="padding-left:10px;"><a href="./demo" class="button raised border">Request a Demo</a></li>
                        </ul>
<!--                        <ul class="right hide-on-large-only">
                            <li><a class="sideToggle"><i class="fa fa-bars blue-text" aria-hidden="true"></i></a></li>

                        </ul>-->
                    </div>
                </div>
            </nav>
        </div>
