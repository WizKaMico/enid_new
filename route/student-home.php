             <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">ANNOUNCEMENT</h6>
                                    <hr />
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
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">LOST AND FOUND</h6>
     
                                   <hr />
                                    <div class="owl-carousel testimonial-carousel">
                                         <?php 
                                            $alllost = $portCont->allLost();
                                                if (!empty($alllost)) {
                                                    foreach ($alllost as $key => $value) {     
                                         ?>  
                                        <div class="testimonial-item text-center">
                                            <img class="img-fluid mx-auto mb-4" src="<?php echo $alllost[$key]['image_path']; ?>" style="width: 100%; height: 500px;">
                                            <h5 class="mb-1"><?php echo $alllost[$key]['item']; ?></h5>
                                            <p><b>FOUND BY</b> : <?php echo strtoupper($alllost[$key]['fname']); ?> : <b>FOUND IN</b> : <?php echo strtoupper($alllost[$key]['room']); ?></p>
                                        </div>
                                        <?php } } ?>
                                    </div>                        
                        </div>
                    </div>
                </div>
            </div>