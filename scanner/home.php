              <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h1 class="mb-4" style="text-align:center; margin-top:20px;">WELCOME TO ABULALAS ELEMENTARY SCHOOL</h1>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">SCAN HERE</h6>
                            <hr />
                            <form id="myForm" action="scan.php?view=scan&action=scan" method="POST">        
                               <div class="form-floating mb-3">
                                    <input type="hidden" name="room_id" value="<?php echo $_GET['room_id']; ?>">
                                    <input type="text" name="uid" class="form-control" id="floatingInput" autofocus>
                                    <label for="floatingInput">UID</label>
                                </div>
                            </form>
                            <hr />   
                            <center><div id="clock" style="font-size:30px;"></div></center>       
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">STUDENT DETAILS</h6>
                                    <hr />
                                <?php if(!empty($_GET['uid'])) { ?>
                                <?php 
                                    $uid = $_GET['uid']; 
                                    $room_id = $_GET['room_id'];

                                    ?>

                                <?php $scannedDetails = $portCont->checkOutputScannedUid($uid,$room_id); ?>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput"
                                        value="<?php echo $scannedDetails[0]['fname']; ?>" readonly="">
                                    <label for="floatingInput">Fullname</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput"
                                        value="<?php echo $scannedDetails[0]['uid']; ?>" readonly="">
                                    <label for="floatingInput">LRN</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput"
                                        value="<?php echo $scannedDetails[0]['grade']; ?>" readonly="">
                                    <label for="floatingInput">Grade</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput"
                                        value="<?php echo $scannedDetails[0]['section_name']; ?>" readonly="">
                                    <label for="floatingInput">SECTION</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput"
                                        value="<?php echo $scannedDetails[0]['email']; ?>" readonly="">
                                    <label for="floatingInput">EMAIL</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput"
                                        value="<?php echo $scannedDetails[0]['timein']; ?>" readonly="">
                                    <label for="floatingInput">TIME-IN</label>
                                </div>
                                <?php if(!empty($scannedDetails[0]['timeout'])) { ?>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput"
                                        value="<?php echo $scannedDetails[0]['timeout']; ?>" readonly="">
                                    <label for="floatingInput">TIME-OUT</label>
                                </div>       
                                <?php } ?>
                              <?php } else { ?>
                                <div class="owl-carousel testimonial-carousel">
                                         <?php 
                                            $allAnnouncement = $portCont->allAnnoucement();
                                                if (!empty($allAnnouncement)) {
                                                    foreach ($allAnnouncement as $key => $value) {     
                                         ?>  
                                        <div class="testimonial-item text-center">
                                            <img class="img-fluid mx-auto mb-4" src="<?php echo $allAnnouncement[$key]['image_path']; ?>" style="width: 100%; height: 500px;">
                                            <h5 class="mb-1"><?php echo $allAnnouncement[$key]['title']; ?></h5>
                                            <p><?php echo $allAnnouncement[$key]['description']; ?></p>
                                        </div>
                                        <?php } } ?>
                                </div>
                              <?php } ?>
                        </div>
                    </div>
                </div>
            </div>