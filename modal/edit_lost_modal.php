<div class="modal fade" id="editInfoLostModal_<?php echo $lostItem[$key]['fid']; ?>" tabindex="-1" role="dialog" aria-labelledby="editInfoModalLabel" aria-hidden="true">
<form method="POST" action="home.php?view=lost&action=updateLost" enctype="multipart/form-data">
   <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editInfoModalLabel">EDIT LOST INFORMATION </h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close" style="border:none;">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
                <div class="modal-body">
                <input type="hidden" class="form-control" name="fid" value="<?php echo $lostItem[$key]['fid']; ?>">
                    <div class="col-sm-2">
                        <label class="control-label modal-label">ITEM:</label>
                    </div>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="item" value="<?php echo $lostItem[$key]['item']; ?>">
                    </div>

                    <div class="col-sm-2">
                        <label class="control-label modal-label">FOUND BY:</label>
                    </div>
                    <div class="col-sm-10">
                                             <select class="form-control" name="foundby" id="floatingInput">
                                                <option value="<?php echo $lostItem[$key]['foundby']; ?>">(<?php echo $lostItem[$key]['foundby']; ?>)-<?php echo $lostItem[$key]['fname']; ?> (current)</option>
                                                    <?php 
                                                        $allActiveStud = $portCont->getStudentEnrollForCurrentSchoolYear();
                                                        if (!empty($allActiveStud)) {
                                                            foreach ($allActiveStud as $key => $value) {     
                                                    ?>  
                                                     <option value="<?php echo $allActiveStud[$key]['uid']; ?>">(<?php echo $allActiveStud[$key]['uid']; ?>) - <?php echo $allActiveStud[$key]['fname']; ?></option>       
                                                    <?php } } ?>
                                            </select>
                                                              
                    </div>

                    <div class="col-sm-2">
                        <label class="control-label modal-label">FOUND IN:</label>
                    </div>
                    <div class="col-sm-10">
                                             <select class="form-control" name="foundin" id="floatingInput">
                                                
                                                     <?php 
                                                            $schoolYearOptionRoom = $portCont->getSchoolYearDetailsRoom();
                                                            if (!empty($schoolYearOptionRoom)) {
                                                                foreach ($schoolYearOptionRoom as $key => $value) {     
                                                        ?>  
                                                        <option value="<?php echo $schoolYearOptionRoom[$key]['id']; ?>"><?php echo $schoolYearOptionRoom[$key]['building']; ?> | <?php echo $schoolYearOptionRoom[$key]['room']; ?></option>       
                                                    <?php } } ?>
                                            </select>
                                                              
                    </div>


                    <div class="col-sm-2">
                        <label class="control-label modal-label">STATUS:</label>
                    </div>
                    <div class="col-sm-10">
                                             <select class="form-control" name="status" id="floatingInput">
                                                <option value="LOST">LOST</option>
                                                <option value="FOUND">FOUND</option>
                                            </select>
                                                              
                    </div>

                    <div class="col-sm-2">
                        <label class="control-label modal-label">IMAGE:</label>
                    </div>
                                        <div class="col-sm-10">
                                            <input type="file" name="photo" class="form-control" id="floatingPassword">
                                        </div>

                                        <div class="col-sm-2">
                        <label class="control-label modal-label">note:</label>
                    </div>
                                        <div class="col-sm-10">
                                        <input type="text" name="another" class="form-control" id="floatingPassword">
                                        </div>

                                       

                   
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <input type="submit" name="update" class="btn btn-primary" value="Save" />
                </div>
        </div>
    </div>
 </form>
</div>
