<?php require 'includes/header_start.php'; ?>
<!-- put extra css here -->
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
        <h4 class="page-title">Progress</h4>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="card-box">

            <div class="row">
                <div class="col-sm-5">
                    <h4 class="header-title m-t-0">Basic example</h4>
                    <p class="text-muted m-b-30 font-13">
                        Default progress bar.
                    </p>
                    <progress class="progress" value="0" max="100">0%</progress>
                    <progress class="progress" value="25" max="100">25%</progress>
                    <progress class="progress" value="50" max="100">50%</progress>
                    <progress class="progress" value="75" max="100">75%</progress>
                    <progress class="progress" value="100" max="100">100%</progress>

                    <h6 class="m-t-20">IE9 support</h6>
                    <p class="text-muted m-b-20 font-13">
                        Internet Explorer 9 doesn’t support the HTML5 <code class="highlighter-rouge">&lt;progress&gt;</code> element, but we can work around that.
                    </p>

                    <progress class="progress" value="25" max="100">
                        <div class="progress">
                            <span class="progress-bar" style="width: 25%;">25%</span>
                        </div>
                    </progress>
                </div>

                <div class="col-sm-5 col-sm-offset-1 m-t-xs-40">
                    <h4 class="header-title m-t-0">Contextual alternatives</h4>
                    <p class="text-muted m-b-30 font-13">
                        Progress bars use some of the same button and alert classes for consistent styles.
                    </p>

                    <progress class="progress progress-success" value="25" max="100">25%
                    </progress>
                    <progress class="progress progress-info" value="50" max="100">50%</progress>
                    <progress class="progress progress-warning" value="75" max="100">75%
                    </progress>
                    <progress class="progress progress-danger" value="100" max="100">100%
                    </progress>
                </div>
            </div>
            <!-- end row -->

            <div class="row m-t-50">
                <div class="col-sm-5 m-t-20">
                    <h4 class="header-title m-t-0">Striped example</h4>
                    <p class="text-muted m-b-30 font-13">
                        Uses a gradient to create a striped effect.
                    </p>
                    <progress class="progress progress-striped" value="10" max="100">10%
                    </progress>
                    <progress class="progress progress-striped progress-success" value="25"
                              max="100">25%
                    </progress>
                    <progress class="progress progress-striped progress-info" value="50"
                              max="100">50%
                    </progress>
                    <progress class="progress progress-striped progress-warning" value="75"
                              max="100">75%
                    </progress>
                    <progress class="progress progress-striped progress-danger" value="100"
                              max="100">100%
                    </progress>
                </div>

                <div class="col-sm-5 col-sm-offset-1 m-t-20 m-t-xs-40">
                    <h4 class="header-title m-t-0">Size example</h4>
                    <p class="text-muted m-b-30 font-13">
                        Your awesome text goes here.
                    </p>
                    <progress class="progress progress-sm" value="10" max="100">10%
                    </progress>
                    <progress class="progress progress-striped progress-success progress-sm" value="25"
                              max="100">25%
                    </progress>
                    <progress class="progress progress-info progress-xs" value="50"
                              max="100">50%
                    </progress>
                    <progress class="progress progress-striped progress-warning progress-xs" value="75"
                              max="100">75%
                    </progress>
                </div>

            </div>

        </div>
    </div>
</div>
<!-- end row -->



<?php require 'includes/footer_start.php' ?>
<!-- put any extra js here -->
<?php require 'includes/footer_end.php' ?>

