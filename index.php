<?php require 'includes/header_start.php'; ?>
<!--Morris Chart CSS -->
<link rel="stylesheet" href="assets/plugins/morris/morris.css">

<?php require 'includes/header_end.php'; ?>
<?php
include '/controller/db_control.php';
//$sql = "SELECT sentiment, count(*) from news_final group by sentiment order by 1 LIMIT 0, 30 ";
$sql1 = "SELECT count(*) count from news_final where sentiment='Positive'";
$result =mysqli_query($con,$sql1);

while($row= mysqli_fetch_array($result))
{
	
	$p = $row['count'];
	
}
//mysqli_close($con);

$sql2 = "SELECT count(*) count from news_final where sentiment='Negative'";
$result1 =mysqli_query($con,$sql2);

while($row1= mysqli_fetch_array($result1))
{
	
	$n = $row1['count'];
	
	
}


$sql3 = "SELECT count(*) count from news_final where sentiment='Neutral'";
$result2 =mysqli_query($con,$sql3);

while($row2= mysqli_fetch_array($result2))
{
	
	$ne = $row2['count'];
	
	
}

$sql4 = "SELECT count(*) count from news_final";
$result3 =mysqli_query($con,$sql4);

while($row3= mysqli_fetch_array($result3))
{
	
	$t = $row3['count'];
	
	
}

?>






<!-- Page-Title -->
<div class="row">
    <div class="col-sm-12">
<!--
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
-->
        <h4 class="page-title">Dashboard</h4>
    </div>
</div>


<div class="row">
    <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card-box tilebox-one">
            <i class="zmdi zmdi-plus-circle"></i>
            <h6 class="text-muted text-uppercase m-b-20">Positive News</h6>
            <h2 class="m-b-20" data-plugin="counterup"><?php echo $p; ?></h2>
            <span class="label label-success"> +1% </span> <span class="text-muted">From previous period</span>
        </div>
    </div>

    <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card-box tilebox-one">
            <i class="zmdi zmdi-minus-circle"></i>
            <h6 class="text-muted text-uppercase m-b-20">Negative News</h6>
            <h2 class="m-b-20"><span data-plugin="counterup"><?php echo $n; ?></span></h2>
            <span class="label label-danger"> -29% </span> <span class="text-muted">From previous period</span>
        </div>
    </div>

    <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card-box tilebox-one">
            <i class="zmdi zmdi-circle"></i>
            <h6 class="text-muted text-uppercase m-b-20">Neutral News</h6>
            <h2 class="m-b-20"><span data-plugin="counterup"><?php echo $ne;  ?></span></h2>
            <span class="label label-pink"> 0% </span> <span class="text-muted">From previous period</span>
        </div>
    </div>

    <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
        <div class="card-box tilebox-one">
            <i class="icon-rocket pull-xs-right text-muted"></i>
            <h6 class="text-muted text-uppercase m-b-20">Total News</h6>
            <h2 class="m-b-20" data-plugin="counterup"><?php echo $t; ?></h2>
            <span class="label label-warning"> +89% </span> <span class="text-muted">Last week</span>
        </div>
    </div>
</div>
<!-- end row -->


<!--
<div class="row">
    <div class="col-xs-12 col-lg-12 col-xl-8">
        <div class="card-box">

            <h4 class="header-title m-t-0 m-b-20">Sales Statistics</h4>

            <div class="text-xs-center">
                <ul class="list-inline chart-detail-list m-b-0">
                    <li class="list-inline-item">
                        <h6 style="color: #3db9dc;"><i class="zmdi zmdi-circle-o m-r-5"></i>Series A</h6>
                    </li>
                    <li class="list-inline-item">
                        <h6 style="color: #1bb99a;"><i class="zmdi zmdi-triangle-up m-r-5"></i>Series B</h6>
                    </li>
                    <li class="list-inline-item">
                        <h6 style="color: #818a91;"><i class="zmdi zmdi-square-o m-r-5"></i>Series C</h6>
                    </li>
                </ul>
            </div>

            <div id="morris-bar-stacked" style="height: 320px;"></div>

        </div>
    </div> end col
-->

<!--
    <div class="col-xs-12 col-lg-12 col-xl-4">
        <div class="card-box">

            <h4 class="header-title m-t-0 m-b-30">Trends Monthly</h4>

            <div class="text-xs-center m-b-20">
                <div class="btn-group" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-sm btn-secondary">Today</button>
                    <button type="button" class="btn btn-sm btn-secondary">This Week</button>
                    <button type="button" class="btn btn-sm btn-secondary">Last Week</button>
                </div>
            </div>

            <div id="morris-donut-example" style="height: 263px;"></div>

            <div class="text-xs-center">
                <ul class="list-inline chart-detail-list m-b-0">
                    <li class="list-inline-item">
                        <h6 style="color: #3db9dc;"><i class="zmdi zmdi-circle-o m-r-5"></i>English</h6>
                    </li>
                    <li class="list-inline-item">
                        <h6 style="color: #1bb99a;"><i class="zmdi zmdi-triangle-up m-r-5"></i>Italian</h6>
                    </li>
                    <li class="list-inline-item">
                        <h6 style="color: #818a91;"><i class="zmdi zmdi-square-o m-r-5"></i>French</h6>
                    </li>
                </ul>
            </div>

        </div>
    </div> end col


</div>
-->
<!-- end row -->

<!--
<div class="row">
    <div class="col-xs-12 col-lg-12 col-xl-7">
        <div class="row">
            <div class="col-xs-12 col-md-6">
                <div class="card-box">
                    <h4 class="header-title m-t-0 m-b-20">Inbox</h4>

                    <div class="inbox-widget nicescroll" style="height: 320px;">
                        <a href="#">
                            <div class="inbox-item">
                                <div class="inbox-item-img"><img src="assets/images/users/avatar-1.jpg" class="img-circle" alt=""></div>
                                <p class="inbox-item-author">Chadengle</p>
                                <p class="inbox-item-text">Hey! there I'm available...</p>
                                <p class="inbox-item-date">13:40 PM</p>
                            </div>
                        </a>
                        <a href="#">
                            <div class="inbox-item">
                                <div class="inbox-item-img"><img src="assets/images/users/avatar-2.jpg" class="img-circle" alt=""></div>
                                <p class="inbox-item-author">Tomaslau</p>
                                <p class="inbox-item-text">I've finished it! See you so...</p>
                                <p class="inbox-item-date">13:34 PM</p>
                            </div>
                        </a>
                        <a href="#">
                            <div class="inbox-item">
                                <div class="inbox-item-img"><img src="assets/images/users/avatar-3.jpg" class="img-circle" alt=""></div>
                                <p class="inbox-item-author">Stillnotdavid</p>
                                <p class="inbox-item-text">This theme is awesome!</p>
                                <p class="inbox-item-date">13:17 PM</p>
                            </div>
                        </a>
                        <a href="#">
                            <div class="inbox-item">
                                <div class="inbox-item-img"><img src="assets/images/users/avatar-4.jpg" class="img-circle" alt=""></div>
                                <p class="inbox-item-author">Kurafire</p>
                                <p class="inbox-item-text">Nice to meet you</p>
                                <p class="inbox-item-date">12:20 PM</p>
                            </div>
                        </a>
                        <a href="#">
                            <div class="inbox-item">
                                <div class="inbox-item-img"><img src="assets/images/users/avatar-5.jpg" class="img-circle" alt=""></div>
                                <p class="inbox-item-author">Shahedk</p>
                                <p class="inbox-item-text">Hey! there I'm available...</p>
                                <p class="inbox-item-date">10:15 AM</p>
                            </div>
                        </a>
                        <a href="#">
                            <div class="inbox-item">
                                <div class="inbox-item-img"><img src="assets/images/users/avatar-6.jpg" class="img-circle" alt=""></div>
                                <p class="inbox-item-author">Adhamdannaway</p>
                                <p class="inbox-item-text">This theme is awesome!</p>
                                <p class="inbox-item-date">9:56 AM</p>
                            </div>
                        </a>
                        <a href="#">
                            <div class="inbox-item">
                                <div class="inbox-item-img"><img src="assets/images/users/avatar-8.jpg" class="img-circle" alt=""></div>
                                <p class="inbox-item-author">Arashasghari</p>
                                <p class="inbox-item-text">Hey! there I'm available...</p>
                                <p class="inbox-item-date">10:15 AM</p>
                            </div>
                        </a>
                        <a href="#">
                            <div class="inbox-item">
                                <div class="inbox-item-img"><img src="assets/images/users/avatar-9.jpg" class="img-circle" alt=""></div>
                                <p class="inbox-item-author">Joshaustin</p>
                                <p class="inbox-item-text">I've finished it! See you so...</p>
                                <p class="inbox-item-date">9:56 AM</p>
                            </div>
                        </a>
                    </div>

                </div>
            </div>

            <div class="col-xs-12 col-md-6">
                <div class="card-box">
                    <h4 class="header-title m-t-0 m-b-20">Sales Statistics</h4>

                    <p class="font-600 m-b-5">iMacs <span class="text-danger pull-right"><b>79%</b></span></p>
                    <progress class="progress progress-striped progress-xs progress-danger m-b-0" value="79" max="100">79%
                    </progress>
                </div>

                <div class="card-box">
                    <h4 class="header-title m-t-0 m-b-20">Monthly Sales</h4>

                    <p class="font-600 m-b-5">Macbooks <span class="text-success pull-right"><b>30%</b></span></p>
                    <progress class="progress progress-striped progress-xs progress-success m-b-0" value="30" max="100">30%
                    </progress>
                </div>

                <div class="card-box">
                    <h4 class="header-title m-t-0 m-b-20">Daily Sales</h4>

                    <p class="font-600 m-b-5">Mobiles <span class="text-warning pull-right"><b>50%</b></span></p>
                    <progress class="progress progress-striped progress-xs progress-warning m-b-0" value="50" max="100">50%
                    </progress>
                </div>

            </div>

        </div>
    </div>

    <div class="col-xs-12 col-lg-12 col-xl-5">
        <div class="card-box">

            <h4 class="header-title m-t-0 m-b-30">Top Contracts</h4>

            <div class="table-responsive">
                <table class="table table-bordered m-b-0">
                    <thead>
                    <tr>
                        <th>Company</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th class="text-muted">Apple Technology</th>
                        <td>20/02/2014</td>
                        <td>19/02/2020</td>
                        <td><span class="label label-success">Paid</span></td>
                    </tr>
                    <tr>
                        <th class="text-muted">Envato Pty Ltd.</th>
                        <td>20/02/2014</td>
                        <td>19/02/2020</td>
                        <td><span class="label label-danger">Unpaid</span></td>
                    </tr>
                    <tr>
                        <th class="text-muted">Dribbble LLC.</th>
                        <td>20/02/2014</td>
                        <td>19/02/2020</td>
                        <td><span class="label label-success">Paid</span></td>
                    </tr>
                    <tr>
                        <th class="text-muted">Adobe Family</th>
                        <td>20/02/2014</td>
                        <td>19/02/2020</td>
                        <td><span class="label label-success">Paid</span></td>
                    </tr>
                    <tr>
                        <th class="text-muted">Apple Technology</th>
                        <td>20/02/2014</td>
                        <td>19/02/2020</td>
                        <td><span class="label label-danger">Unpaid</span></td>
                    </tr>
                    <tr>
                        <th class="text-muted">Envato Pty Ltd.</th>
                        <td>20/02/2014</td>
                        <td>19/02/2020</td>
                        <td><span class="label label-success">Paid</span></td>
                    </tr>
                    </tbody>
                </table>
            </div>


        </div>
    </div><!-- end col-->

<!--</div>-->
<!-- end row -->




<?php require 'includes/footer_start.php' ?>

<!--Morris Chart-->
<script src="assets/plugins/morris/morris.min.js"></script>
<script src="assets/plugins/raphael/raphael-min.js"></script>


<!-- Page specific js -->
<script src="assets/pages/jquery.dashboard.js"></script>

<?php require 'includes/footer_end.php' ?>
