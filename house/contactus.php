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
                 <img src="img/slider1.jpg" alt="">
                 <p>Raydine</p>
                 <p>Computer Science 2013</p>
                 <p>15931879212 or raydine@yahoo.com</p>
                 </div>

                 <div class="col-sm-9">
                     <h3>How HotPads Started</h3>
                     
                        <p>HotPads started in 2005 in the Dupont Circle neighborhood of Washington DC.
                        Three college friends - Matt, Douglas, and John - were trying to find a place
                        to live but had little luck. Frustrated, they pooled their collective
                        resources and built a unique rentals marketplace with the first ever
                            map-based search.</p>
                        
                       <p> The HotPads team moved to San Francisco in 2011 was acquired
                        by Zillow Group in 2012. We are currently located in the sunny
                        Financial District, based in the Zillow Group San Francisco offices. </p>
                        
                       <h3> Who Is HotPads?</h3>
                        
                        <p>At HotPads, we believe you should love where you live.
                        We also know that finding that perfect apartment can be difficult
                        and stressful.</p>
                        
                        <p>HotPads eases the pain of looking for your next home by
                        helping your make smarter decisions about where to live. 
                        We help people navigate the rental market, and keep up with</p>
   fast-moving inventory.
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
