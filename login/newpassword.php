<div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4" >
                    <div class="rounded p-4 p-sm-5 my-4 mx-3"  style="background-color:#eece32">
                        <div class="align-items-center justify-content-between mb-3">
                              <center><img src="logo/main.png"/></center>
                        </div>
                    <form method="POST" action="index.php?view=newpassword&action=newpasss">
                        <div class="form-floating mb-3">
                            <input type="hidden" name="uid" class="form-control" id="uidInput"  required="" value="<?php echo $_GET['uid']; ?>" readonly="">
                            <input type="password" name="newpassword" class="form-control" required="">
                            <label for="uidInput">NEW PASSWORD</label>
                        </div>
                        <button type="submit" name="newpasss" class="btn btn-primary py-3 w-100 mb-4">CHANGE</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>