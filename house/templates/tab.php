<section id="admin_tab">
          <div class="container">
                <div class="col-sm-offset-3 col-sm-9">
                    <ul class="nav nav-tabs">
                      <li class="active"><a href="#Adding" data-toggle="tab">Adding</a></li>
                      <li><a href="#Editing" data-toggle="tab">Editing</a></li>
                      <li><a href="#Delete" data-toggle="tab">Delete</a></li>
                      <li><a href="#Appointment" data-toggle="tab">Appointment</a></li>
                      <li><a href="#Delete" data-toggle="tab">Delete</a></li>
                    </ul>
        <!--For adding a new house-->
                    <div class="tab-content">
                        <div class="list-unstyled tab-pane fade in active" id="Adding">
                            <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        
                        <a href="#"><img src="img/add.png" alt="Add picture"></a>
                            <div class="caption">

                        <form id="form" method="POST" action="scripts/admin.add_house.php" type="multipart/form-data">
                            <div class="form-group">
                                <input id="btn_upload" class="form-control" type="file" placeholder="Image" name="image" required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Price" name="price" required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="street" name="street" required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="listing" name="listing" required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Description" name="description" required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Number of rooms" name="rooms" required>
                            </div>
                            
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="City/Town" name="city" required>
                            </div>

                            <div class="form-group text-center">
                                <input class="btn btn-default" type="submit" value="Confirm">
                            </div>

                        </form>

                            </div>
                        </div>
                   </div>
                        </div>
            <!--For editing a house-->
                        <div class="tab-pane fade" id="Editing">
                            <div class="container">
                            <div class="row">

                             <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                        
                        <a href="#"><img src="img/add.png" alt="Add picture"></a>
                            <div class="caption">

                        <form id="form" method="POST" action="../scripts/admin.edit_house.php" enctype="multipart/form-data">

                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Price" name="price" required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Description" name="name" required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Number of rooms" name="name" required>
                            </div>
                            
                            <div class="form-group">
                                <input class="form-control" type="password" placeholder="City/Town" name="city" required>
                            </div>

                            <div class="form-group text-center">
                                <input class="btn btn-default" type="submit" value="Confirm">
                            </div>

                        </form>

                            </div>
                        </div>
                   </div>

                            </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="Delete">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-6 col-md-3">
                                        <div class="thumbnail">
                                            <img src="img/House1.jpg" alt="house">
                                            <div class="caption">

                                                <h3>759 000 RMB</h3>
                                                <p>2 bedroom apartment, 1 birthroom, double garage</p>
                                                <p><a href="#" class="btn btn-danger" role="button">Delete</a> </p>
                                              </div>
                                            </div>
                                       </div>
                            </div>
                        </div>
                        </div>
                        
                        <div class="tab-pane fade" id="Appointment">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-6 col-md-3">
                                        <div class="thumbnail">
                                            <img src="img/House1.jpg" alt="house">
                                            <div class="caption">

                                                <h3>759 000 RMB</h3>
                                                <p>2 bedroom apartment, 1 birthroom, double garage</p>
                                                <p><a href="#" class="btn btn-danger" role="button">Delete</a> </p>
                                              </div>
                                            </div>
                                       </div>
                            </div>
                        </div>
                        </div>
                    </div>
                 </div>
          </div>
        </section>