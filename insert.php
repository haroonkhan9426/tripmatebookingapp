<?php

	include('conn.php');
	if(isset($_POST['add'])){
        $id=$_POST['id'];
        $email=$_POST['email'];
        $notel=$_POST['notel'];
        $startdate=$_POST['startdt'];
        $enddate=$_POST['enddt'];
        $guest = $_POST['guest'];

        $queryInsert = "INSERT INTO `hotel_order` (`idhotel`, `startdate`, `enddate`, `isaccept`, `no_telp`, `email`, `guest`, `order_date`) VALUES ('$id', '$startdate', '$enddate', '0', '$notel', '$email', '$guest',NOW())";

        mysqli_query($conn,$queryInsert);
    }
?>