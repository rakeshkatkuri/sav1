<?php require 'includes/header_start.php'; ?>

    <!-- Responsive table css -->
    <link href="assets/plugins/RWD-Table-Patterns/css/rwd-table.min.css" rel="stylesheet" type="text/css"
          media="screen">
<!--Responsive modal css-->
    <link href="assets/plugins/custombox/css/custombox.min.css" rel="stylesheet">

<?php require 'includes/header_end.php'; ?>

    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="btn-group pull-right m-t-15">
                <button type="button" class="btn btn-custom dropdown-toggle waves-effect waves-light"
                        data-toggle="dropdown" aria-expanded="false">Go To <span class="m-l-5"><i
                            class="fa fa-cog"></i></span></button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="news_analyzed.php">Analyzed</a>
                    
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="news_raw.php">Raw</a>
                </div>

            </div>
            <h4 class="page-title">Analyzed News</h4>
        </div>
    </div>




<?php include 'news_modal.php'; 


?>
    <div class="row">
        <div class="col-xs-12">
            <div class="card-box">


                <div class="table-rep-plugin">
                    <div class="table-responsive" data-pattern="priority-columns">
                        <table id="tech-companies-1" class="table table-striped table-bordered">
                            <thead class="thead-default">
                            <tr>
                                <th>News Title</th>
                                <th data-priority="1">News Sentiment</th>
<!--                                <th data-priority="3">Rating</th><td> <div id="score-callback" data-score="3"></div></td>-->
                                <th data-priority="1">Comment</th>
                                <th data-priority="3">Time</th>
                                
                            </tr>
                            </thead>
                            <tbody>
<!--					modal php code -->
								<?php
								require '/controller/db_control.php';
$sql = "SELECT * FROM news_final ";
      $result = mysqli_query($con,$sql);
      
//$title = $row['title'];
//$description= $row['description'];
//$id = $row['id'];
while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){

								
								echo '
                            <tr>
								<th><p data-toggle="modal" data-target="#'.$row['id'].'"><span class="co-name">'.$row['title'].'</span></p></th>
                                <td>Positive</td>
                                
                                <td>'.$row['comment'].'</td>
                                <td>'.$row['timestamp'].' </td>
                                
                            </tr>';
	}
								mysqli_close($con);
          
								?>
                            
                            <!-- Repeat -->
                            
                            <!-- Repeat -->
                            
                            </tbody>
                        </table>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!-- end row -->



<?php require 'includes/footer_start.php' ?>

    <!-- responsive-table-->
    <script src="assets/plugins/RWD-Table-Patterns/js/rwd-table.min.js" type="text/javascript"></script>
 <!-- Modal-Effect -->
    <script src="assets/plugins/custombox/js/custombox.min.js"></script>
    <script src="assets/plugins/custombox/js/legacy.min.js"></script>
<!--score-->
<!--Rating js-->
<script src="assets/plugins/raty-fa/jquery.raty-fa.js"></script>


<!-- Page specific js -->
<script src="assets/pages/jquery.rating.js"></script>


<?php require 'includes/footer_end.php' ?>