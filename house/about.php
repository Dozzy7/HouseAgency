<?php
ob_start(); 
require 'includes/db.connection.php';
?>
<!doctype html>
<html class="no-js" lang="">
    
    <?php include "templates/head.php";?>

<body>

      <!---------------- Header ---------------->
    <?php include "templates/header.php";?> 


    <!----------------  Body ---------------->
    <section id="about" class="text-center">
        <h2>  We’re the UK’s largest property portal.  </h2>
    </section>
    <article>
        Our aim is to empower the Chinas’s decisions around property. 
        Our sophisticated, yet simple, property search platform 
        makes it easy for home hunters to find their ‘happy’.<br>
        Raydines plc floated on the London Stock Exchange on 15 March 2006.
    </article>




    <!---------------- Footer ---------------->
    <?php include 'templates/footer.php';?>



        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
        <script src="js/main.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
