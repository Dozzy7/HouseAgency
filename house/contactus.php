<?php
ob_start(); 
require 'includes/db.connection.php';
?>
<!doctype html>
<html class="no-js" lang="">
    <?php include 'templates/head.php';?>

    <body>

      <!---------------- Header ---------------->
     <?php include 'templates/header.php';?>

    <!----------------  backgroundimage ---------------->
    <?php include 'templates/backgroundimage.php';?>

     <!----------------  ---------------->
     <section>
         <div class="container">
             <div class="row">
                 <div class="col-sm-3">
                 <img src="slider1" alt="">
                 <p>Raydine</p>
                 <p>Computer Science 2013</p>
                 <p>15931879212 or raydine@yahoo.com</p>


                 </div>
             </div>
         </div>
     </section>
     
    <!---------------- footer ---------------->
<?php include 'templates/footer.php';?>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="js/main.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
