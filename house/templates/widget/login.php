<div id="login">
    <!---------------- Logging in moddeling starts here ---------------->
    <div id="loginModal" class="modal" tabindex="-1">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">

                <div class="modal-header">
                    <button class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Login</h4>
                </div>

                <div class="modal-body">

                    <form action="scripts/user.login.php" method="post">
                        <fieldset>

                            <div class="form-group">
                                <input class="form-control" placeholder="Username" name="username" type="text">
                            </div>

                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="password" type="password" value="">
                            </div>

                            <input class="btn btn-lg btn-primary btn-block" type="submit" value="Login">
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!---------------- Ends here ---------------->
</div>