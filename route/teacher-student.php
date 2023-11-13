<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-8">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">MY STUDENT</h6>
                                    <hr />
                                    
                                     <table id="myStudentTable" class="table table-striped" style="text-align:center;">
                                                  <thead>
                                                      <tr>
                                                        <th scope="col">QR</th>
                                                        <th scope="col">UID</th>
                                                        <th scope="col">FULLNAME</th>
                                                        <th scope="col">ADDRESS</th>
                                                        <th scope="col">SECTION</th>
                                                        <th scope="col">GRADE</th>
                                                      </tr>
                                                   </thead>
                                                 <tbody>
                                                <?php 
                                                $sid = $tinfo[0]['sid'];
                                                $studentInfo = $portCont->myTeacherStudent($sid);
                                                if (!empty($studentInfo)) {
                                                    foreach ($studentInfo as $key => $value) {
                                                        $uid = $studentInfo[$key]['uid'];
                                                        $qrtobegenerated = 'https://chart.googleapis.com/chart?chs=50x50&cht=qr&chl=' . urlencode($uid); 
                                                ?>
                                                <tr>
                                                    <td><img src='<?php echo $qrtobegenerated; ?>' alt='QR Code'></td>
                                                    <td><?php echo $studentInfo[$key]['uid']; ?></td>
                                                    <td><?php echo $studentInfo[$key]['fname']; ?></td>
                                                    <td><?php echo $studentInfo[$key]['address']; ?></td>
                                                    <td><?php echo $studentInfo[$key]['section_name']; ?></td>
                                                    <td><?php echo $studentInfo[$key]['grade']; ?></td>
                                                </tr>

                                            <?php } } ?>
                                         </tbody>
                                     </table>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-4">
                        <div class="bg-light rounded h-100 p-4">
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-myinfo-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-myinfo" type="button" role="tab" aria-controls="pills-myinfo"
                                        aria-selected="true">My Information</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-myinfo" role="tabpanel" aria-labelledby="pills-myinfo-tab">
                                    NOTE : This is teachers, information 
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingInput"
                                            value="<?php echo $tinfo[0]['fname']; ?> <?php echo $tinfo[0]['mname']; ?> <?php echo $tinfo[0]['lname']; ?>" readonly="">
                                        <label for="floatingInput">Fullname</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingInput"
                                            value="<?php echo $tinfo[0]['uid']; ?>" readonly="">
                                        <label for="floatingInput">UID</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingInput"
                                            value="<?php echo $tinfo[0]['grade']; ?>" readonly="">
                                        <label for="floatingInput">Grade</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingInput"
                                            value="<?php echo $tinfo[0]['section_name']; ?>" readonly="">
                                        <label for="floatingInput">SECTION</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingInput"
                                            value="<?php echo $tinfo[0]['email']; ?>" readonly="">
                                        <label for="floatingInput">EMAIL</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>