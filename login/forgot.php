<div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4" >
                    <div class="rounded p-4 p-sm-5 my-4 mx-3"  style="background-color:#eece32">
                        <div class="align-items-center justify-content-between mb-3">
                              <center><img src="logo/main.png"/></center>
                        </div>
                    <form method="POST" action="index.php?action=forgot">
                        <div class="form-floating mb-3">
                            <select class="form-control" name="role" id="accessRole" onchange="updateLabel()">
                               <?php  
                                    
                                    $allDesignation = $portCont->designation(); 
                                    if (!empty($allDesignation)) {
                                        foreach ($allDesignation as $key => $value) {     
                                ?>
                                <option value="<?php echo $allDesignation[$key]['role']; ?>"><?php echo $allDesignation[$key]['role']; ?></option>
                                <?php } } ?>
                            </select>
                            <label for="floatingInput">Access Role</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="uid" class="form-control" id="uidInput" placeholder="UID" required="">
                            <label for="uidInput">UID (ADMIN)</label>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <a href="index.php?view=login">Return to login</a>
                        </div>
                        <button type="submit" name="forgot" class="btn btn-primary py-3 w-100 mb-4">validate</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>