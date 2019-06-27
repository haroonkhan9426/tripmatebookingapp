<?php

	include('../conn.php');
	if(isset($_POST['edit_hotel'])){
        $id=$_POST['id'];
        $nama=$_POST['nama'];
        $desc=$_POST['desc'];
        $dir=$_POST['dir'];


        $queryUpdate = "UPDATE `db_web`.`hotel` SET `nm_htl`='$nama', `desc`='$desc', `photo_dir`='$dir' WHERE `idhotel`='$id'";


        mysqli_query($conn,$queryUpdate);
    }

    if(isset($_POST['edit_booking'])){
        $id=$_POST['id'];
        $flag=$_POST['flag'];

        $queryUpdate = "UPDATE `hotel_order` SET `isaccept`='$flag' WHERE `idhotel_order`='$id'";

        mysqli_query($conn,$queryUpdate);
    }
?>