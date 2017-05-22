<?php

//include("db_control.php");
require '/controller/db_control.php';

$sql = "SELECT * FROM news ";
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
							<div class="modal-body">
							
							
							</div>
                            <div class="modal-footer">
								<form method="post" action="//127.0.0.1:8082/cmap/Horizontal/controller/comment.php?id='.$row['id'].'">
								<fieldset class="form-group">
                                <label for="comment">Comment</label>
                                <input type="text" class="form-control" id="comment" name="comment"
                                       placeholder="Enter Comment">
                                <small class="text-muted">We need your valuable comment to make it more better.
                                </small>
                            </fieldset>
                                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary waves-effect waves-light">Save changes</button>
								</form>
                            </div>
                      </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->';


}
mysqli_close($con);
?>
