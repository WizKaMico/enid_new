



<div class="modal fade" id="editFreshModal_<?php echo $schoolFreshmen[$key]['eid']; ?>" tabindex="-1" role="dialog" aria-labelledby="editInfoModalLabel" aria-hidden="true">
<form method="POST" action="home.php?view=enrollment&action=enroll_fresh">
   <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editInfoModalLabel">EDIT INFORMATION : <?php echo $schoolFreshmen[$key]['uid']; ?></h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close" style="border:none;">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
               <div class="row form-group">
                    <input type="hidden" class="form-control" name="eid" value="<?php echo $schoolFreshmen[$key]['eid']; ?>">
                    <input type="hidden" class="form-control" name="uid" value="<?php echo $schoolFreshmen[$key]['uid']; ?>">
                    
                    <div class="col-sm-2">
                        <label class="control-label modal-label">LEVEL:</label>
                    </div>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="gid" value="<?php echo  $preAppGrade; ?>" readonly="">
                    </div>

                    <div class="col-sm-2">
                        <label class="control-label modal-label">STATUS:</label>
                    </div>
                    <div class="col-sm-10">
                      <select class="form-control" name="status">
                          <option value="APPROVED">APPROVED</option>
                          <option value="NOT APPROVED">NOT APPROVED</option>
                      </select>
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

<div class="modal fade" id="editTransModal_<?php echo $schoolTrans[$key]['eid']; ?>" tabindex="-1" role="dialog" aria-labelledby="editInfoModalLabel" aria-hidden="true">
<form method="POST" action="home.php?view=enrollment&action=enroll_trans">
   <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editInfoModalLabel">EDIT INFORMATION :  <?php echo $schoolTrans[$key]['uid']; ?> </h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close" style="border:none;">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
              <div class="row form-group">
                    <input type="hidden" class="form-control" name="eid" value="<?php echo $schoolTrans[$key]['eid']; ?>">
                    <input type="hidden" class="form-control" name="uid" value="<?php echo $schoolTrans[$key]['uid']; ?>">
                    <input type="hidden" class="form-control" name="sycode" value="<?php echo $schoolTrans[$key]['sycode']; ?>">
                    
                    <div class="col-sm-2">
                        <label class="control-label modal-label">LEVEL:</label>
                    </div>
                    <div class="col-sm-10">
                      <select class="form-control" name="gid">
                            <?php 
                                $sycode = $schoolTrans[$key]['sycode']; 
                                $schoolYearOptionGrade = $portCont->getSchoolYearDetailsGrade($sycode);
                                    if (!empty($schoolYearOptionGrade)) {
                                        foreach ($schoolYearOptionGrade as $key => $value) {     
                                ?>  
                                        <?php if(strtoupper($schoolYearOptionGrade[$key]['grade']) == 'GRADE 1') { ?>

                                        <?php } else { ?>
                                        <option value="<?php echo $schoolYearOptionGrade[$key]['gid']; ?>"><?php echo $schoolYearOptionGrade[$key]['grade']; ?></option>       
                                        <?php } ?>    
                               <?php } } ?>
                      </select>
                    </div>
                    <div class="col-sm-2">
                        <label class="control-label modal-label">STATUS:</label>
                    </div>
                    <div class="col-sm-10">
                      <select class="form-control" name="status">
                          <option value="APPROVED">APPROVED</option>
                          <option value="NOT APPROVED">NOT APPROVED</option>
                      </select>
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

