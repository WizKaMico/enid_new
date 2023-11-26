<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-4">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">GOOGLE MAP </h6>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3856.4475032652695!2d120.76205277511104!3d14.856234685660946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396510412e50b5d%3A0x75ed0b16e8d99e02!2sAbulalas%20Elementary%20School!5e0!3m2!1sfil!2sph!4v1693048633230!5m2!1sfil!2sph" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-4">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">MAP SPECIFIC </h6>
                            <div id="gridMapSpec" class="ag-theme-alpine" style="width: 100%; height: 300px;"></div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-4">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">MAP ROOMS AND BUILDINGS</h6>
                            <div id="puzzle-container"></div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">MAP ROOMS AND BUILDINGS</h6>
                            <div id="gridMap" class="ag-theme-alpine" style="width: 100%; height: 500px;"></div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">ADD ROOMS</h6>
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-buildingcreation-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-buildingcreation" type="button" role="tab" aria-controls="pills-buildingcreation"
                                        aria-selected="true">CREATE BUILDING</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-buildingupdate-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-buildingupdate" type="button" role="tab"
                                        aria-controls="pills-buildingupdate" aria-selected="false">UPDATE BUILDING / ROOM</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-buildingcreation" role="tabpanel" aria-labelledby="pills-buildingcreation-tab">
                                <form action="home.php?view=direction&action=buildingadd" method="POST">
                                        <div class="form-floating mb-3">
                                            <select name="mid" class="form-control"  id="statusSelect">
                                                <option value="1">BUILDING 1</option>
                                                <option value="2">BUILDING 2</option>
                                                <option value="3">BUILDING 3</option>
                                                <option value="4">BUILDING 4</option>
                                                <option value="5">BUILDING 5</option>
                                                <option value="6">BUILDING 6</option>
                                                <option value="7">BUILDING 7</option>
                                                <option value="8">BUILDING 8</option>
                                                <option value="9">BUILDING 9</option>
                                            </select>
                                            <label for="floatingPassword">MID</label>
                                        </div>

                                        <div class="form-floating mb-3">
                                             <input type="text" class="form-control" name="building" />
                                            <label for="floatingPassword">ROOM</label>
                                        </div>

                                        <div class="form-floating mb-3">
                                             <input type="text" class="form-control" name="room" />
                                            <label for="floatingPassword">BUILDING</label>
                                        </div>
               
                                        <div class="form-floating mb-3">
                                        <button type="submit" name="assign" style="width:100%;" class="btn btn-primary">CREATE</button>
                                        </div>
                                  </form>
                                </div>
                                <div class="tab-pane fade" id="pills-buildingupdate" role="tabpanel" aria-labelledby="pills-buildingupdate-tab">
                                <div class="bg-light rounded h-100 p-4">
                                        <h6 class="mb-4">GRADE LEVEL</h6>
                                          <div class="col-sm-12 col-sm-offset-2">
			                                 <div class="row">
                                                 <table id="myRoomTable" class="table table-striped" style="text-align:center;">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">#</th>
                                                                <th scope="col">ROOM</th>
                                                                <th scope="col">BUILDING</th>
                                                                <th scope="col">ACTION</th>
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
                                                                   <a href='#editRoomModal_<?php echo $schoolYearRoomDetails[$key]['id']; ?>' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#editRoomModal_<?php echo $schoolYearRoomDetails[$key]['id']; ?>'>Edit</a>  
                                                                </td> 
                                                            </tr>
                                                            <?php include('modal/edit_room_modal.php'); ?>
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


            <div id="myModal" class="modal1">
            <div class="modal1-content">
                <span class="close">&times;</span>
                <div id="modalContent" class="custom-modal-content">
                <hr />
                <form action="home.php?view=direction&action=generatemap" method="POST">
                <input type="hidden" name="pieceIdInput" id="pieceIdInput" readonly>
                <button type="submit" name="generate">GENERATE</button> 
                </form>
            

                </div>
            </div>
            </div>


            <style>


.modal1 {
  display: none;
  position: fixed;
  z-index: 1000;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5);
}

/* Styles for the modal content */
.modal1-content {
  background-color: #fff;
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-55%, -55%);
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
  width: 80%;
  max-width: 400px;
}


                /* Puzzle container */
#puzzle-container {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  grid-template-rows: repeat(3, 1fr);
  gap: 2px;
  border: 1px solid #000;
  width: 600px; /* Set container dimensions */
  height: 600px;
}

/* Puzzle piece */
.puzzle-piece {
  border: 1px solid #000;
  width: 100%; /* Adjust the dimensions */
  height: 100%; /* Adjust the dimensions */
  background-size: 600px 600px; /* Adjust this based on your container dimensions */
  cursor: pointer;
}

</style>