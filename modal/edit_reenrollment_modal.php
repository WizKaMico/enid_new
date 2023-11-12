<div class="modal fade" id="editReEnrollModal_<?php echo $schoolStudents[$key]['uid']; ?>" tabindex="-1" role="dialog" aria-labelledby="editInfoModalLabel" aria-hidden="true">
<form method="POST" action="home.php?view=enrollment&action=reEnroll">
   <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editInfoModalLabel">EDIT INFORMATION : <?php echo $schoolStudents[$key]['uid']; ?></h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close" style="border:none;">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
              <div class="row form-group">
                <input type="hidden" class="form-control" name="rid" value="<?php echo $schoolStudents[$key]['rid']; ?>">
                <input type="hidden" class="form-control" name="uid" value="<?php echo $schoolStudents[$key]['uid']; ?>">
                <div class="col-sm-2">
                    <label class="control-label modal-label">LEVEL:</label>
                </div>
                <div class="col-sm-10">
                    <select name="sycode" class="form-control">
                    <?php 
                            $schoolYearActivated = $portCont->getYearActivated();
                                if (!empty($schoolYearActivated)) {
                                        foreach ($schoolYearActivated as $key => $value) {     
                        ?>  
                            <option value="<?php echo $schoolYearActivated[$key]['sycode']; ?>"><?php echo $schoolYearActivated[$key]['year_from']; ?> - <?php echo $schoolYearActivated[$key]['year_to']; ?> (<?php echo $schoolYearActivated[$key]['sycode']; ?>)</option>       
                        <?php } } ?>
                    </select>
                </div>
                <div class="col-sm-2">
                    <label class="control-label modal-label">AVE:</label>
                </div>
                <div class="col-sm-10">
                    <input type="number" name="average" class="form-control" />
                </div>
              </div>
            </div>
            <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <input type="submit" name="update" class="btn btn-primary" value="ENROLL" />
            </div>
        </div>
    </div>
</form>
</div>