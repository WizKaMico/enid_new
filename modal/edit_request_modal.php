<div class="modal fade" id="editRequestModal_<?php echo $allRequest[$key]['reqid']; ?>" tabindex="-1" role="dialog" aria-labelledby="editInfoModalLabel" aria-hidden="true">
<form method="POST" action="home.php?view=enrollment&action=requestHistory">
   <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editInfoModalLabel">EDIT REQUEST : <?php echo $allRequest[$key]['uid']; ?> | <?php echo $allRequest[$key]['type']; ?></h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close" style="border:none;">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
              <div class="row form-group">
                <input type="hidden" class="form-control" name="reqid" value="<?php echo $allRequest[$key]['reqid']; ?>">
                <div class="col-sm-2">
                    <label class="control-label modal-label">STATUS:</label>
                </div>
                <div class="col-sm-10">
                    <select name="status" class="form-control">
                       <option value="<?php echo $allRequest[$key]['requeststatus']; ?>"><?php echo $allRequest[$key]['requeststatus']; ?> (CURRENT)</option>
                       <option value="APPROVED">APPROVED</option>
                       <option value="REJECTED">REJECTED</option>
                    </select>
                </div>
                <br />
                <br />
                <div class="col-sm-2">
                    <label class="control-label modal-label">NOTE:</label>
                </div>
                <div class="col-sm-10">
                    <textarea class="form-control" cols="5" rows="10" name="note" required=""></textarea>
                </div>
              </div>
            </div>
            <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <input type="submit" name="update" class="btn btn-primary" value="Update" />
            </div>
        </div>
    </div>
</form>
</div>