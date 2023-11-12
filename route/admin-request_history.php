            <?php 
                    $reqid = $_GET['reqid'];
                    $myRequest = $portCont->specificStudentRequest($reqid);           
            ?>
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">STUDENT REQUEST SPECIFIC : <?php echo $myRequest[0]['type']; ?> - <?php echo $myRequest[0]['requeststatus']; ?></h6>
                            <h6 class="mb-4">REQUESTOR : <?php echo strtoupper($myRequest[0]['fname']); ?> - <?php echo $myRequest[0]['uid']; ?></h6>
                            <h6 class="mb-4">SECTION & GRADE : <?php echo $myRequest[0]['section_name']; ?> - <?php echo $myRequest[0]['grade']; ?></h6>
                            <h6 class="mb-4">CURRENT NOTE : <?php echo $myRequest[0]['note']; ?></h6>
                            <hr />
                            <h6 class="mb-4">HISTORY</h6>
                            <div class="accordion" id="accordionExample">
                            <?php 
                                $reqHistory = $portCont->specificRequestHistory($reqid);
                                    if (!empty($reqHistory)) {
                                         foreach ($reqHistory as $key => $value) {   
                            ?>                 
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading<?php echo $reqHistory[0]['reqhid']; ?>">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse<?php echo $reqHistory[0]['reqhid']; ?>" aria-expanded="true"
                                            aria-controls="collapse<?php echo $reqHistory[0]['reqhid']; ?>">
                                            <?php echo $reqHistory[0]['date_added']; ?>
                                        </button>
                                    </h2>
                                    <div id="collapse<?php echo $reqHistory[0]['reqhid']; ?>" class="accordion-collapse collapse show"
                                        aria-labelledby="heading<?php echo $reqHistory[0]['reqhid']; ?>" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                             <?php echo $reqHistory[0]['note']; ?>
                                        </div>
                                    </div>
                                </div>
                            <?php } } ?>
                        </div>
                    </div>
                </div>
              </div>
            