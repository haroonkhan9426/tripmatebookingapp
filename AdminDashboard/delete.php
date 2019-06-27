<?php

	include('../conn.php');
	if(isset($_POST['del_hotel'])){
        $id=$_POST['id'];

        $queryDellete = "DELETE FROM `hotel` WHERE `idhotel`='$id'";

        mysqli_query($conn,$queryDellete);
    }
?>