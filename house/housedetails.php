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

        <!----------------  backgroundimage ---------------->
        <?php include 'templates/backgroundimage.php';?>

        <!----------------  Body ---------------->

        <section id="gallery" class="gallery">
            <div class="container">
                <div class="row">
                    <h2 class="text-center">Properties of all sorts</h2>
                    <H4 class="text-center">SELLING|RENTING|BUYING|</H4>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-md-3">
                        <?php
                        $id =$_POST['houseID'];
                        $query = "SELECT * FROM houses WHERE houseID = '$id'";
                        $result = mysqli_query($conn,$query);
                        $row = mysqli_fetch_assoc($result);
                        ?>
                        <div class="thumbnail">
                            <img src="img/House4.jpg" alt="house">
                        </div>
                        <?php 
                        }
                        ?>
                    </div>
                    <div class="col-sm-6 col-md-3">                       
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Description</th>
                                    <th>Price</th>
                                    <th>Street</th>
                                    <th>City</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                        
                    </div>
                </div>
            </div>
            </div>
        </section>

        <section id="" class="">
            <div class="container">
                <h1>testing</h1>
            </div>
        </section>

        <!---------------- Footer ---------------->
        <?php include 'templates/footer.php';?>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>
            window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')
        </script>
        <script src="js/main.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>

    </html>