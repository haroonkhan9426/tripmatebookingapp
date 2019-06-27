<?php


include('../conn.php');

if(isset($_POST['show'])){
    ?>
    <table class = "table-hotel table table-bordered alert-warning table-hover table-fixed">
        <thead>
        <th>NO</th>
        <th>Nama Hotel</th>
        <th>Deskripsi Hotel</th>
        <th>Photo Dir</th>
        <th>Action</th>
        </thead>
        <tbody>
        <?php
        $quser=mysqli_query($conn,"select * from hotel");
        $x=0;
        while($urow=mysqli_fetch_array($quser)){
            ?>
            <tr>
                <td><?php echo ++$x; ?></td>
                <td><?php echo $urow['nm_htl']; ?></td>
                <td><?php echo $urow['desc']; ?></td>
                <td><?php echo $urow['photo_dir']; ?></td>
                <td><button class="btn btn-success" data-toggle="modal" data-target="#edit<?php echo $urow['idhotel']; ?>"><span class = "glyphicon glyphicon-pencil"></span> Edit</button> | <button class="btn btn-danger delete" value="<?php echo $urow['idhotel']; ?>"><span class = "glyphicon glyphicon-trash"></span> Delete</button>
                    <?php include('edit_modal.php'); ?>
                </td>
            </tr>
            <?php
        }

        ?>
        </tbody>
    </table>
    <?php
}

if(isset($_POST['show_order'])){
    ?>
    <table class = "table-hotel table table-bordered alert-warning table-hover table-fixed">
        <thead>
        <th>NO</th>
        <th>Nama Hotel</th>
        <th>Email</th>
        <th>No.Telp</th>
        <th>Date Start</th>
        <th>Date End</th>
        <th>Guest</th>
        <th>Order Date</th>
        <th>is Accept</th>
        </thead>
        <tbody>
        <?php
        $queryListOrder="SELECT * FROM hotel_order as ho inner join hotel as h on h.idhotel=ho.idhotel order by ho.order_date desc";
        $quser=mysqli_query($conn,$queryListOrder);
        $x=0;
        while($urow=mysqli_fetch_array($quser)){
            ?>
            <tr>
                <td><?php echo ++$x; ?></td>
                <td><?php echo $urow['nm_htl']; ?></td>
                <td><?php echo $urow['email']; ?></td>
                <td><?php echo $urow['no_telp']; ?></td>
                <td><?php echo $urow['startdate']; ?></td>
                <td><?php echo $urow['enddate']; ?></td>
                <td><?php echo $urow['guest']; ?></td>
                <td><?php echo $urow['order_date']; ?></td>


                <?php if ($urow['isaccept']==1){?>
                    <td><button class="btn btn-success" data-toggle="modal" data-target="#edit_booking<?php echo $urow['idhotel_order']; ?>" value="<?php echo $urow['idhotel']; ?>" style="width:100px"><span class = "glyphicon glyphicon-ok"></span> Accept</button></td>
                <?php
                }else{
                    ?>
                <td><button class="btn btn-danger" data-toggle="modal" data-target="#edit_booking<?php echo $urow['idhotel_order']; ?>" value="<?php echo $urow['idhotel']; ?>" style="width:100px"><span class = "glyphicon glyphicon-remove"></span> Rejected</button></td>
                    <?php } ?>
                <?php include('edit_booking_modal.php'); ?>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <?php
}




?>