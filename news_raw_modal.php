<?php

//include("db_control.php");
require '/controller/db_control.php';

$sql = "SELECT * FROM news_raw ";
      $result = mysqli_query($con,$sql);
      
//$title = $row['title'];
//$description= $row['description'];
//$id = $row['id'];
while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
echo '

<div id="'.$row['id'].'" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title" id="myModalLabel">'.$row['title'].'</h4>
                            </div>
                            <div class="modal-body">
                                '.$row['description'].'
                            </div>
							
                            <div class="modal-footer">
								
                                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                                
								
                            </div>
                      </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->';


}
mysqli_close($con);
?>
