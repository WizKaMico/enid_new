<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                   <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">TEACHER ATTENDANCE</h6>
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
                                    <a href="printattendance/daily.php?sid=<?php echo $tinfo[0]['sid']; ?>">Print Table</a>
                                     <table id="myMonitoringAttendanceTodayTeacher" class="table table-striped" style="text-align:center;">
                                                  <thead>
                                                      <tr>
                                                        <th scope="col">AID</th>
                                                        <th scope="col">STUDENT</th>
                                                        <th scope="col">ROOM</th>
                                                        <th scope="col">BUILDING</th>
                                                        <th scope="col">TIME-IN</th>
                                                        <th scope="col">TIME-OUT</th>
                                                        <th scope="col">DATE</th>
                                                      </tr>
                                                   </thead>
                                                 <tbody>
                                                <?php 
                                                $sid = $tinfo[0]['sid'];
                                                $attendanceToday = $portCont->myAttendanceMonitoringTodayTeacher($sid);
                                                if (!empty($attendanceToday)) {
                                                    foreach ($attendanceToday as $key => $value) {     
                                                ?>
                                                <tr>
                                                    <td><?php echo $attendanceToday[$key]['scid']; ?></td>
                                                    <td><?php echo $attendanceToday[$key]['fname']; ?></td>
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
                                    <a href="printattendance/print.php?sid=<?php echo $tinfo[0]['sid']; ?>">Print Table</a>
                                    
                                    <table id="myMonitoringAttendanceWeeklyTeacher" class="table table-striped" style="text-align:center;">
                                                  <thead>
                                                      <tr>
                                                        <th scope="col">AID</th>
                                                        <th scope="col">STUDENT</th>
                                                        <th scope="col">ROOM</th>
                                                        <th scope="col">BUILDING</th>
                                                        <th scope="col">TIME-IN</th>
                                                        <th scope="col">TIME-OUT</th>
                                                        <th scope="col">DATE</th>
                                                      </tr>
                                                   </thead>
                                                 <tbody>
                                                <?php 
                                                $sid = $tinfo[0]['sid'];
                                                $attendanceToday = $portCont->myAttendanceMonitoringOverallTeacherWeeek($sid);
                                                if (!empty($attendanceToday)) {
                                                    foreach ($attendanceToday as $key => $value) {     
                                                ?>
                                                <tr>
                                                    <td><?php echo $attendanceToday[$key]['scid']; ?></td>
                                                    <td><?php echo $attendanceToday[$key]['fname']; ?></td>
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
                                <div class="tab-pane fade" id="pills-monthly" role="tabpanel" aria-labelledby="pills-monthly-tab">
                                    NOTE : This is your monthly attendance
                                    <a href="printattendance/print.php?sid=<?php echo $tinfo[0]['sid']; ?>">Print Table</a>
                
                                    <table id="myMonitoringAttendanceMonthlyTeacher" class="table table-striped" style="text-align:center;">
                                                  <thead>
                                                      <tr>
                                                        <th scope="col">AID</th>
                                                        <th scope="col">STUDENT</th>
                                                        <th scope="col">ROOM</th>
                                                        <th scope="col">BUILDING</th>
                                                        <th scope="col">TIME-IN</th>
                                                        <th scope="col">TIME-OUT</th>
                                                        <th scope="col">DATE</th>
                                                      </tr>
                                                   </thead>
                                                 <tbody>
                                                <?php 
                                                $sid = $tinfo[0]['sid'];
                                                $attendanceToday = $portCont->myAttendanceMonitoringOverallTeacherMonth($sid);
                                                if (!empty($attendanceToday)) {
                                                    foreach ($attendanceToday as $key => $value) {     
                                                ?>
                                                <tr>
                                                    <td><?php echo $attendanceToday[$key]['scid']; ?></td>
                                                    <td><?php echo $attendanceToday[$key]['fname']; ?></td>
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
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">ROOMS</h6>
                            <table id="myRoomTable" class="table table-striped" style="text-align:center;">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">#</th>
                                                                <th scope="col">ROOM</th>
                                                                <th scope="col">BUILDING</th>
                                                                <th scope="col">SCAN SITE</th>
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
                                                                <td>
                                                                <!-- http://localhost/scan.php?room_id=1 -->
                                                                   <a class="btn btn" href="scan.php?room_id=<?php echo $schoolYearRoomDetails[$key]['id']; ?>" target="_blank">OPEN</a>
                                                                </td>
                                                            </tr>
                                                            <?php } } ?>
                                                        </tbody>
                                                    </table>

                        </div>
                    </div> 
                </div>
            </div>