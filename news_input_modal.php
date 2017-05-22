<script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.js"></script>
<script type="text/javascript">
	function p{
  $('#proceed').delay(5000).show(0);   
	}
</script>

<div id="newsInput" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
							<form method="post" action="/cmap/Horizontal/controller/news_input_controller.php">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title" id="myModalLabel">News Input</h4>
                            </div>
                            <div class="modal-body">
                                
								<input class="form-control m-b-20" type="text" placeholder="Enter News Title" name="title">
								<textarea class="form-control" id="exampleTextarea" rows="3" placeholder="Enter News Content" name="des"></textarea>
<!--								 <button type="submit" class="btn btn-primary waves-effect" id="proce" onclick="p();">Save</button>-->

								
								
								
                            </div>
							
                            <div class="modal-footer">
								
                                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary waves-effect">Save</button>
                                
								
                            </div>
								</form>
                      </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->';


