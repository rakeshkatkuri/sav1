<?php require 'includes/header_start.php'; ?>
<!-- Extra css -->
<?php require 'includes/header_end.php'; ?>

<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
        <div class="btn-group pull-right m-t-15">
            <button type="button" class="btn btn-custom dropdown-toggle waves-effect waves-light"
                    data-toggle="dropdown" aria-expanded="false">Settings <span class="m-l-5"><i
                        class="fa fa-cog"></i></span></button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Separated link</a>
            </div>

        </div>
        <h4 class="page-title">Alerts</h4>
    </div>
</div>


<div class="row">
    <div class="col-xs-12">
        <div class="card-box">

            <div class="row">
                <div class="col-sm-6">
                    <h4 class="header-title m-t-0">Examples</h4>
                    <p class="text-muted m-b-20 font-13">
                        Alerts are available for any length of text, as well as an optional dismiss button. For proper styling, use one of the four <strong>required</strong> contextual classes (e.g., <code class="highlighter-rouge">.alert-success</code>).
                    </p>

                    <div class="alert alert-success" role="alert">
                        <strong>Well done!</strong> You successfully read this important alert
                        message.
                    </div>
                    <div class="alert alert-info" role="alert">
                        <strong>Heads up!</strong> This alert needs your attention, but it's not
                        super important.
                    </div>
                    <div class="alert alert-warning" role="alert">
                        <strong>Warning!</strong> Better check yourself, you're not looking too
                        good.
                    </div>
                    <div class="alert alert-danger" role="alert">
                        <strong>Oh snap!</strong> Change a few things up and try submitting
                        again.
                    </div>
                </div>

                <div class="col-sm-6 m-t-xs-40">
                    <h4 class="header-title m-t-0">Link color</h4>
                    <p class="text-muted m-b-20 font-13">
                        Use the <code>.alert-link</code> utility class to quickly provide matching colored links within any alert.
                    </p>

                    <div class="alert alert-success" role="alert">
                        <strong>Well done!</strong> You successfully read <a href="#"
                                                                             class="alert-link">this
                            important alert message</a>.
                    </div>
                    <div class="alert alert-info" role="alert">
                        <strong>Heads up!</strong> This <a href="#" class="alert-link">alert
                            needs your attention</a>, but it's not super important.
                    </div>
                    <div class="alert alert-warning" role="alert">
                        <strong>Warning!</strong> Better check yourself, you're <a href="#"
                                                                                   class="alert-link">not
                            looking too good</a>.
                    </div>
                    <div class="alert alert-danger" role="alert">
                        <strong>Oh snap!</strong> <a href="#" class="alert-link">Change a few
                            things up</a> and try submitting again.
                    </div>

                </div>

            </div>
            <!-- end row -->


            <div class="row m-t-30">
                <div class="col-sm-6 m-t-20">
                    <h4 class="header-title m-t-0">Dismissing Examples</h4>
                    <p class="text-muted m-b-20 font-13">
                        Using the alert JavaScript plugin, it’s possible to dismiss any alert inline.
                    </p>

                    <div class="alert alert-success alert-dismissible fade in" role="alert">
                        <button type="button" class="close" data-dismiss="alert"
                                aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <strong>Well done!</strong> You successfully read this important alert
                        message.
                    </div>
                    <div class="alert alert-info alert-dismissible fade in" role="alert">
                        <button type="button" class="close" data-dismiss="alert"
                                aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <strong>Heads up!</strong> This alert needs your attention, but it's not
                        super important.
                    </div>
                    <div class="alert alert-warning alert-dismissible fade in" role="alert">
                        <button type="button" class="close" data-dismiss="alert"
                                aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <strong>Holy guacamole!</strong> You should check in on some of those
                        fields below.
                    </div>
                    <div class="alert alert-danger alert-dismissible fade in" role="alert">
                        <button type="button" class="close" data-dismiss="alert"
                                aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <strong>Oh snap!</strong> Change a few things up and try submitting
                        again.
                    </div>
                </div>

            </div>
            <!-- end row -->

        </div>
    </div>
</div>
<!-- end row -->



<?php require 'includes/footer_start.php' ?>
<!-- put any extra js here -->
<?php require 'includes/footer_end.php' ?>
