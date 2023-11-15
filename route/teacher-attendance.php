<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                   <div class="col-sm-12 col-xl-12">
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
                                    <button onclick="printTable()">Print Table</button>
                                    <script>
                                    function printTable() {
                                    var table = document.getElementById("myMonitoringAttendanceTodayTeacher");
                                    if (table) {
                                        var newWin = window.open('', '_blank');
                                        newWin.document.write('<html><head><title>Print Table</title></head><body>');
                                        newWin.document.write('<h1></h1>');
                                        newWin.document.write(table.outerHTML);
                                        newWin.document.write('</body></html>');
                                        newWin.document.close();
                                        newWin.print();
                                    } else {
                                        console.error("Table not found");
                                    }
                                    }
                                    </script>
                                     <table id="myMonitoringAttendanceTodayTeacher" class="table table-striped" style="text-align:center;">
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
                                                $sid = $tinfo[0]['sid'];
                                                $attendanceToday = $portCont->myAttendanceMonitoringTodayTeacher($sid);
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
                                    <button onclick="printTable()">Print Table</button>
                                    <script>
                                    function printTable() {
                                    var table2 = document.getElementById("myMonitoringAttendanceWeeklyTeacher");
                                    if (table2) {
                                        var newWin2 = window.open('', '_blank');
                                        newWin2.document.write('<html><head><title>Print Table</title></head><body>');
                                        newWin2.document.write('<h1></h1>');
                                        newWin2.document.write(table2.outerHTML);
                                        newWin2.document.write('</body></html>');
                                        newWin2.document.close();
                                        newWin2.print();
                                    } else {
                                        console.error("Table not found");
                                    }
                                    }
                                    </script>
                                    <table id="myMonitoringAttendanceWeeklyTeacher" class="table table-striped" style="text-align:center;">
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
                                                $sid = $tinfo[0]['sid'];
                                                $attendanceToday = $portCont->myAttendanceMonitoringOverallTeacher($sid);
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
                                <div class="tab-pane fade" id="pills-monthly" role="tabpanel" aria-labelledby="pills-monthly-tab">
                                    NOTE : This is your monthly attendance
                                    <button onclick="printTable()">Print Table</button>
                                    <script>
                                    function printTable() {
                                    var table1 = document.getElementById("myMonitoringAttendanceMonthlyTeacher");
                                    if (table1) {
                                        var newWin1 = window.open('', '_blank');
                                        newWin1.document.write('<html><head><title>Print Table</title></head><body>');
                                        newWin1.document.write('<h1>PRINTING</h1>');
                                        newWin1.document.write(table1.outerHTML);
                                        newWin1.document.write('</body></html>');
                                        newWin1.document.close();
                                        newWin1.print();
                                    } else {
                                        console.error("Table not found");
                                    }
                                    }
                                    </script>
                                    <table id="myMonitoringAttendanceMonthlyTeacher" class="table table-striped" style="text-align:center;">
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
                                                $sid = $tinfo[0]['sid'];
                                                $attendanceToday = $portCont->myAttendanceMonitoringOverallTeacher($sid);
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>