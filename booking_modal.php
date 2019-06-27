


<!-- The Modal -->
<!--<div id="myModal" class="modal">-->
<div class="modal fade" id="myyModall" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <!-- Modal content -->
<!--    <span class="close">&times;</span>-->
<!--<div class="modal-dialog" role="document">-->
<!--    <div class="modal-content">-->
<!--        <div class="modal-header">-->
<!--            <h5 class="modal-title" id="exampleModalLabel">New message</h5>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<div class="modal-body booking-modal">
    <h4 id="var-span"></h4>
    <div class="modal-content" style="height: 420px;">
        <input type="hidden" id="idHotel" >
        <div class="slideshow-container">
            <H3 class="nama-hotel" >Show All Activity by 3 Month..</H3>
            <div class="mySlides">
                <p>Ini Text 1</p>
                <div class="container-date preview-hotel">
                    <img src="img/collectionRoom/col-8.jpg" alt="Avatar" style="width:100%;">
                </div>
<!--                <div class="text">Caption Text</div>-->
            </div>

        </div>

        <div class="form-booking-container">
            <form class="form-booking-container-sub">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
<!--                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Phone Number</label>
                    <input type="text" class="form-control" id="exampleInputNumTelephone" placeholder="Enter Phone Number">
                </div>
                <div class="form-group-custom">
<!--                    <div class="form-check">-->
<!--                        <input type="checkbox" class="form-check-input" id="exampleCheck1">-->
<!--                        <label class="form-check-label" for="exampleCheck1">Check me out</label>-->
<!--                    </div>-->

                </div>

                <div class="container-datepicker">
                    <p class="container-datepicker-p">Start Date / Time:<br />
                        <input id="start_dt" class='datepicker' size='11' title='D-MMM-YYYY' />
                    </p>
                    <p class="container-datepicker-p right">End Date:<br />
                        <input id="end_dt" class='datepicker' size='11' title='D-MMM-YYYY' />
                    </p>
                </div>
<!--                <label for="sel1">Guest :</label>-->
                <div class="guest-desc">
                    <p class="container-datepicker-p">Guest :<br />
                        <select class="form-control" id="guest" style="width:100px;display:inline-block">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value=">5"> > 5</option>
                        </select>
                    <p class="desc-hotel" style="width:100px;display:inline-block;float:right;margin-top:25px">Type Room</p>
                </div>
                <button type="submit" class="postbooking btn btn-primary" style="width: 100%">Book NOW</button>

            </form>

        </div>

        <br>


    </div>
</div>
</div>