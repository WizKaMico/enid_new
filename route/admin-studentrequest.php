             <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-8">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">STUDENT REQUEST</h6>
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-allrequest-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-allrequest" type="button" role="tab" aria-controls="pills-allrequest"
                                        aria-selected="true">ALL REQUEST</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-approved-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-approved" type="button" role="tab"
                                        aria-controls="pills-approved" aria-selected="false">APPROVED REQUEST</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-reject-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-reject" type="button" role="tab"
                                        aria-controls="pills-reject" aria-selected="false">REJECT REQUEST</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-archives-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-archives" type="button" role="tab"
                                        aria-controls="pills-archives" aria-selected="false">ARCHIVES</button>
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
                                                        <th scope="col">ACTION</th>
                                                      </tr>
                                                   </thead>
                                                 <tbody>
                                                <?php 
                                                $allRequest = $portCont->getStudentRequestCurrentSchoolYear();
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
                                                    <td>
                                                    <a href='#editRequestModal_<?php echo $allRequest[$key]['reqid']; ?>' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#editRequestModal_<?php echo $allRequest[$key]['reqid']; ?>'>UPDATE</a> 
                                                    </td>
                                                </tr>
                                                <?php include('modal/edit_request_modal.php'); ?>
                                            <?php } } ?>
                                         </tbody>
                                     </table>
                                </div>
                                <div class="tab-pane fade" id="pills-approved" role="tabpanel" aria-labelledby="pills-approved-tab">
                                   NOTES : This are all of the approved request for the active school year 
                                   <hr />
                                    <table id="myRequestApprovedSyTable" class="table table-striped" style="text-align:center;">
                                                  <thead>
                                                      <tr>
                                                        <th scope="col">ID</th>
                                                        <th scope="col">TYPE</th>
                                                        <th scope="col">LRN</th>
                                                        <th scope="col">DATE</th>
                                                        <th scope="col">FULLNAME</th>
                                                        <th scope="col">GRADE</th>
                                                        <th scope="col">SECTION</th>
                                                        <th scope="col">ACTION</th>
                                                      </tr>
                                                   </thead>
                                                 <tbody>
                                                <?php 
                                                $allRequest = $portCont->getStudentRequestCurrentSchoolYearApprove();
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
                                                    <td>
                                                    <a href='#editRequestModal_<?php echo $allRequest[$key]['reqid']; ?>' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#editRequestModal_<?php echo $allRequest[$key]['reqid']; ?>'>UPDATE</a> 
                                                    </td>
                                                </tr>
                                                <?php include('modal/edit_request_modal.php'); ?>
                                            <?php } } ?>
                                         </tbody>
                                     </table>
                                </div>
                                <div class="tab-pane fade" id="pills-reject" role="tabpanel" aria-labelledby="pills-reject-tab">
                                   NOTES : This are all of the rejected request for the active school year
                                   <hr />
                                    <table id="myRequestRejectedSyTable" class="table table-striped" style="text-align:center;">
                                                  <thead>
                                                      <tr>
                                                        <th scope="col">ID</th>
                                                        <th scope="col">TYPE</th>
                                                        <th scope="col">LRN</th>
                                                        <th scope="col">DATE</th>
                                                        <th scope="col">FULLNAME</th>
                                                        <th scope="col">GRADE</th>
                                                        <th scope="col">SECTION</th>
                                                        <th scope="col">ACTION</th>
                                                      </tr>
                                                   </thead>
                                                 <tbody>
                                                <?php 
                                                $allRequest = $portCont->getStudentRequestCurrentSchoolYearRejected();
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
                                                    <td>
                                                    <a href='#editRequestModal_<?php echo $allRequest[$key]['reqid']; ?>' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#editRequestModal_<?php echo $allRequest[$key]['reqid']; ?>'>UPDATE</a> 
                                                    </td>
                                                </tr>
                                                <?php include('modal/edit_request_modal.php'); ?>
                                            <?php } } ?>
                                         </tbody>
                                     </table>
                                </div>
                                <div class="tab-pane fade" id="pills-archives" role="tabpanel" aria-labelledby="pills-archives-tab">
                                  NOTES : This are all of the request for all of the previous school year 
                                  <hr />
                                    <table id="myRequestArchiveSyTable" class="table table-striped" style="text-align:center;">
                                                  <thead>
                                                      <tr>
                                                        <th scope="col">SYCODE</th>
                                                        <th scope="col">FROM</th>
                                                        <th scope="col">TO</th>
                                                        <th scope="col">APPROVE</th>
                                                        <th scope="col">REJECTED</th>
                                                      </tr>
                                                   </thead>
                                                 <tbody>
                                                <?php 
                                                $allYear = $portCont->getYear();
                                                if (!empty($allYear)) {
                                                    foreach ($allYear as $key => $value) { 
                                                        $sycode = $allYear[$key]['sycode'];
                                                        $checkApprove =  $portCont->checkApproveRequest($sycode);
                                                        $checkRejected =  $portCont->checkRejectRequest($sycode);   
                                                ?>
                                                <tr>
                                                   <td><?php echo $allYear[$key]['sycode']; ?></td>
                                                    <td><?php echo $allYear[$key]['year_from']; ?></td>
                                                    <td><?php echo $allYear[$key]['year_to']; ?></td>
                                                    <td><?php echo $checkApprove[0]['total']; ?></td>
                                                    <td><?php echo  $checkRejected[0]['total']; ?></td>
                                                    
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
                                    <button class="nav-link active" id="pills-requestType-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-requestType" type="button" role="tab" aria-controls="pills-requestType"
                                        aria-selected="true">CREATE TYPES OF REQUEST</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-request-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-request" type="button" role="tab"
                                        aria-controls="pills-request" aria-selected="false">CREATE A REQUEST</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-requestType" role="tabpanel" aria-labelledby="pills-requestType-tab">
                                   NOTES : This will be the one to appear in student request (types)
                                   <form action="home.php?view=request&action=request_type" method="POST"> 
                                        <div class="form-floating mb-3">
                                            <input type="text" name="type" class="form-control" id="floatingInput">
                                            <label for="floatingInput">REQUEST TYPE</label>
                                        </div>
                                        <button type="submit" name="add" style="width:100%;" class="btn btn-primary">Add Request Type</button>
                                    </form>
                                    <hr />
                                    <table id="myRequestTypeTable" class="table table-striped" style="text-align:center;">
                                                  <thead>
                                                      <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">REQUEST</th>
                                                      </tr>
                                                   </thead>
                                                 <tbody>
                                                <?php 
                                                $requestType = $portCont->getAllRequestType();
                                                if (!empty($requestType)) {
                                                    foreach ($requestType as $key => $value) {     
                                                ?>
                                                <tr>
                                                    <th scope="row"><?php echo $requestType[$key]['req']; ?></th>
                                                    <td><?php echo $requestType[$key]['type']; ?></td>
                                                </tr>
                                            <?php } } ?>
                                         </tbody>
                                     </table>

                                </div>
                                <div class="tab-pane fade" id="pills-request" role="tabpanel" aria-labelledby="pills-request-tab">
                                   NOTES : You can create request as an admin for student 
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
                                                        $allActiveStud = $portCont->getStudentEnrollForCurrentSchoolYear();
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
