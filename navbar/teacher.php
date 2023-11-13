              <?php if(!empty($_GET['view'])){ ?>
                <?php if($_GET['view'] == 'home') { ?>
                    <a href="home.php?view=home" class="nav-item nav-link active"><i class="fa fa-columns"></i> Dashboard</a>
                    <a href="home.php?view=attendance" class="nav-item nav-link"><i class="fa fa-question-circle"></i> Attendance</a>
                    <a href="home.php?view=mystudent" class="nav-item nav-link"><i class="fa fa-desktop"></i> My Student</a>
                    <a href="logout.php" class="nav-item nav-link"><i class="fa fa-desktop"></i> Logout</a>
                <?php } else if($_GET['view'] == 'attendance') { ?> 
                    <a href="home.php?view=home" class="nav-item nav-link"><i class="fa fa-columns"></i> Dashboard</a>
                    <a href="home.php?view=attendance" class="nav-item nav-link active"><i class="fa fa-question-circle"></i>  Attendance</a>
                    <a href="home.php?view=mystudent" class="nav-item nav-link"><i class="fa fa-desktop"></i> My Student</a>
                    <a href="logout.php" class="nav-item nav-link"><i class="fa fa-desktop"></i> Logout</a>
                <?php } else if($_GET['view'] == 'mystudent') { ?> 
                    <a href="home.php?view=home" class="nav-item nav-link"><i class="fa fa-columns"></i> Dashboard</a>
                    <a href="home.php?view=attendance" class="nav-item nav-link"><i class="fa fa-question-circle"></i>  Attendance</a>
                    <a href="home.php?view=mystudent" class="nav-item nav-link active"><i class="fa fa-desktop"></i> My Student</a>
                    <a href="logout.php" class="nav-item nav-link"><i class="fa fa-desktop"></i> Logout</a>
                <?php }  else { ?>
                    <a href="home.php?view=home" class="nav-item nav-link active"><i class="fa fa-columns"></i> Dashboard</a>
                    <a href="home.php?view=attendance" class="nav-item nav-link"><i class="fa fa-question-circle"></i>  Attendance</a>
                    <a href="home.php?view=mystudent" class="nav-item nav-link"><i class="fa fa-desktop"></i> My Student</a>
                    <a href="logout.php" class="nav-item nav-link"><i class="fa fa-desktop"></i> Logout</a>
                <?php }  ?>
                <?php } else { ?>
                    <a href="home.php?view=home" class="nav-item nav-link active"><i class="fa fa-columns"></i> Dashboard</a>
                    <a href="home.php?view=attendance" class="nav-item nav-link"><i class="fa fa-question-circle"></i>  Attendance</a>
                    <a href="home.php?view=mystudent" class="nav-item nav-link"><i class="fa fa-desktop"></i> My Student</a>
                    <a href="logout.php" class="nav-item nav-link"><i class="fa fa-desktop"></i> Logout</a>
                <?php } ?>