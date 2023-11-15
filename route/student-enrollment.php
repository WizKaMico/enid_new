            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Hi! <?php echo $info[0]['fname']; ?></h6>
                            <p>NOTE : This is to inform you that the enrollment for the school year <?php echo $ActiveSchoolYear[0]['year_from']; ?> - <?php echo $ActiveSchoolYear[0]['year_to']; ?> (<?php echo $ActiveSchoolYear[0]['sycode']; ?>) is now open</p>
                                    <hr />
                                <?php 
                                
                                $uid = $info[0]['uid'];
                                $checkResponse = $portCont->studentEnrollmentConsentChecking($uid);
                                if(!empty($checkResponse)) {
                                ?>

                                

                                <?php } else { ?>
                                    <form action="home.php?view=enrollnow&action=proceedToEnroll" method="POST"> 
                                        <div class="form-floating mb-3">
                                            <input type="hidden" name="uid" value="<?php echo $info[0]['uid']; ?>" readonly=""/>
                                            <input type="hidden" name="sycode" value="<?php echo $ActiveSchoolYear[0]['sycode']; ?>" readonly=""/>
                                        </div>  
                                        <button type="submit" name="confirm" style="width:100%;" class="btn btn-primary">ENROLL NOW</button>
                                        <hr />
                                        <button type="submit" name="decline" style="width:100%;" class="btn btn-primary">DECLINE</button>
                                    </form> 
                               <?php } ?>       
                                  

                        </div>
                    </div>
                </div>
            </div>