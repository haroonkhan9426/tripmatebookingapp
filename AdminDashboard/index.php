<?php

	include('../conn.php');
?>
<!DOCTYPE html>
<html lang = "en">
	<head>
		<meta charset = "UTF-8" name = "viewport" content = "width-device=width, initial-scale=1" />
<!--		<link rel = "stylesheet" type = "text/css" href = "/vendor/bootstrap-410/css/bootstrap.min.css" />-->
		<title>TripMate</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel = "stylesheet" type = "text/css" href = "../Style/slideShow.css" />
        <link rel = "stylesheet" type = "text/css" href = "../Style/styleBody.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="vendor/datepicker/datepicker.css">
	</head>
<body>


<!-- Navbar Horizontal Head -->
<!--    Start -->
<ul class="nav-headTop">
    <li><i class="fa fa-phone icon-headTop"></i><a class="" href="#" style="margin-left: 30px">085882236685</a></li>
    <li><i class="fas fa-envelope icon-headTop edit"></i><a href="#" style="margin-left: 40px">reynaldirizki43@gmail.com</a></li>
    <!--            <li><a href="#">Contact</a></li>-->
    <li style="float:right;background-color: #1e7e34"><a href="../index.php">Home Web Booking</a></li>
</ul>
<!--    End-->


	<div class = "row">
		<div class = "col-md-1">
		</div>
		<div class = "col-md-10 well c-hotel">
			<div class="row">
                <div class="col-lg-12">
                    <h2 class = "text-primary" align="center">DAFTAR HOTEL</h2>
					<hr>
				<div>
					<form class = "form-inline" id="input-form">
						<div class = "form-group">
							<label>Name Hotel:</label>
							<input type  = "text" id = "adm-name-hotel" class = "form-control">
						</div>
						<div class = "form-group">
							<label>City:</label>
							<input type  = "text" id = "adm-desk-hotel" class = "form-control">
						</div>
                        <div class = "form-group">
                            <label>Image Directory:</label>
                            <input type  = "text" id = "adm-dir-hotel" class = "form-control">
                        </div>
						<div class = "form-group">
							<button type = "button" id="addnew" class = "btn btn-primary"><span class = "glyphicon glyphicon-plus"></span> Add</button>
						</div>
					</form>
				</div>
                </div>
            </div><br>
			<div class="row">
                <div class="c-t-list-hotel">
                    <div id="userTable"></div>
                </div>
			</div>
		</div>
	</div>

<div class = "row">
    <div class = "col-md-12 well c-hotel-order">
        <div class="row">
            <div class="col-lg-12">
                <h2 class = "text-primary" align="center">LIST ORDER HOTEL</h2>
<!--                <hr>-->
            </div>
        </div><br>
        <div class="row">
            <div class="c-t-list-hotel-order">
                <div id="orderHotel"></div>
            </div>
        </div>
    </div>
</div>

</body>
<!--<script src = "/vendor/jquery/jquery-3.3.1.slim.min.js"></script>-->
<!--<script src = "/vendor/bootstrap-410/js/bootstrap.min.js"></script>-->

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script type = "text/javascript">
	$(document).ready(function(){
		showUser();
        showOrder();
		//Add New
		$(document).on('click', '#addnew', function(){
			if ($('#adm-name-hotel').val()=="" || $('#adm-desk-hotel').val()=="" || $('#adm-dir-hotel').val()==""){
				alert('Please input data first');
			}
			else{
			$nm_htl=$('#adm-name-hotel').val();
            $desk_htl=$('#adm-desk-hotel').val();
            $dir_dir=$('#adm-dir-hotel').val();
				$.ajax({
					type: "POST",
					url: "addnew.php",
					data: {
						nama_htl: $nm_htl,
						desk_htl: $desk_htl,
                        dir_htl: $dir_dir,
						add_new_hotel: 1,
					},
					success: function(){
                        $("#input-form")[0].reset();
						showUser();
					}
				});
			}
		});
		//Delete
		$(document).on('click', '.delete', function(){
			$id=$(this).val();
				$.ajax({
					type: "POST",
					url: "delete.php",
					data: {
						id: $id,
						del_hotel: 1,
					},
					success: function(){
						showUser();
					}
				});
		});
		//Update
		$(document).on('click', '.updateuser', function(){
			$uid=$(this).val();
			$('#edit'+$uid).modal('hide');
			$('body').removeClass('modal-open');
			$('.modal-backdrop').remove();
			$vNamaHotel=$('#vNamaHotel'+$uid).val();
			$vDescHotel=$('#vDescHotel'+$uid).val();
            $vPhotoDir=$('#vPhotoDir'+$uid).val();
				$.ajax({
					type: "POST",
					url: "update.php",
					data: {
						id: $uid,
						nama: $vNamaHotel,
						desc: $vDescHotel,
                        dir: $vPhotoDir,
                        edit_hotel: 1,
					},
					success: function(){
						showUser();
					}
				});
		});

        $(document).on('click', '.update-booking', function(){
            $uid=$(this).val();
            $('#edit_booking'+$uid).modal('hide');
            $('body').removeClass('modal-open');
            $('.modal-backdrop').remove();
            var d = $(this).data('flag');


            if (d==1){
                alert("you has been ACCEPT this booked");
                $flag=1;
            }else{
                alert("you has been REJECT this booked");
                $flag=0;
            }
            $.ajax({
                type: "POST",
                url: "update.php",
                data: {
                    id: $uid,
                    flag: $flag,
                    edit_booking: 1,
                },
                success: function(){
                    showOrder();
                }
            });
        });


	});

	//Showing our Table
	function showUser(){
		$.ajax({
			url: 'show_user.php',
			type: 'POST',
			async: false,
			data:{
				show: 1
			},
			success: function(response){
				$('#userTable').html(response);
			}
		});
	}

    //Showing our Table
    function showOrder(){
        $.ajax({
            url: 'show_user.php',
            type: 'POST',
            async: false,
            data:{
                show_order: 1
            },
            success: function(response){
                $('#orderHotel').html(response);
            }
        });
    }

</script>
</html>