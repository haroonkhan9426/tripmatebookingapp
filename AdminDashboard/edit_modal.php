<?php

?>
<div class="modal fade" id="edit<?php echo $urow['idhotel']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<?php
		$n=mysqli_query($conn,"select * from `hotel` where idhotel='".$urow['idhotel']."'");
		$nrow=mysqli_fetch_array($n);
	?>
  <div class="modal-dialog" role="document">
    <div class="modal-content">
		<div class = "modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<center><h3 class = "text-success modal-title">Update Member</h3></center>
		</div>
		<form class="form-inline">
		<div class="modal-body">
            <div style="display: block;height: 50px">
                Name Hotel: <input type="text" value="<?php echo $nrow['nm_htl']; ?>" id="vNamaHotel<?php echo $urow['idhotel']; ?>" class="form-control" style="float: right;width:450px"><br>
            </div>
            <div style="display: block;height: 50px">
                City: <input type="text" value="<?php echo $nrow['desc']; ?>" id="vDescHotel<?php echo $urow['idhotel']; ?>" class="form-control float-right" style="float: right;width:450px"><br>
            </div>
            <div style="display: block;height: 50px">
                Photo Dir: <input type="text" value="<?php echo $nrow['photo_dir']; ?>" id="vPhotoDir<?php echo $urow['idhotel']; ?>" class="form-control" style="float: right;width:450px"><br>
            </div>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal"><span class = "glyphicon glyphicon-remove"></span> Cancel</button> | <button type="button" class="updateuser btn btn-success" value="<?php echo $urow['idhotel']; ?>"><span class = "glyphicon glyphicon-floppy-disk"></span> Save</button>
		</div>
		</form>
    </div>
  </div>
</div>