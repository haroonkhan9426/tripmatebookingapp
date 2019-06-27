<?php

?>

<div class="modal fade" id="edit_booking<?php echo $urow['idhotel_order']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
		<div class = "modal-header" style="height: 50px">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h3 class = "text-success modal-title text-center" >Update Booking Hotel Booking Hotel</h3>
		</div>
            <div class="modal-body row" style="padding: 15px">
                <div class="col-sm-2"></div>
                <div class="col-sm-4">
                    <button type="button" class="update-booking btn btn-danger" value="<?php echo $urow['idhotel_order']; ?>" data-flag="0"><span class = "glyphicon glyphicon-remove"></span> Rejected</button>
                </div>
                <div class="col-sm-4">
                    <button type="button" class="update-booking btn btn-success" value="<?php echo $urow['idhotel_order']; ?>" data-flag="1"><span class = "glyphicon glyphicon-ok"></span> Accept</button>
                </div>
            </div>
    </div>
  </div>
</div>