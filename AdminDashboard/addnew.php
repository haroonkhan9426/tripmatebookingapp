<?php

include('../conn.php');
    if(isset($_POST['add_new_hotel'])){
        $nm_htl=$_POST['nama_htl'];
        $desk_htl=$_POST['desk_htl'];
        $dir_dir=$_POST['dir_htl'];

        $queryAdd ="INSERT INTO `hotel` (`nm_htl`, `desc`, `photo_dir`, `counter`) VALUES ('$nm_htl', '$desk_htl', '$dir_dir', '0')";

        mysqli_query($conn,$queryAdd);
    }



?>