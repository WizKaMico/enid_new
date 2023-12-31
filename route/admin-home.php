        <!-- Start -->
        <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-user fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total no. of Students</p>
                                <h6 class="mb-0"><?php echo $studStat[0]['total']; ?></h6>
                                (<?php echo $studStat[0]['year_from']; ?> - <?php echo $studStat[0]['year_to']; ?> : SY:<?php echo $studStat[0]['sycode']; ?>)
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chalkboard-teacher fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Total no. of Teacher</p>
                                <h6 class="mb-0"><?php echo $teacherStat[0]['total']; ?></h6>
                                (<?php echo $teacherStat[0]['year_from']; ?> - <?php echo $teacherStat[0]['year_to']; ?> : SY:<?php echo $teacherStat[0]['sycode']; ?>)
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-pie fa-3x text-primary"></i>
                            <div class="ms-3">
                                <a href="home.php?view=charts" class="mb-2">Charts & Statistics</a>
                                <!-- <h6 class="mb-0">$1234</h6> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-school fa-3x text-primary"></i>
                            <div class="ms-3">
                            <a href="home.php?view=direction" class="mb-2">School Direction</a>
                                <!-- <h6 class="mb-0">$1234</h6> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End -->