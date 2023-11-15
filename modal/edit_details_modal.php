<div class="modal fade" id="editInfoModal_<?php echo $schoolYearInformation[$key]['sid']; ?>" tabindex="-1" role="dialog" aria-labelledby="editInfoModalLabel" aria-hidden="true">
<form method="POST" action="home.php?view=school_year_detail&action=school_year_information">
   <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editInfoModalLabel">EDIT INFORMATION </h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close" style="border:none;">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
                <div class="modal-body">
                    <input type="hidden" class="form-control" name="sid" value="<?php echo $schoolYearInformation[$key]['sid']; ?>">
                    <input type="hidden" class="form-control" name="sycode" value="<?php echo $schoolYearInformation[$key]['sycode']; ?>">
                    <div class="row form-group">
                        
                      <div class="form-floating mb-3">
                         <input type="text" name="section_name" value="<?php echo $schoolYearInformation[$key]['section_name']; ?>" class="form-control" id="floatingPassword">
                         <label for="floatingPassword">SEC</label>
                      </div>

                      <div class="form-floating mb-3">
                         <input type="text" name="min" value="<?php echo $schoolYearInformation[$key]['min']; ?>" class="form-control" id="floatingPassword">
                         <label for="floatingPassword">MIN</label>
                      </div>

                      <div class="form-floating mb-3">
                         <input type="text" name="max" value="<?php echo $schoolYearInformation[$key]['max']; ?>" class="form-control" id="floatingPassword">
                         <label for="floatingPassword">MAX</label>
                      </div>

                      <div class="form-floating mb-3">
                         <input type="text" name="student_max" value="<?php echo $schoolYearInformation[$key]['student_max']; ?>" class="form-control" id="floatingPassword">
                         <label for="floatingPassword">CAPACITY</label>
                      </div>


                      
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




<div class="modal fade" id="editInfoGradeModal_<?php echo $schoolYearInformation[$key]['sid']; ?>" tabindex="-1" role="dialog" aria-labelledby="editInfoModalLabel" aria-hidden="true">
<form method="POST" action="home.php?view=school_year_detail&action=updateGradeRoom">
   <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editInfoModalLabel">EDIT INFORMATION GRADE & ROOM</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close" style="border:none;">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
                <div class="modal-body">

                                          <div class="form-floating mb-3">
                                          <input type="hidden" class="form-control" name="sid" value="<?php echo $schoolYearInformation[$key]['sid']; ?>">
                                          <input type="hidden" class="form-control" name="sycode" value="<?php echo $schoolYearInformation[$key]['sycode']; ?>">
                                                <select class="form-control" name="gid" id="floatingInput">
                                                <option value="<?php echo $schoolYearInformation[$key]['gid']; ?>"><?php echo $schoolYearInformation[$key]['grade']; ?> (current)</option>
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
                                                <select class="form-control" name="rid" id="floatingInput">
                                                <option value="<?php echo $schoolYearInformation[$key]['rid']; ?>"><?php echo $schoolYearInformation[$key]['room']; ?> - <?php echo $schoolYearInformation[$key]['building']; ?> (current)</option>
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

                   
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <input type="submit" name="update" class="btn btn-primary" value="Save" />
                </div>
        </div>
    </div>
 </form>
</div>


