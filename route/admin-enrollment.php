<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">ENROLLMENT</h6>
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-freshman-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-freshman" type="button" role="tab" aria-controls="pills-freshman"
                                        aria-selected="true">NEW ENROLLE (FRESHMAN)</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-trans-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-trans" type="button" role="tab"
                                        aria-controls="pills-trans" aria-selected="false">NEW ENROLLEE (TRANS)</button>
                                </li>
                                <!-- <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-preenroll1-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-preenroll1" type="button" role="tab"
                                        aria-controls="pills-preenroll1" aria-selected="false">PRE-ENROLL</button>
                                </li> -->
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-reenroll-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-reenroll" type="button" role="tab"
                                        aria-controls="pills-reenroll" aria-selected="false">RE-ENROLL</button>
                                </li>
                               
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                            
                                <div class="tab-pane fade show active" id="pills-freshman" role="tabpanel" aria-labelledby="pills-freshman-tab">
                                    NOTE : By approving the freshman it is going straight and automatic to re-enroll tab, student will be getting an email for there initial username (LRN) and password that they can change once validated
                                              <div class="col-sm-12 col-sm-offset-2">
                                              <hr />
                                                <div class="row">
                                                    <table id="myFreshTable" class="table table-striped" style="text-align:center;">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">LRN</th>
                                                                <th scope="col">GRADE</th>
                                                                <th scope="col">EMAIL</th>
                                                                <th scope="col">FNAME</th>
                                                                <th scope="col">AVE</th>
                                                                <th scope="col">STATUS</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php 
                                                                $schoolFreshmen = $portCont->getAllFreshMen();
                                                                if (!empty($schoolFreshmen)) {
                                                                    foreach ($schoolFreshmen as $key => $value) {   
                                                                        
                                                                    $sycode = $schoolFreshmen[$key]['sycode']; 
                                                                    $schoolYearOptionGrade = $portCont->getSchoolYearDetailsGrade($sycode);
                                                                    if(strtoupper($schoolYearOptionGrade[$key]['grade']) == 'GRADE 1')  {
                                                                            $preAppGrade = $schoolYearOptionGrade[$key]['grade'];
                                                                    }
                                                                               
                                                            ?>
                                                            <tr>
                                                                <th scope="row"><?php echo $schoolFreshmen[$key]['uid']; ?></th>
                                                                <td><?php echo $schoolFreshmen[$key]['gid']; ?></td>
                                                                <td><?php echo $schoolFreshmen[$key]['email']; ?></td>
                                                                <td><?php echo $schoolFreshmen[$key]['lname']; ?>,<?php echo $schoolFreshmen[$key]['fname']; ?><?php echo $schoolFreshmen[$key]['mname']; ?></td>
                                                                <td><?php echo $schoolFreshmen[$key]['average']; ?></td>
                                                                <td>
                                                                  
                                                                <a href='#editFreshModal_<?php echo $schoolFreshmen[$key]['eid']; ?>' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#editFreshModal_<?php echo $schoolFreshmen[$key]['eid']; ?>'><?php echo $schoolFreshmen[$key]['status']; ?></a>

                                                                  
                                                                </td>
                                                            </tr>
                                                            <?php include('modal/edit_information_modal.php'); ?>
                                                            <?php } } ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                              </div>

                                </div>
                                <div class="tab-pane fade" id="pills-trans" role="tabpanel" aria-labelledby="pills-trans-tab">
                                   NOTE : By approving the transferee it is going straight and automatic to re-enroll tab, student will be getting an email for there initial username (LRN) and password that they can change once validated
                                             <div class="col-sm-12 col-sm-offset-2">
                                                <hr />
                                                <div class="row">
                                                    <table id="myTransTable" class="table table-striped" style="text-align:center;">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">LRN</th>
                                                                <th scope="col">GRADE</th>
                                                                <th scope="col">EMAIL</th>
                                                                <th scope="col">FNAME</th>
                                                                <th scope="col">AVE</th>
                                                                <th scope="col">STATUS</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php 
                                                                $schoolTrans = $portCont->getAlTrans();
                                                                if (!empty($schoolTrans)) {
                                                                    foreach ($schoolTrans as $key => $value) {   

                                                            ?>
                                                            <tr>
                                                                <th scope="row"><?php echo $schoolTrans[$key]['uid']; ?></th>
                                                                <td><?php echo $schoolTrans[$key]['gid']; ?></td>
                                                                <td><?php echo $schoolTrans[$key]['email']; ?></td>
                                                                <td><?php echo $schoolTrans[$key]['lname']; ?>,<?php echo $schoolTrans[$key]['fname']; ?><?php echo $schoolTrans[$key]['mname']; ?></td>
                                                                <td><?php echo $schoolTrans[$key]['average']; ?></td>
                                                                <td>
                                                                  
                                                                  <a href='#editTransModal_<?php echo $schoolTrans[$key]['eid']; ?>' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#editTransModal_<?php echo $schoolTrans[$key]['eid']; ?>'><?php echo $schoolTrans[$key]['status']; ?></a>
  
                                                                    
                                                                  </td>

                                                            </tr>
                                                            <?php include('modal/edit_information_modal.php'); ?>
                                                            <?php } } ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                              </div>                                     
                               
                                </div>

                                <!-- <div class="tab-pane fade" id="pills-preenroll1" role="tabpanel" aria-labelledby="pills-preenroll1-tab">
                                NOTE : By Pre-enrolling student   
                                <div class="col-sm-12 col-sm-offset-2">
                                                <hr />
                                                <div class="row">
                                                    <table id="myPreEnrollTable" class="table table-striped" style="text-align:center;">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">LRN</th>
                                                                <th scope="col">EMAIL</th>
                                                                <th scope="col">FNAME</th>
                                                                <th scope="col">AVE</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php 
                                                                $schoolPreEnroll = $portCont->getAllPreEnroll();
                                                                if (!empty($schoolPreEnroll)) {
                                                                    foreach ($schoolPreEnroll as $key => $value) {   

                                                            ?>
                                                            <tr>
                                                                <th scope="row"><?php echo $schoolPreEnroll[$key]['uid']; ?></th>
                                                                <td><?php echo $schoolPreEnroll[$key]['email']; ?></td>
                                                                <td><?php echo $schoolPreEnroll[$key]['lname']; ?>,<?php echo $schoolPreEnroll[$key]['fname']; ?><?php echo $schoolPreEnroll[$key]['mname']; ?></td>
                                                                <td><?php echo $schoolPreEnroll[$key]['average']; ?></td>
                                                               

                                                            </tr>
                                            
                                                            <?php } } ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                              </div>                                              
                                </div>                                        -->

                                <div class="tab-pane fade" id="pills-reenroll" role="tabpanel" aria-labelledby="pills-reenroll-tab">
                                NOTE : By re-enrolling a current student you need to understand that this is the list of the currently enrolled student and you are going to move them to the next grade
                                             <div class="col-sm-12 col-sm-offset-2">
                                                <hr />
                                                <div class="row">
                                                    <table id="myOfficialTable" class="table table-striped" style="text-align:center;">
                                                        <thead>
                                                            <tr>
                                                              <th scope="col">#</th> 
                                                                <th scope="col">QR</th>
                                                                <th scope="col">LRN</th>
                                                                <th scope="col">GRADE</th>
                                                                <th scope="col">SECTION</th>
                                                                <th scope="col">FNAME</th>
                                                                <th scope="col">ACTION</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php 
                                                                $schoolStudents = $portCont->getReEnrollmentStudent();
                                                                if (!empty($schoolStudents)) {
                                                                    foreach ($schoolStudents as $key => $value) {   

                                                            ?>
                                                            <tr>
                                                                <td><?php echo $schoolStudents[$key]['rid']; ?></td>
                                                                <th scope="row"><?php echo $schoolStudents[$key]['uid']; ?></th>
                                                                <td><?php echo $schoolStudents[$key]['uid']; ?></td>
                                                                <td><?php echo $schoolStudents[$key]['grade']; ?></td>
                                                                <td><?php echo $schoolStudents[$key]['section_name']; ?></td>
                                                                <td><?php echo $schoolStudents[$key]['fname']; ?></td>
                                                                <td>
                                                                  <?php
                                                                   $sycode= $schoolStudents[$key]['sycode'];
                                                                   $uid = $schoolStudents[$key]['uid'];
                                                                   $checkIfTheSame = $portCont->validateSimilarSyCode($sycode);
                                                                   $checkResponse = $portCont->studentEnrollmentConsentChecking($uid);
                                                                  ?>
                                                                  <?php if($checkIfTheSame[0]['status'] == 'ACTIVATED'){ ?>
                                                                  <?php echo 'NEW SY REQUIRED'; ?>
                                                                  <?php } else { ?>
                                                                  <?php if(!empty($checkResponse)) { ?>
                                                                  <?php if($checkResponse[0]['confirm'] == 'CONFIRM') { ?>
                                                                  <a href='#editReEnrollModal_<?php echo $schoolStudents[$key]['uid']; ?>' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#editReEnrollModal_<?php echo $schoolStudents[$key]['uid']; ?>'>ENROLL</a>
                                                                  <?php } else { ?>
                                                                  <?php echo 'DECLINE'; ?>  
                                                                  <?php } ?>
                                                                  <?php } else { ?>
                                                                  <?php echo 'NO RESPONSE'; ?>  
                                                                  <?php } ?>
                                                                  <?php } ?>
                                                                    
                                                                </td>

                                                            </tr>
                                                            <?php include('modal/edit_reenrollment_modal.php'); ?>
                                                            <?php } } ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                              </div>                               
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">STUDENT ENROLLMENT</h6>
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-newstudent-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-newstudent" type="button" role="tab" aria-controls="pills-newstudent"
                                        aria-selected="true">NEW STUDENT</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-transferee-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-transferee" type="button" role="tab"
                                        aria-controls="pills-transferee" aria-selected="false">TRANSFEREE</button>
                                </li>
                                <!-- <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-preenroll-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-preenroll" type="button" role="tab"
                                        aria-controls="pills-preenroll" aria-selected="false">PRE-ENROLL</button>
                                </li> -->
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-newstudent" role="tabpanel" aria-labelledby="pills-newstudent-tab">
                                    NOTE : Your are now checking a new student enrollee form, this is automatic grade 1
                                    <form action="home.php?view=enrollment&action=enrollnewstudent" method="POST"> 
                                        <div class="form-floating mb-3">
                                            <select class="form-control" name="sycode" id="floatingInput">
                                                    <?php 
                                                        $schoolYearActivated = $portCont->getYearActivated();
                                                        if (!empty($schoolYearActivated)) {
                                                            foreach ($schoolYearActivated as $key => $value) {     
                                                    ?>  
                                                     <option value="<?php echo $schoolYearActivated[$key]['sycode']; ?>"><?php echo $schoolYearActivated[$key]['year_from']; ?> - <?php echo $schoolYearActivated[$key]['year_to']; ?> (<?php echo $schoolYearActivated[$key]['sycode']; ?>)</option>       
                                                    <?php } } ?>
                                            </select>
                                            <label for="floatingInput">SYCODE</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="email" name="email" class="form-control" id="floatingPassword">
                                            <label for="floatingPassword">Email</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="text" name="fname" class="form-control" id="floatingPassword">
                                            <label for="floatingPassword">Firstname</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="text" name="mname" class="form-control" id="floatingPassword">
                                            <label for="floatingPassword">Middlename</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="text" name="lname" class="form-control" id="floatingPassword">
                                            <label for="floatingPassword">Lastname</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="text" name="average" class="form-control" id="floatingPassword">
                                            <label for="floatingPassword">Average</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="text" name="street" class="form-control" id="floatingPassword">
                                            <label for="floatingPassword">Street</label>
                                        </div>

                                        <div class="form-floating mb-3">
                                            <select class="form-control" name="gender">
                                                <option value="MALE">MALE</option>
                                                <option value="FEMALE">FEMALE</option>
                                            </select>
                                            <label for="floatingPassword">Gender</label>
                                        </div>

                                        <div class="form-floating mb-3">
                                            <select name="region" class="form-control"  id="region"></select>
                                            <input type="hidden" class="form-control" name="region_text" id="region-text" required>
                                            <label for="floatingInput">Region</label>
                                        </div>

                                        <div class="form-floating mb-3">
                                            <select name="province" class="form-control"  id="province"></select>
                                            <input type="hidden" class="form-control" name="province_text" id="province-text" required>
                                            <label for="floatingInput">Province</label>
                                        </div>

                                        <div class="form-floating mb-3">
                                            <select name="city" class="form-control"  id="city"></select>
                                            <input type="hidden"  class="form-control" name="city_text" id="city-text" required>
                                            <label for="floatingInput">City</label>
                                        </div>

                                        <div class="form-floating mb-3">
                                            <select name="barangay" class="form-control"  id="barangay"></select>
                                            <input type="hidden"  class="form-control" name="barangay_text" id="barangay-text" required>
                                            <label for="floatingInput">Barangay</label>
                                        </div>
                                    

                                        <button type="submit" name="add" style="width:100%;" class="btn btn-primary">ENROLL</button>
                                    </form>
                                </div>
                                
                                <div class="tab-pane fade" id="pills-transferee" role="tabpanel" aria-labelledby="pills-transferee-tab">
                                    NOTE : Your are now checking a transferee student enrollee form
                                    <form action="home.php?view=enrollment&action=enrolltrans" method="POST"> 
                                        <div class="form-floating mb-3">
                                            <select class="form-control" name="sycode" id="floatingInput">
                                                    <?php 
                                                        $schoolYearActivated = $portCont->getYearActivated();
                                                        if (!empty($schoolYearActivated)) {
                                                            foreach ($schoolYearActivated as $key => $value) {     
                                                    ?>  
                                                     <option value="<?php echo $schoolYearActivated[$key]['sycode']; ?>"><?php echo $schoolYearActivated[$key]['year_from']; ?> - <?php echo $schoolYearActivated[$key]['year_to']; ?> (<?php echo $schoolYearActivated[$key]['sycode']; ?>)</option>       
                                                    <?php } } ?>
                                            </select>
                                            <label for="floatingInput">SYCODE</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="email" name="email" class="form-control" id="floatingPassword">
                                            <label for="floatingPassword">Email</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="text" name="fname" class="form-control" id="floatingPassword">
                                            <label for="floatingPassword">Firstname</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="text" name="mname" class="form-control" id="floatingPassword">
                                            <label for="floatingPassword">Middlename</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="text" name="lname" class="form-control" id="floatingPassword">
                                            <label for="floatingPassword">Lastname</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="text" name="average" class="form-control" id="floatingPassword">
                                            <label for="floatingPassword">Average</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="text" name="street" class="form-control" id="floatingPassword">
                                            <label for="floatingPassword">Street</label>
                                        </div>

                                        <div class="form-floating mb-3">
                                            <select class="form-control" name="gender">
                                                <option value="MALE">MALE</option>
                                                <option value="FEMALE">FEMALE</option>
                                            </select>
                                            <label for="floatingPassword">Gender</label>
                                        </div>

                                        <div class="form-floating mb-3">
                                            <select name="region" class="form-control"  id="region1"></select>
                                            <input type="hidden" class="form-control" name="region_text" id="region-text1" required>
                                            <label for="floatingInput">Region</label>
                                        </div>

                                        <div class="form-floating mb-3">
                                            <select name="province" class="form-control"  id="province1"></select>
                                            <input type="hidden" class="form-control" name="province_text" id="province-text1" required>
                                            <label for="floatingInput">Province</label>
                                        </div>

                                        <div class="form-floating mb-3">
                                            <select name="city" class="form-control"  id="city1"></select>
                                            <input type="hidden"  class="form-control" name="city_text" id="city-text1" required>
                                            <label for="floatingInput">City</label>
                                        </div>

                                        <div class="form-floating mb-3">
                                            <select name="barangay" class="form-control"  id="barangay1"></select>
                                            <input type="hidden"  class="form-control" name="barangay_text" id="barangay-text1" required>
                                            <label for="floatingInput">Barangay</label>
                                        </div>
                                    

                                        <button type="submit" name="add" style="width:100%;" class="btn btn-primary">ENROLL</button>
                                    </form>     
                                </div>

                                <!-- <div class="tab-pane fade" id="pills-preenroll" role="tabpanel" aria-labelledby="pills-preenroll-tab">
                                NOTE : Your are now upload pre-enrollee
                                <form class="form-horizontal well" action="home.php?view=enrollment&action=preenrollState" method="post" name="upload_excel" enctype="multipart/form-data">
                               
                                    <div class="form-floating mb-3">
                                         <input type="file" name="file" id="file" class="form-control">
                                    </div>
                                    
                                   
                                        <button type="submit" id="submit"  style="width:100%;" name="Import" class="btn btn-primary">Upload</button>
                                   
                              </form>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
