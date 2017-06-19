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


    <!----------------  slider ---------------->
    <section id="slider" class=" carousel slide" data-ride="carousel">
        <div class="carousel-inner">

            <div class="item active">
                    <div id="imageContainer1" class="text-center">
                        <h2> Raydine Housing Agency</h2>
                        <h3>Not you everyday hpusing Agency</h3>
                        <h4>We not only help you get the next home but we also help your find Office Space and Rental of property.</h4>
                        <div class="col-sm-6"><button id="s1" class="btn btn-primary" data-target="#signupModal" data-toggle="modal">Sign Up</button></div>
                        <div class="col-sm-6"><button id="s0" class="btn btn-primary" data-target="#loginModal" data-toggle="modal">Login</button></div>
                    </div>
            </div>

            <div class="item">
                <div id="imageContainer2">
                        <div class="text-center">
                            <div class="col-sm-5">
                                <div id="Notification">
                                    <h4>Notification</h4>
                                    
                                    <p>All 2014 Students Theres a meeting in build 5-308, 19:00. </p>
                                </div>
                            </div>

                            <div class="col-sm-2">
                                <div class="line"></div>
                            </div>

                            <div class="col-sm-5">
                                 <div id="Event">
                                    <h4 class="text-center">Event</h4>
                                    <h5>title:</h5>
                                    <h5>date/time:</h5>
                                    <h5>info:</h5>

                                    <h4>Upcoming Events</h4>

                                    <h5>title:</h5>
                                    <h5>date/time:</h5>
                                    <h5 class="under">info:</h5>

                                    <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>

                                </div>
                            </div>
                        </div>
                    </div>
                
            </div>

            <div class="item">
                <div id="imageContainer3">
                        <div class="text-center">
                        <p>On this site you will be able to recieve your </br>powerpoints (ppt), lastest timetables, notifications on the lastest event exams and </br>so forth... </p>
                        </div>
                    </div>
                
            </div>
        </div>

        <a class="left carousel-control" href="#slider" role="button" data-slide="prev">
            <span class="glyphicon glypicon-chevron-left"></span>
        </a>

        <a class="right carousel-control" href="#slider" role="button" data-slide="next">
            <span class="glyphicon glypicon-chevron-right"></span>
        </a>

        <ol class="carousel-indicators">
            <li data-target="#slider" data-slide-to="0" class="active"></li>
            <li data-target="#slider" data-slide-to="1"></li>
            <li data-target="#slider" data-slide-to="2"></li>

        </ol>
    </section>


     <!---------------- About ---------------->
     <section id="about" class="about">
        <div class="container">
            <div class="row text-center">
                <h2>What we do!</h2>
                <div class="col-sm-4">
                    <img height="90" src="img/sale.png">
                    <h3 class="text-uppercase text-center">Selling</h3>
                    <p class="text-center">we sell affordable homes and office space</p>
                </div>

                <div class="col-sm-4">
                    <img height="90" src="img/rent.png">
                    <h3 class="text-uppercase text-center">Renting</h3>
                    <p class="text-center">we offer rental services from office to homes</p>
                </div>

                <div class="col-sm-4">
                    <img height="90" src="img/sold.png">
                    <h3 class="text-uppercase text-center">Sold</h3>
                    <p class="text-center">we inform you on houses already sold</p>
                </div>

                
            </div>
        </div>
     </section>

    <!---------------- Signingup and loging in ---------------->

<?php include 'templates/widget/login.php';?>

<section id="signup">
                    
                    <!---------------- Signing Up moddeling starts here ---------------->
                    <div id="signupModal" class="modal" tabindex="-1">
                        <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Sign Up</h4>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Username" type="text" name="username" required="" >
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" placeholder="First Name" type="text" id="firstName" name="firstName" required="" >
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Last Name" type="text" id="lastName" name="lastName" required="" >
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Contact Number" type="text" id="contactNumber" name="contacNumber" required="" >
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Email" type="email" id="userEmail" name="userEmail" required="" >
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Password" type="password" id="inputPasword" required="" >
                                        </div>
                                        <div class="form-group">      
                                            <input class="form-control" placeholder="Renter Password" type="password" id="inputPasword" required="" >
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-primary btn-block" type="submit">Sign Up</button> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <!---------------- Ends here ---------------->
</section>

    <!---------------- advertise  ---------------->
     <section id="advert" class="advert">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <img src="img/House1.jpg" alt="house">
                        <div class="caption">

                            <h3>759 000 RMB</h3>
                            <p>2 bedroom apartment, 1 birthroom, double garage</p>
                            <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                          </div>
                        </div>
                   </div>

                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <img src="img/House2.jpg" alt="house">
                        <div class="caption">
                            <h3>759 000 RMB</h3>
                            <p>2 bedroom apartment, 1 birthroom, double garage</p>
                            <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                          </div>
                        </div>
                   </div>

                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <img src="img/House3.jpg" alt="house">
                        <div class="caption">
                            <h3>759 000 RMB</h3>
                            <p>2 bedroom apartment, 1 birthroom, double garage</p>
                            <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                          </div>
                        </div>
                   </div>

                <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <img src="img/House4.jpg" alt="house">
                        <div class="caption">
                            <h3>759 000 RMB</h3>
                            <p>2 bedroom apartment, 1 birthroom, double garage</p>
                            <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                          </div>
                        </div>
                   </div>
            </div>
        </div>
    </section>


    <!---------------- Footer ---------------->
    <?php include 'templates/footer.php';?>



        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
        <script src="js/main.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
