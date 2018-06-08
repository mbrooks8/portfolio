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
