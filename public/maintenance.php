<!DOCTYPE html>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Maintenance</title>

        <style>
            body {
                width:500px;
                margin:0px auto;
                text-align: center;
                color:blue;
                padding-top:40px;
                
            }
        </style>
    </head>

    <body>

        <img src="images/logo-img.svg">

        <h1><p>Sorry for the inconvenience while we are upgrading. </p>
            <p>Please revisit shortly</p>
        </h1>
        <div></div>

        <img src="images/undermaintenance.jpg"  style="height:400px;width:auto;" >

    </body>
</html>
<?php
header('HTTP/1.1 503 Service Temporarily Unavailable');
header('Status: 503 Service Temporarily Unavailable');
header('Retry-After: 3600');
?>