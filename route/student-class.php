            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">MY QR</h6>
                                    <hr />
                                    
                                    <center><img src='<?php echo $apiUrl; ?>' alt='QR Code'></center>

                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">MY DETAILS</h6>
                                    <hr />
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput"
                                        value="<?php echo $info[0]['fname']; ?>" readonly="">
                                    <label for="floatingInput">Fullname</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput"
                                        value="<?php echo $info[0]['uid']; ?>" readonly="">
                                    <label for="floatingInput">LRN</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput"
                                        value="<?php echo $info[0]['grade']; ?>" readonly="">
                                    <label for="floatingInput">Grade</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput"
                                        value="<?php echo $info[0]['section_name']; ?>" readonly="">
                                    <label for="floatingInput">SECTION</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput"
                                        value="<?php echo $info[0]['email']; ?>" readonly="">
                                    <label for="floatingInput">EMAIL</label>
                                </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">MY ATTENDANCE</h6>
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
                                     <table id="myAttendanceToday" class="table table-striped" style="text-align:center;">
                                                  <thead>
                                                      <tr>
                                                        <th scope="col">AID</th>
                                                        <th scope="col">DATE</th>
                                                      </tr>
                                                   </thead>
                                                 <tbody>
                                                <?php 
                                                $uid = $userSession[0]['uid'];
                                                $attendanceToday = $portCont->myAttendanceMonitoringTodayGroup($uid);
                                                if (!empty($attendanceToday)) {
                                                    foreach ($attendanceToday as $key => $value) {     
                                                ?>
                                                <tr>
                                                    <td><?php echo $attendanceToday[$key]['scid']; ?></td>
                                                    <td><?php echo $attendanceToday[$key]['date_inserted']; ?></td>
                                                </tr>
                                            <?php } } ?>
                                         </tbody>
                                     </table>
                                </div>
                                <div class="tab-pane fade" id="pills-week" role="tabpanel" aria-labelledby="pills-week-tab">
                                    NOTE : This is your weekly attendance
                                    <table id="myAttendanceWeekly" class="table table-striped" style="text-align:center;">
                                                  <thead>
                                                      <tr>
                                                        <th scope="col">AID</th>
                                                        <th scope="col">DATE</th>
                                                      </tr>
                                                   </thead>
                                                 <tbody>
                                                <?php 
                                                $uid = $userSession[0]['uid'];
                                                $attendanceToday = $portCont->myAttendanceMonitoringWeekGroup($uid);
                                                if (!empty($attendanceToday)) {
                                                    foreach ($attendanceToday as $key => $value) {     
                                                ?>
                                                <tr>
                                                    <td><?php echo $attendanceToday[$key]['scid']; ?></td>
                                                    <td><?php echo $attendanceToday[$key]['date_inserted']; ?></td>
                                                </tr>
                                            <?php } } ?>
                                         </tbody>
                                     </table>
                                </div>
                                <div class="tab-pane fade" id="pills-monthly" role="tabpanel" aria-labelledby="pills-monthly-tab">
                                    NOTE : This is your monthly attendance
                                    <table id="myAttendanceMonthly" class="table table-striped" style="text-align:center;">
                                                  <thead>
                                                      <tr>
                                                        <th scope="col">AID</th>
                                                        <th scope="col">DATE</th>
                                                      </tr>
                                                   </thead>
                                                 <tbody>
                                                <?php 
                                                $uid = $userSession[0]['uid'];
                                                $attendanceToday = $portCont->myAttendanceMonitorinMonthlyGroup($uid);
                                                if (!empty($attendanceToday)) {
                                                    foreach ($attendanceToday as $key => $value) {     
                                                ?>
                                                <tr>
                                                    <td><?php echo $attendanceToday[$key]['scid']; ?></td>
                                                    <td><?php echo $attendanceToday[$key]['date_inserted']; ?></td>
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