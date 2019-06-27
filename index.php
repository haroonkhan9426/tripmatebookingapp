
<?php
include('conn.php');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset = "UTF-8" name = "viewport" content = "width-device=width, initial-scale=1" />
    <!--		<link rel = "stylesheet" type = "text/css" href = "/vendor/bootstrap-410/css/bootstrap.min.css" />-->
    <title>TripMate</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel = "stylesheet" type = "text/css" href = "Style/slideShow.css" />
    <link rel = "stylesheet" type = "text/css" href = "Style/styleBody.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="vendor/datepicker/datepicker.css">
</head>
<body>


<!-- Navbar Horizontal Head -->
<!--    Start -->
        <ul class="nav-headTop">
            <li><i class="fa fa-phone icon-headTop"></i><a class="" href="#" style="margin-left: 30px">+923459033602</a></li>
            <li><i class="fas fa-envelope icon-headTop edit"></i><a href="#" style="margin-left: 40px">tripmatehq@gmail.com</a></li>
<!--            <li><a href="#">Contact</a></li>-->
            <li style="float:right;background-color: #1e7e34"><a href="AdminDashboard/index.php">ADMIN Dashboard</a></li>
        </ul>
<!--    End-->


<div class="content-utama">
    <!--Start Banner-->
    <div class="banner-image">
        <img src="img/Hotel1.jpg" alt="Norway" style="width:100%">
        <div class="hero-text">
            <h1 style="font-size:50px">TripMate Hotel's Booking</h1>

        </div>
    </div>
    <!--End Banner-->


    <div style="clear: both;display: inline-block">
        <div class="container-card">

            <?php include('list_hotel.php'); ?>

        </div>
    </div>



    <br><br><br>

    <div class="container-ban-text">
        <h2>
            Book Faster, Book Smarter, Booking NOW!
        </h2>
        <p>
            Driven by our passion for travel, in this place works hard to bring you the cheapest prices on hotels, resorts, unique homes, vacation rentals, and more. Our huge selection of accommodations will let you plan the perfect trip. From adventure travel and backpacking to honeymoons and family vacations, we've got you covered.
        </p>
    </div>





<!--     Photo Grid -->

    <div class="container-card">
        <div style="width: 100%">
            <div class="pyramid-one">
                <img src="img/Hotel1.jpg" alt="Avatar" style="width:100%;">
            </div>
            <div style="height: 350px;width: 30%;float: left">
                <div class="pyramid-two">
                    <img src="img/collectionRoom/col-5.jpg" alt="Avatar" style="width:100%">
                </div>
                <div class="pyramid-two">
                    <img src="img/collectionRoom/col-5.jpg" alt="Avatar" style="width:100%">
                </div>
            </div>
        </div>
    </div>
</div>

<br><br><br>



<?php include('booking_modal.php'); ?>


<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!--Data Picker-->
<script type="text/javascript"  src="vendor/datepicker/datepicker.js"></script>
<script type="text/javascript"  src="vendor/datepicker/timepicker.js"></script>


<script type="text/javascript">
    // Berhasil Nge get value dari button
    // $(document).ready(function () {
    //         $(document).on('click', '.booknow', function(){
    //             $uid=$(this).val();
    //             alert($uid);
    //     });
    // });
</script>
<script type = "text/javascript">


    $(document).ready(function () {
        $(function() {
            $( "#datepicker" ).datepicker();
        });
    });

    $(document).ready(function(){
        // $( "#myBtn" ).click(function() {
        //     $("#myModal").fadeIn( "slow" );
        //     // $( "#myModal" ).removeClass( "block", { direction: "down" }, "slow" );
        // });

        $('#myyModall').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) ;// Button that triggered the modal
            var namaHotel= button.data('namahotel'); // Extract info from data-* attributes
            var descHotel = button.data('deschotel');
            var idHotel = button.data('idhotel');
            var PhotoDir = button.data('picdir');


            var modal = $(this);
            modal.find('.modal-body .modal-content .slideshow-container .nama-hotel').text(namaHotel);
            modal.find('.modal-content .form-booking-container .form-booking-container-sub .guest-desc .desc-hotel').text(descHotel);
            modal.find('.modal-content #idHotel').val(idHotel);
            modal.find('.modal-content .slideshow-container .mySlides .preview-hotel img').attr('src',PhotoDir);
            // css("background","url("+PhotoDir+") no-repeat ");

            //modal.find('.modal-body input').val(recipient)
        });

        //Update
        $(document).on('click', '.postbooking', function(){
            // $uid=$(this).val();

            // $(this).parent("");
            $email=$("#exampleInputEmail1").val();
            $notelpn=$("#exampleInputNumTelephone").val();
            $idhotel=$("#idHotel").val();
            $startdate=$("#start_dt").val();
            $enddate=$("#end_dt").val();
            $guest=$('#guest option:selected').val();


            $.ajax({
                type: "POST",
                url: "insert.php",
                data: {
                    id: $idhotel,
                    email: $email,
                    notel: $notelpn,
                    startdt: $startdate,
                    enddt: $enddate,
                    guest: $guest,
                    add: 1
                }
                // success: function(){
                //     alert("Your Order has been sent ...");
                // },
                // error: function(){
                //     alert('failure');
                // }
            });
            alert("Your Order has been sent ...");
        });

    });



</script>


</body>
</html>



