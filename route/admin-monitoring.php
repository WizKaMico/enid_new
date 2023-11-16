            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                   <div class="col-sm-12 col-xl-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">MY MONITORING</h6>
                                    <hr />
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-today-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-today" type="button" role="tab" aria-controls="pills-today"
                                        aria-selected="true">TODAY</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-week-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-week" type="button" role="tab"
                                        aria-controls="pills-week" aria-selected="false">WEEK</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-monthly-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-monthly" type="button" role="tab"
                                        aria-controls="pills-monthly" aria-selected="false">MONTHLY</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-today" role="tabpanel" aria-labelledby="pills-today-tab">
                                    NOTE : This is your daily attendance
                                
                                        <table id="myMonitoringAttendanceToday" class="table table-striped" style="text-align:center;">
                                                  <thead>
                                                      <tr>
                                                        <th scope="col">AID</th>
                                                        <th scope="col">ROOM</th>
                                                        <th scope="col">BUILDING</th>
                                                        <th scope="col">TIME-IN</th>
                                                        <th scope="col">TIME-OUT</th>
                                                        <th scope="col">DATE</th>
                                                      </tr>
                                                   </thead>
                                                 <tbody>
                                                <?php 
                                                $uid = $userSession[0]['uid'];
                                                $attendanceToday = $portCont->myAttendanceMonitoringTodayOverall();
                                                if (!empty($attendanceToday)) {
                                                    foreach ($attendanceToday as $key => $value) {     
                                                ?>
                                                <tr>
                                                    <td><?php echo $attendanceToday[$key]['scid']; ?></td>
                                                    <td><?php echo $attendanceToday[$key]['room']; ?></td>
                                                    <td><?php echo $attendanceToday[$key]['building']; ?></td>
                                                    <td><?php echo $attendanceToday[$key]['timein']; ?></td>
                                                    <td><?php echo $attendanceToday[$key]['timeout']; ?></td>
                                                    <td><?php echo $attendanceToday[$key]['date_inserted']; ?></td>
                                                </tr>
                                            <?php } } ?>
                                         </tbody>
                                     </table>
                                    
                                   
                                </div>
                                <div class="tab-pane fade" id="pills-week" role="tabpanel" aria-labelledby="pills-week-tab">
                                    NOTE : This is your weekly attendance
                                    <form action="home.php?view=monitoring&action=GradeSectionSearchMonitoring" method="POST">
                                   <div class="form-floating mb-3"> 
                                        <select class="form-control" name="gid" id="floatingInput">
                                                        <?php 
                                                        
                                                            $schoolYearOptionGradeS = $portCont->getSchoolYearDetailsGradeSpecificEdit();
                                                            if (!empty($schoolYearOptionGradeS)) {
                                                                foreach ($schoolYearOptionGradeS as $key => $value) {     
                                                        ?>  
                                                        <option value="<?php echo $schoolYearOptionGradeS[$key]['gid']; ?>"><?php echo $schoolYearOptionGradeS[$key]['grade']; ?></option>       
                                                        <?php } } ?>
                                        </select>
                                        <label for="floatingInput">GRADE</label>
                                   </div>
                                   <div class="form-floating mb-3">
                                                <select class="form-control" name="sid" id="floatingInput">
                                                    <?php 
                                                            $schoolYearOptionSection = $portCont->getSchoolYearDetailsSectionDistincFilter();
                                                            if (!empty($schoolYearOptionSection)) {
                                                                foreach ($schoolYearOptionSection as $key => $value) {     
                                                        ?>  
                                                        <option value="<?php echo $schoolYearOptionSection[$key]['sid']; ?>"><?php echo $schoolYearOptionSection[$key]['section_name']; ?> - <?php echo $schoolYearOptionSection[$key]['grade']; ?></option>       
                                                    <?php } } ?>
                                                </select>
                                                <label for="floatingInput">SECTION</label>
                                    </div>
                                    <button type="submit" name="search" style="width:100%;" class="btn btn-primary">SEARCH</button>
                                    <hr />
                                    <button type="submit" name="clear" style="width:100%;" class="btn btn-primary">CLEAR</button>
                            </form>
                            <hr />
                               <?php if(!empty($_GET['gid']) && !empty($_GET['sid'])){ ?>
                                    <table id="myMonitoringAttendanceWeekly" class="table table-striped" style="text-align:center;">
                                                  <thead>
                                                      <tr>
                                                        <th scope="col">AID</th>
                                                        <th scope="col">NAME</th>
                                                        <th scope="col">SECTION</th>
                                                        <th scope="col">GRADE</th>
                                                        <th scope="col">ROOM</th>
                                                        <th scope="col">BUILDING</th>
                                                        <th scope="col">TIME-IN</th>
                                                        <th scope="col">TIME-OUT</th>
                                                        <th scope="col">DATE</th>
                                                      </tr>
                                                   </thead>
                                                 <tbody>
                                                <?php 
                                                 $sid = $_GET['sid'];
                                                 $gid = $_GET['gid'];
                                                $attendanceToday = $portCont->myAttendanceMonitoringOverallNoSpecificSearchable($gid, $sid);
                                                if (!empty($attendanceToday)) {
                                                    foreach ($attendanceToday as $key => $value) {     
                                                ?>
                                                <tr>
                                                    <td><?php echo $attendanceToday[$key]['scid']; ?></td>
                                                    <td><?php echo $attendanceToday[$key]['fname']; ?></td>
                                                    <td><?php echo $attendanceToday[$key]['section_name']; ?></td>
                                                    <td><?php echo $attendanceToday[$key]['grade']; ?></td>
                                                    <td><?php echo $attendanceToday[$key]['room']; ?></td>
                                                    <td><?php echo $attendanceToday[$key]['building']; ?></td>
                                                    <td><?php echo $attendanceToday[$key]['timein']; ?></td>
                                                    <td><?php echo $attendanceToday[$key]['timeout']; ?></td>
                                                    <td><?php echo $attendanceToday[$key]['date_inserted']; ?></td>
                                                </tr>
                                            <?php } } ?>
                                         </tbody>
                                      </table>
                                      <?php } else { ?>
                                        <table id="myMonitoringAttendanceWeekly" class="table table-striped" style="text-align:center;">
                                                  <thead>
                                                      <tr>
                                                        <th scope="col">AID</th>
                                                        <th scope="col">NAME</th>
                                                        <th scope="col">SECTION</th>
                                                        <th scope="col">GRADE</th>
                                                        <th scope="col">ROOM</th>
                                                        <th scope="col">BUILDING</th>
                                                        <th scope="col">TIME-IN</th>
                                                        <th scope="col">TIME-OUT</th>
                                                        <th scope="col">DATE</th>
                                                      </tr>
                                                   </thead>
                                                 <tbody>
                                                <?php 
                                                $attendanceToday = $portCont->myAttendanceMonitoringOverallNoSpecific();
                                                if (!empty($attendanceToday)) {
                                                    foreach ($attendanceToday as $key => $value) {     
                                                ?>
                                                <tr>
                                                    <td><?php echo $attendanceToday[$key]['scid']; ?></td>
                                                    <td><?php echo $attendanceToday[$key]['fname']; ?></td>
                                                    <td><?php echo $attendanceToday[$key]['section_name']; ?></td>
                                                    <td><?php echo $attendanceToday[$key]['grade']; ?></td>
                                                    <td><?php echo $attendanceToday[$key]['room']; ?></td>
                                                    <td><?php echo $attendanceToday[$key]['building']; ?></td>
                                                    <td><?php echo $attendanceToday[$key]['timein']; ?></td>
                                                    <td><?php echo $attendanceToday[$key]['timeout']; ?></td>
                                                    <td><?php echo $attendanceToday[$key]['date_inserted']; ?></td>
                                                </tr>
                                            <?php } } ?>
                                         </tbody>
                                      </table>
                                    <?php } ?>
                                </div>
                                <div class="tab-pane fade" id="pills-monthly" role="tabpanel" aria-labelledby="pills-monthly-tab">
                                    NOTE : This is your monthly attendance
                                    <form action="home.php?view=monitoring&action=GradeSectionSearchMonitoring" method="POST">
                                   <div class="form-floating mb-3"> 
                                        <select class="form-control" name="gid" id="floatingInput">
                                                        <?php 
                                                        
                                                            $schoolYearOptionGradeS = $portCont->getSchoolYearDetailsGradeSpecificEdit();
                                                            if (!empty($schoolYearOptionGradeS)) {
                                                                foreach ($schoolYearOptionGradeS as $key => $value) {     
                                                        ?>  
                                                        <option value="<?php echo $schoolYearOptionGradeS[$key]['gid']; ?>"><?php echo $schoolYearOptionGradeS[$key]['grade']; ?></option>       
                                                        <?php } } ?>
                                        </select>
                                        <label for="floatingInput">GRADE</label>
                                   </div>
                                   <div class="form-floating mb-3">
                                                <select class="form-control" name="sid" id="floatingInput">
                                                    <?php 
                                                            $schoolYearOptionSection = $portCont->getSchoolYearDetailsSectionDistincFilter();
                                                            if (!empty($schoolYearOptionSection)) {
                                                                foreach ($schoolYearOptionSection as $key => $value) {     
                                                        ?>  
                                                        <option value="<?php echo $schoolYearOptionSection[$key]['sid']; ?>"><?php echo $schoolYearOptionSection[$key]['section_name']; ?> - <?php echo $schoolYearOptionSection[$key]['grade']; ?></option>       
                                                    <?php } } ?>
                                                </select>
                                                <label for="floatingInput">SECTION</label>
                                    </div>
                                    <button type="submit" name="search" style="width:100%;" class="btn btn-primary">SEARCH</button>
                                    <hr />
                                    <button type="submit" name="clear" style="width:100%;" class="btn btn-primary">CLEAR</button>
                            </form>
                            <hr />
                               <?php if(!empty($_GET['gid']) && !empty($_GET['sid'])){ ?>
                                    <table id="myMonitoringAttendanceWeekly" class="table table-striped" style="text-align:center;">
                                                  <thead>
                                                      <tr>
                                                        <th scope="col">AID</th>
                                                        <th scope="col">NAME</th>
                                                        <th scope="col">SECTION</th>
                                                        <th scope="col">GRADE</th>
                                                        <th scope="col">ROOM</th>
                                                        <th scope="col">BUILDING</th>
                                                        <th scope="col">TIME-IN</th>
                                                        <th scope="col">TIME-OUT</th>
                                                        <th scope="col">DATE</th>
                                                      </tr>
                                                   </thead>
                                                 <tbody>
                                                <?php 
                                                 $sid = $_GET['sid'];
                                                 $gid = $_GET['gid'];
                                                $attendanceToday = $portCont->myAttendanceMonitoringOverallNoSpecificSearchable($gid, $sid);
                                                if (!empty($attendanceToday)) {
                                                    foreach ($attendanceToday as $key => $value) {     
                                                ?>
                                                <tr>
                                                    <td><?php echo $attendanceToday[$key]['scid']; ?></td>
                                                    <td><?php echo $attendanceToday[$key]['fname']; ?></td>
                                                    <td><?php echo $attendanceToday[$key]['section_name']; ?></td>
                                                    <td><?php echo $attendanceToday[$key]['grade']; ?></td>
                                                    <td><?php echo $attendanceToday[$key]['room']; ?></td>
                                                    <td><?php echo $attendanceToday[$key]['building']; ?></td>
                                                    <td><?php echo $attendanceToday[$key]['timein']; ?></td>
                                                    <td><?php echo $attendanceToday[$key]['timeout']; ?></td>
                                                    <td><?php echo $attendanceToday[$key]['date_inserted']; ?></td>
                                                </tr>
                                            <?php } } ?>
                                         </tbody>
                                      </table>
                                      <?php } else { ?>
                                        <table id="myMonitoringAttendanceWeekly" class="table table-striped" style="text-align:center;">
                                                  <thead>
                                                      <tr>
                                                        <th scope="col">AID</th>
                                                        <th scope="col">NAME</th>
                                                        <th scope="col">SECTION</th>
                                                        <th scope="col">GRADE</th>
                                                        <th scope="col">ROOM</th>
                                                        <th scope="col">BUILDING</th>
                                                        <th scope="col">TIME-IN</th>
                                                        <th scope="col">TIME-OUT</th>
                                                        <th scope="col">DATE</th>
                                                      </tr>
                                                   </thead>
                                                 <tbody>
                                                <?php 
                                                $attendanceToday = $portCont->myAttendanceMonitoringOverallNoSpecific();
                                                if (!empty($attendanceToday)) {
                                                    foreach ($attendanceToday as $key => $value) {     
                                                ?>
                                                <tr>
                                                    <td><?php echo $attendanceToday[$key]['scid']; ?></td>
                                                    <td><?php echo $attendanceToday[$key]['fname']; ?></td>
                                                    <td><?php echo $attendanceToday[$key]['section_name']; ?></td>
                                                    <td><?php echo $attendanceToday[$key]['grade']; ?></td>
                                                    <td><?php echo $attendanceToday[$key]['room']; ?></td>
                                                    <td><?php echo $attendanceToday[$key]['building']; ?></td>
                                                    <td><?php echo $attendanceToday[$key]['timein']; ?></td>
                                                    <td><?php echo $attendanceToday[$key]['timeout']; ?></td>
                                                    <td><?php echo $attendanceToday[$key]['date_inserted']; ?></td>
                                                </tr>
                                            <?php } } ?>
                                         </tbody>
                                      </table>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>