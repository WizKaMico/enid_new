<div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4" >
                    <div class="rounded p-4 p-sm-5 my-4 mx-3"  style="background-color:#eece32">
                        <div class="align-items-center justify-content-between mb-3">
                              <center><img src="logo/main.png"/></center>
                        </div>
                    <h5>WELCOME! <?php echo strtoupper($userSession[0]['email']); ?></h5>
                    <form method="POST" action="security.php?action=security">
                        <div class="form-floating mb-3">
                            <input type="text" name="code" class="form-control" id="codeInput" placeholder="4-DIGIT CODE">
                            <label for="codeInput">4-DIGIT CODE</label>
                        </div>
                        <button type="submit" name="validate" class="btn btn-primary py-3 w-100 mb-4">Validate</button>
                    </form>
                    <form method="POST" action="security.php?action=generateSecurity">
                        <button type="submit" name="generate" class="btn btn-primary py-3 w-100 mb-4">Generate New Code</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>