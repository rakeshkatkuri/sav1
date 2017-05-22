<?php require 'includes/header_account.php'; ?>
<?php
session_start();
if (isset($_SESSION['error']))
{
    echo '<div class="alert alert-danger" role="alert">
                        <strong>ERROR: </strong> Check your credentials and try logging
                        again.
                    </div>';
    
}

?>

    <div class="account-pages"></div>
    <div class="clearfix"></div>
    <div class="wrapper-page">

        <div class="account-bg">
            <div class="card-box m-b-0">
                <div class="text-xs-center m-t-20">
                    <a href="index.php" class="logo">
                        <i class="zmdi zmdi-group-work icon-c-logo"></i>
                        <span>CMAP</span>
                    </a>
                </div>
                <div class="m-t-10 p-20">
                    <div class="row">
                        <div class="col-xs-12 text-xs-center">
                            <h6 class="text-muted text-uppercase m-b-0 m-t-0">Sign In</h6>
                        </div>
                    </div>
                    <form class="m-t-20" action="controller/login_control.php" method="post">

                        <div class="form-group row">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" required="" placeholder="Username" name="username">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-xs-12">
                                <input class="form-control" type="password" required="" placeholder="Password" name="password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-xs-12">
                                <div class="checkbox checkbox-custom">
                                    <input id="checkbox-signup" type="checkbox">
                                    <label for="checkbox-signup">
                                        Remember me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group text-center row m-t-10">
                            <div class="col-xs-12">
                                <button class="btn btn-success btn-block waves-effect waves-light" type="submit">Log In</button>
                            </div>
                        </div>

                        <div class="form-group row m-t-30 m-b-0">
                            <div class="col-sm-12">
                                <a href="recover-password.php" class="text-muted"><i class="fa fa-lock m-r-5"></i> Forgot your password?</a>
                            </div>
                        </div>

<!--
                        <div class="form-group row m-t-30 m-b-0">
                            <div class="col-sm-12 text-xs-center">
                                <h5 class="text-muted"><b>Sign in with</b></h5>
                            </div>
                        </div>
-->

                        

                    </form>

                </div>

                <div class="clearfix"></div>
            </div>
        </div>
        <!-- end card-box-->

<!--
        <div class="m-t-20">
            <div class="text-xs-center">
                <p class="text-white">Don't have an account? <a href="pages-register.php" class="text-white m-l-5"><b>Sign Up</b></a></p>
            </div>
        </div>
-->

    </div>
    <!-- end wrapper page -->


<?php require 'includes/footer_account.php'; ?>
<?php 
unset($_SESSION['error']);
session_destroy();
?>