<section id="admin_tab">
    <div class="container">
          <div class="row">        
        <!--For adding a new house-->
                    
<div class="col-sm-7">
        <h1>Editing/ Deleting Property</h1>
              <a href="#" class="list-group-item">
                <div class="media col-md-3">
                    <figure class="pull-left">
                        <img class="media-object img-rounded img-responsive" src="http://placehold.it/350x250" alt="placehold.it/350x250" >
                    </figure>
                </div>
                <div class="col-md-6">
                    <h4 class="list-group-item-heading"> List group heading </h4>
                    <p class="list-group-item-text"> Eu eum corpora torquatos, ne postea constituto mea, quo tale lorem facer no. Ut sed odio appetere partiendo, quo meliore salutandi ex. Vix an sanctus vivendo, sed vocibus accumsan petentium ea. 
                        Sed integre saperet at, no nec debet erant, quo dico incorrupte comprehensam ut. Et minimum consulatu ius, an dolores iracundia est, oportere vituperata interpretaris sea an. Sed id error quando indoctum, mel suas saperet at.                         
                    </p>
                </div>
                <div class="col-md-3 text-center">
                    
                    <button type="button" class="btn btn-primary btn-lg btn-block">Edit</button>
                    <button type="button" class="btn btn-danger btn-lg btn-block">Delete</button>
                    
                </div>
          </a>  
    </div> 

<div class=col-sm-1>
    
</div>


    <div class="col-sm-4">
        <div class="adding">
            <h1>Adding property</h1>
         <form id="form" method="POST" action="scripts/admin.add_house.php" type="multipart/form-data">
                            <div class="form-group">
                                <input id="btn_upload" type="file"  name="image" required>
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
</section>