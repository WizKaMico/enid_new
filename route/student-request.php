<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-8">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">STUDENT REQUEST</h6>
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-allrequest-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-allrequest" type="button" role="tab" aria-controls="pills-allrequest"
                                        aria-selected="true">MY REQUEST</button>
                                </li>
                               
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-allrequest" role="tabpanel" aria-labelledby="pills-allrequest-tab">
                                   NOTES : This are all of the request for the active school year
                                   <hr />
                                    <table id="myRequestActiveSyTable" class="table table-striped" style="text-align:center;">
                                                  <thead>
                                                      <tr>
                                                        <th scope="col">ID</th>
                                                        <th scope="col">TYPE</th>
                                                        <th scope="col">LRN</th>
                                                        <th scope="col">DATE</th>
                                                        <th scope="col">FULLNAME</th>
                                                        <th scope="col">GRADE</th>
                                                        <th scope="col">SECTION</th>
                                                        <th scope="col">STATUS</th>
                                                      </tr>
                                                   </thead>
                                                 <tbody>
                                                <?php 
                                                $uid = $userSession[0]['uid'];
                                                $allRequest = $portCont->getStudentRequestSpecificStudentCurrentSchoolYear($uid);
                                                if (!empty($allRequest)) {
                                                    foreach ($allRequest as $key => $value) {     
                                                ?>
                                                <tr>
                                                    <td><a href="home.php?view=request_history&reqid=<?php echo $allRequest[$key]['reqid']; ?>"><?php echo $allRequest[$key]['reqid']; ?></a></td>
                                                    <td><?php echo $allRequest[$key]['type']; ?></td>
                                                    <td><?php echo $allRequest[$key]['uid']; ?></td>
                                                    <td><?php echo $allRequest[$key]['requestcreationdate']; ?></td>
                                                    <td><?php echo $allRequest[$key]['fname']; ?></td>
                                                    <td><?php echo $allRequest[$key]['grade']; ?></td>
                                                    <td><?php echo $allRequest[$key]['section_name']; ?></td>
                                                    <td><?php echo $allRequest[$key]['requeststatus']; ?></td>
                                                </tr>
                                            <?php } } ?>
                                         </tbody>
                                     </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-4">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">STUDENT REQUEST</h6>
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-request-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-request" type="button" role="tab"
                                        aria-controls="pills-request" aria-selected="false">CREATE A REQUEST</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                
                                <div class="tab-pane fade show active" id="pills-request" role="tabpanel" aria-labelledby="pills-request-tab">
                                   NOTES : You can create request as a student 
                                   <form action="home.php?view=request&action=createRequest" method="POST"> 
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
                                            <select class="form-control" name="uid" id="floatingInput">
                                                    <?php 
                                                        $uid = $userSession[0]['uid'];
                                                        $allActiveStud = $portCont->getStudentEnrollForCurrentSpecificStudentDataSchoolYear($uid);
                                                        if (!empty($allActiveStud)) {
                                                            foreach ($allActiveStud as $key => $value) {     
                                                    ?>  
                                                     <option value="<?php echo $allActiveStud[$key]['uid']; ?>">(<?php echo $allActiveStud[$key]['uid']; ?>) - <?php echo $allActiveStud[$key]['fname']; ?></option>       
                                                    <?php } } ?>
                                            </select>
                                            <label for="floatingInput">STUDENT</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <select class="form-control" name="request_type" id="floatingInput">
                                                    <?php 
                                                        $allRequestType = $portCont->getAllRequestType();
                                                        if (!empty($allRequestType)) {
                                                            foreach ($allRequestType as $key => $value) {     
                                                    ?>  
                                                     <option value="<?php echo $allRequestType[$key]['req']; ?>"><?php echo $allRequestType[$key]['type']; ?></option>       
                                                    <?php } } ?>
                                            </select>
                                            <label for="floatingInput">REQUEST TYPE</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <textarea cols="5" rows="10" class="form-control" name="note"></textarea>
                                            <label for="floatingInput">NOTE</label>
                                        </div>
                                        <button type="submit" name="add" style="width:100%;" class="btn btn-primary">Create Request</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
