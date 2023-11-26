           <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">STUDENT STATISTICS </h6>
                            <center><div id="piechart" style="width: 900px; height: 500px;"></div></center>
                            <hr />
                            <div class="tab">
                            <?php 
                                
                                $checkStat = $portCont->getSchoolYearDetailsGradeDetailStat();
                                if(!empty($checkStat)){
                                    foreach ($checkStat as $key => $value) {  
                                       
                            ?>

                                    
                                    <button class="tablinks" onclick="openCity(event, '<?php echo $checkStat[$key]['grade']; ?>')"><?php echo strtoupper($checkStat[$key]['grade']); ?> (<?php echo strtoupper($checkStat[$key]['sycode']); ?>)</button>
                                    

                            <?php } }  ?>
                            </div>

                            <?php 
                                
                                $checkStat = $portCont->getSchoolYearDetailsGradeDetailStat();
                                if(!empty($checkStat)){
                                    foreach ($checkStat as $key => $value) {  
                                    $gid = $checkStat[$key]['gid'];   
                            ?>

                                    <div id="<?php echo strtoupper($checkStat[$key]['grade']); ?>" class="tabcontent">
                                    <h3><?php echo strtoupper($checkStat[$key]['grade']); ?></h3>

                                    <hr />
                                    <iframe src="chart/index.php?gid=<?php echo $gid; ?>" style="border:none; width:100%; height:250px; " scrolling="no"></iframe>
                                    <hr />

                                       <table>
                                            <tr>
                                                <th>Fullname</th>
                                                <th>Grade</th>
                                                <th>Section</th>
                                                <th>Gender</th>
                                            </tr>
                                            <?php 

                                                $checkStatSyStudentSpecific = $portCont->checkStudentPerActiveSy($gid);
                                                if(!empty($checkStatSyStudentSpecific)){
                                                    foreach ($checkStatSyStudentSpecific as $key => $value) { 
                                            ?>
                                            <tr>
                                                <td><?php echo strtoupper($checkStatSyStudentSpecific[$key]['fname']); ?></td>
                                                <td><?php echo strtoupper($checkStatSyStudentSpecific[$key]['grade']); ?></td>
                                                <td><?php echo strtoupper($checkStatSyStudentSpecific[$key]['section_name']); ?></td>
                                                <td><?php echo strtoupper($checkStatSyStudentSpecific[$key]['gender']); ?></td>
                                            </tr>
                                            <?php } } ?>
                                        </table>

                                    </div>

                             <?php } }  ?>
                          

                        </div>
                    </div>
                </div>
            </div>

           

            <style>

                /* Style the tab */
            .tab {
            overflow: hidden;
            border: 1px solid #ccc;
            background-color: #f1f1f1;
            }

            /* Style the buttons inside the tab */
            .tab button {
            background-color: inherit;
            float: left;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 14px 16px;
            transition: 0.3s;
            font-size: 17px;
            }

            /* Change background color of buttons on hover */
            .tab button:hover {
            background-color: #ddd;
            }

            /* Create an active/current tablink class */
            .tab button.active {
            background-color: #ccc;
            }

            /* Style the tab content */
            .tabcontent {
            display: none;
            padding: 6px 12px;
            border: 1px solid #ccc;
            border-top: none;
            }

            .row {
            margin-left:-5px;
            margin-right:-5px;
            }
            
            .column {
            float: left;
            width: 50%;
            padding: 5px;
            }

            /* Clearfix (clear floats) */
            .row::after {
            content: "";
            clear: both;
            display: table;
            }

            table {
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
            border: 1px solid #ddd;
            }

            th, td {
            text-align: left;
            padding: 16px;
            }

            tr:nth-child(even) {
            background-color: #f2f2f2;
            }
            </style>