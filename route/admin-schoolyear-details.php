            <?php 
             
             $sycode = $_GET['sycode']; 
             $schoolYear = $portCont->getSchoolYearDetails($sycode);
             $yearFrom = $schoolYear[0]['year_from'];
             $yearTo = $schoolYear[0]['year_to'];

            // Convert the date strings to timestamp
             $timestampFrom = strtotime($yearFrom);
             $timestampTo = strtotime($yearTo);

            // Format the date in words
             $formattedYearFrom = date('F j, Y', $timestampFrom);
             $formattedYearTo = date('F j, Y', $timestampTo);

            ?>
            
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">SCHOOL YEAR : <?php echo strtoupper($formattedYearFrom); ?> - <?php echo strtoupper($formattedYearTo); ?></h6>
                            <?php if($schoolYear[0]['status'] == '') { ?>
                            <form action="home.php?view=school_year_detail&action=school_year_activation" method="POST">
                               <input type="hidden" name="sycode" value="<?php echo $_GET['sycode']; ?>" class="form-control">
                               <button type="submit" name="activate" style="width:100%;" class="btn btn-primary">Activate School Year</button>
                            </form>
                            <?php } else if ($schoolYear[0]['status'] == 'ACTIVATED') { ?> 
                            <form action="home.php?view=school_year_detail&action=school_year_deactivation" method="POST">
                               <input type="hidden" name="sycode" value="<?php echo $_GET['sycode']; ?>" class="form-control">
                               <button type="submit" name="activate" style="width:100%;" class="btn btn-primary">Deactivate School Year</button>
                            </form>
                            <?php } else {  ?>
                            <form action="home.php?view=school_year_detail&action=school_year_reactivation" method="POST">
                               <input type="hidden" name="sycode" value="<?php echo $_GET['sycode']; ?>" class="form-control">
                               <button type="submit" name="activate" style="width:100%;" class="btn btn-primary">ReActivate School Year</button>
                            </form>    
                            <?php } ?>
                            <hr />
                            <div class="col-sm-12 col-sm-offset-2">
                                                <div class="row">
                                                    <table id="mySchoolYearInfoTable" class="table table-striped" style="text-align:center;">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">#</th>
                                                                <th scope="col">GRADE</th>
                                                                <th scope="col">SECTION</th>
                                                                <th scope="col">MIN</th>
                                                                <th scope="col">MAX</th>
                                                                <th scope="col">CAPACITY</th>
                                                                <th scope="col">ROOM</th>
                                                                <th scope="col">ACTION</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php 
                                                                $schoolYearInformation = $portCont->getSchoolYearDetailsInformation($sycode);
                                                                if (!empty($schoolYearInformation)) {
                                                                    foreach ($schoolYearInformation as $key => $value) {     
                                                            ?>
                                                            <tr>
                                                                <th scope="row"><?php echo $schoolYearInformation[$key]['sid']; ?></th>
                                                                <td><?php echo $schoolYearInformation[$key]['grade']; ?></td>
                                                                <td><?php echo $schoolYearInformation[$key]['section_name']; ?></td>
                                                                <td><?php echo $schoolYearInformation[$key]['min']; ?></td>
                                                                <td><?php echo $schoolYearInformation[$key]['max']; ?></td>
                                                                <td><?php echo $schoolYearInformation[$key]['student_max']; ?></td>
                                                                <td><?php echo $schoolYearInformation[$key]['room']; ?> - <?php echo $schoolYearInformation[$key]['building']; ?></td>
                                                                <td>
                                                                  
                                                                <a href='#editInfoModal_<?php echo $schoolYearInformation[$key]['sid']; ?>' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#editInfoModal_<?php echo $schoolYearInformation[$key]['sid']; ?>'>Edit</a>

                                                                  
                                                                </td>
                                                            </tr>
                                                            <?php include('modal/edit_details_modal.php'); ?>
                                                             <?php } } ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">SCHOOL INFORMATION UPLOAD</h6>
                                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="pills-grade-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-grade" type="button" role="tab" aria-controls="pills-grade"
                                            aria-selected="true">STEP 1 : ADD GRADE</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-section-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-section" type="button" role="tab"
                                            aria-controls="pills-section" aria-selected="false">STEP 2 : ADD SECTION</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-room-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-room" type="button" role="tab"
                                            aria-controls="pills-room" aria-selected="false">STEP 3 : ADD ROOM</button>
                                    </li>
                                </ul>
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-grade" role="tabpanel" aria-labelledby="pills-grade-tab">
                                       <h5>ADD GRADE<h5>
                                       <form action="home.php?view=school_year_detail&action=school_year_detail_grade" method="POST"> 
                                        <div class="form-floating mb-3">
                                            <input type="hidden" name="sycode" value="<?php echo $_GET['sycode']; ?>" class="form-control">
                                            <input type="text" name="grade" class="form-control" id="floatingInput">
                                            <label for="floatingInput">GRADE</label>
                                        </div>
                                        <button type="submit" name="add" style="width:100%;" class="btn btn-primary">Add School Year</button>
                                      </form>

                                      <div class="bg-light rounded h-100 p-4">
                                        <h6 class="mb-4">GRADE LEVEL</h6>
                                        <div class="col-sm-12 col-sm-offset-2">
			                               <div class="row">
                                                <table id="myGradeTable" class="table table-striped" style="text-align:center;">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">GRADE</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php 
                                                            $schoolYearGrade = $portCont->getSchoolYearDetailsGrade($sycode);
                                                            if (!empty($schoolYearGrade)) {
                                                                foreach ($schoolYearGrade as $key => $value) {     
                                                        ?>
                                                        <tr>
                                                            <th scope="row"><?php echo $schoolYearGrade[$key]['gid']; ?></th>
                                                            <td><?php echo $schoolYearGrade[$key]['grade']; ?></td>
                                                        </tr>
                                                        <?php } } ?>
                                                    </tbody>
                                                </table>
                                              </div>
                                            </div>    
                                    </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-section" role="tabpanel" aria-labelledby="pills-section-tab">
                                        <h5>ADD SECTION<h5>
                                        <form action="home.php?view=school_year_detail&action=school_year_detail_section" method="POST"> 
                                        <input type="hidden" name="sycode" value="<?php echo $_GET['sycode']; ?>" class="form-control">
                                            <div class="form-floating mb-3">
                                                <select class="form-control" name="gid" id="floatingInput">
                                                    <?php 
                                                        $schoolYearOptionGrade = $portCont->getSchoolYearDetailsGrade($sycode);
                                                        if (!empty($schoolYearOptionGrade)) {
                                                            foreach ($schoolYearOptionGrade as $key => $value) {     
                                                    ?>  
                                                     <option value="<?php echo $schoolYearOptionGrade[$key]['gid']; ?>"><?php echo $schoolYearOptionGrade[$key]['grade']; ?></option>       
                                                    <?php } } ?>
                                                </select>
                                                <label for="floatingInput">GRADE</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input type="text" name="section_name" class="form-control" id="floatingInput">
                                                <label for="floatingInput">SECTION</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input type="text" name="min" class="form-control" id="floatingInput">
                                                <label for="floatingInput">MIN AVE</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input type="text" name="max" class="form-control" id="floatingInput">
                                                <label for="floatingInput">MAX AVE</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input type="text" name="student_max" class="form-control" id="floatingInput">
                                                <label for="floatingInput">CAPACITY</label>
                                            </div>
                                            <button type="submit" name="add" style="width:100%;" class="btn btn-primary">Add School Year</button>
                                        </form>

                                        <div class="bg-light rounded h-100 p-4">
                                            <h6 class="mb-4">SECTION & GRADE</h6>
                                                <div class="col-sm-12 col-sm-offset-2">
                                                <div class="row">
                                                    <table id="mySectionTable" class="table table-striped" style="text-align:center;">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">#</th>
                                                                <th scope="col">GRADE</th>
                                                                <th scope="col">SECTION</th>
                                                                <th scope="col">MIN</th>
                                                                <th scope="col">MAX</th>
                                                                <th scope="col">CAPACITY</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php 
                                                                $schoolYearSection = $portCont->getSchoolYearDetailsSection($sycode);
                                                                if (!empty($schoolYearSection)) {
                                                                    foreach ($schoolYearSection as $key => $value) {     
                                                            ?>
                                                            <tr>
                                                                <th scope="row"><?php echo $schoolYearSection[$key]['gid']; ?></th>
                                                                <td><?php echo $schoolYearSection[$key]['grade']; ?></td>
                                                                <td><?php echo $schoolYearSection[$key]['section_name']; ?></td>
                                                                <td><?php echo $schoolYearSection[$key]['min']; ?></td>
                                                                <td><?php echo $schoolYearSection[$key]['max']; ?></td>
                                                                <td><?php echo $schoolYearSection[$key]['student_max']; ?></td>
                                                            </tr>
                                                            <?php } } ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                </div>
                                       </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-room" role="tabpanel" aria-labelledby="pills-room-tab">
                                    <h5>ADD ROOM FOR SECTION<h5>
                                       <form action="home.php?view=school_year_detail&action=school_year_detail_room" method="POST"> 
                                            <div class="form-floating mb-3">
                                                <input type="hidden" name="sycode" value="<?php echo $_GET['sycode']; ?>" class="form-control">
                                                <select class="form-control" name="sid" id="floatingInput">
                                                    <?php 
                                                            $schoolYearOptionSection = $portCont->getSchoolYearDetailsSectionDistinc($sycode);
                                                            if (!empty($schoolYearOptionSection)) {
                                                                foreach ($schoolYearOptionSection as $key => $value) {     
                                                        ?>  
                                                        <option value="<?php echo $schoolYearOptionSection[$key]['sid']; ?>"><?php echo $schoolYearOptionSection[$key]['section_name']; ?> - <?php echo $schoolYearOptionSection[$key]['grade']; ?></option>       
                                                    <?php } } ?>
                                                </select>
                                                <label for="floatingInput">SECTION</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <select class="form-control" name="rid" id="floatingInput">
                                                    <?php 
                                                            $schoolYearOptionRoom = $portCont->getSchoolYearDetailsRoom();
                                                            if (!empty($schoolYearOptionRoom)) {
                                                                foreach ($schoolYearOptionRoom as $key => $value) {     
                                                        ?>  
                                                        <option value="<?php echo $schoolYearOptionRoom[$key]['id']; ?>"><?php echo $schoolYearOptionRoom[$key]['building']; ?> | <?php echo $schoolYearOptionRoom[$key]['room']; ?></option>       
                                                    <?php } } ?>
                                                </select>
                                                <label for="floatingInput">ROOM</label>
                                            </div>
                                            <button type="submit" name="add" style="width:100%;" class="btn btn-primary">Add Room</button>
                                        </form>

                                        <div class="bg-light rounded h-100 p-4">
                                            <h6 class="mb-4">ROOM LEGEND</h6>
                                                <div class="col-sm-12 col-sm-offset-2">
                                                <div class="row">
                                                    <table id="myRoomTable" class="table table-striped" style="text-align:center;">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">#</th>
                                                                <th scope="col">ROOM</th>
                                                                <th scope="col">BUILDING</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php 
                                                                $schoolYearRoomDetails = $portCont->getSchoolYearDetailsRoom();
                                                                if (!empty($schoolYearRoomDetails)) {
                                                                    foreach ($schoolYearRoomDetails as $key => $value) {     
                                                            ?>
                                                            <tr>
                                                                <th scope="row"><?php echo $schoolYearRoomDetails[$key]['id']; ?></th>
                                                                <td><?php echo $schoolYearRoomDetails[$key]['room']; ?></td>
                                                                <td><?php echo $schoolYearRoomDetails[$key]['building']; ?></td>
                                                            </tr>
                                                            <?php } } ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                </div>
                                       </div>
                                    </div>
                                   
                        </div>
                    </div>
                </div>
            </div>
