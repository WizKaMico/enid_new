             <?php if(!empty($_GET['view'])){ ?>
                <?php if($_GET['view'] == 'home') { ?>
                    <a href="home.php?view=home" class="nav-item nav-link active"><i class="fa fa-columns"></i> Dashboard</a>
                    <a href="home.php?view=request" class="nav-item nav-link"><i class="fas fa-edit"></i></i> Student Request</a>
                    <a href="home.php?view=myclass" class="nav-item nav-link"><i class="fa fa-question-circle"></i>  My Class</a>
                    <a href="home.php?view=monitoring" class="nav-item nav-link"><i class="fa fa-desktop"></i> Monitoring</a>
                    <a href="logout.php" class="nav-item nav-link"><i class="fa fa-desktop"></i> Logout</a>
                <?php } else if($_GET['view'] == 'request') { ?>
                    <a href="home.php?view=home" class="nav-item nav-link"><i class="fa fa-columns"></i> Dashboard</a>
                    <a href="home.php?view=request" class="nav-item nav-link active"><i class="fas fa-edit"></i></i> Student Request</a>
                    <a href="home.php?view=myclass" class="nav-item nav-link"><i class="fa fa-question-circle"></i>  My Class</a>
                    <a href="home.php?view=monitoring" class="nav-item nav-link"><i class="fa fa-desktop"></i> Monitoring</a>
                    <a href="logout.php" class="nav-item nav-link"><i class="fa fa-desktop"></i> Logout</a>
                <?php } else if($_GET['view'] == 'request_history') { ?>   
                    <a href="home.php?view=home" class="nav-item nav-link"><i class="fa fa-columns"></i> Dashboard</a>
                    <a href="home.php?view=request" class="nav-item nav-link active"><i class="fas fa-edit"></i></i> Student Request</a>
                    <a href="home.php?view=myclass" class="nav-item nav-link"><i class="fa fa-question-circle"></i>  My Class</a>
                    <a href="home.php?view=monitoring" class="nav-item nav-link"><i class="fa fa-desktop"></i> Monitoring</a>
                    <a href="logout.php" class="nav-item nav-link"><i class="fa fa-desktop"></i> Logout</a>
                <?php } else if($_GET['view'] == 'myclass') { ?> 
                    <a href="home.php?view=home" class="nav-item nav-link"><i class="fa fa-columns"></i> Dashboard</a>
                    <a href="home.php?view=request" class="nav-item nav-link"><i class="fas fa-edit"></i></i> Student Request</a>
                    <a href="home.php?view=myclass" class="nav-item nav-link active"><i class="fa fa-question-circle"></i>  My Class</a>
                    <a href="home.php?view=monitoring" class="nav-item nav-link"><i class="fa fa-desktop"></i> Monitoring</a>
                    <a href="logout.php" class="nav-item nav-link"><i class="fa fa-desktop"></i> Logout</a>
                <?php } else if($_GET['view'] == 'monitoring') { ?> 
                    <a href="home.php?view=home" class="nav-item nav-link"><i class="fa fa-columns"></i> Dashboard</a>
                    <a href="home.php?view=request" class="nav-item nav-link"><i class="fas fa-edit"></i></i> Student Request</a>
                    <a href="home.php?view=myclass" class="nav-item nav-link"><i class="fa fa-question-circle"></i>  My Class</a>
                    <a href="home.php?view=monitoring" class="nav-item nav-link active"><i class="fa fa-desktop"></i> Monitoring</a>
                    <a href="logout.php" class="nav-item nav-link"><i class="fa fa-desktop"></i> Logout</a>
                <?php }  else { ?>
                    <a href="home.php?view=home" class="nav-item nav-link active"><i class="fa fa-columns"></i> Dashboard</a>
                    <a href="home.php?view=request" class="nav-item nav-link"><i class="fas fa-edit"></i></i> Student Request</a>
                    <a href="home.php?view=myclass" class="nav-item nav-link"><i class="fa fa-question-circle"></i>  My Class</a>
                    <a href="home.php?view=monitoring" class="nav-item nav-link"><i class="fa fa-desktop"></i> Monitoring</a>
                    <a href="logout.php" class="nav-item nav-link"><i class="fa fa-desktop"></i> Logout</a>
                <?php }  ?>
                <?php } else { ?>
                    <a href="home.php?view=home" class="nav-item nav-link active"><i class="fa fa-columns"></i> Dashboard</a>
                    <a href="home.php?view=request" class="nav-item nav-link"><i class="fas fa-edit"></i></i> Student Request</a>
                    <a href="home.php?view=myclass" class="nav-item nav-link"><i class="fa fa-question-circle"></i>  My Class</a>
                    <a href="home.php?view=monitoring" class="nav-item nav-link"><i class="fa fa-desktop"></i> Monitoring</a>
                    <a href="logout.php" class="nav-item nav-link"><i class="fa fa-desktop"></i> Logout</a>
                <?php } ?>