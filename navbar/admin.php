                <?php if(!empty($_GET['view'])){ ?>
                <?php if($_GET['view'] == 'home') { ?>
                    <a href="home.php?view=home" class="nav-item nav-link active"><i class="fa fa-columns"></i> Dashboard</a>
                    <a href="home.php?view=request" class="nav-item nav-link"><i class="fas fa-edit"></i></i> Student Request</a>
                    <a href="home.php?view=enrollment" class="nav-item nav-link"><i class="fa fa-question-circle"></i>  Enrollment</a>
                    <a href="home.php?view=student-accounts" class="nav-item nav-link"><i class="fa fa-desktop"></i> Accounts</a>
                    <a href="home.php?view=teacher-accounts" class="nav-item nav-link"><i class="fa fa-desktop"></i> Teacher Accounts</a>
                    <a href="home.php?view=monitoring" class="nav-item nav-link"><i class="fa fa-desktop"></i> Monitoring</a>
                    <a href="home.php?view=schoolyear" class="nav-item nav-link"><i class="fa fa-book"></i> School Year</a>
                    <a href="home.php?view=announcement" class="nav-item nav-link"><i class="fa fa-bullhorn"></i> Announcement</a>
                    <a href="home.php?view=lost" class="nav-item nav-link"><i class="fa fa-question-circle"></i> Lost & Found</a>
                    <a href="logout.php" class="nav-item nav-link"><i class="fa fa-desktop"></i> Logout</a>
                <?php } else if($_GET['view'] == 'request') { ?>
                    <a href="home.php?view=home" class="nav-item nav-link"><i class="fa fa-columns"></i> Dashboard</a>
                    <a href="home.php?view=request" class="nav-item nav-link active"><i class="fas fa-edit"></i></i> Student Request</a>
                    <a href="home.php?view=enrollment" class="nav-item nav-link"><i class="fa fa-question-circle"></i>  Enrollment</a>
                    <a href="home.php?view=student-accounts" class="nav-item nav-link"><i class="fa fa-desktop"></i> Accounts</a>
                    <a href="home.php?view=teacher-accounts" class="nav-item nav-link"><i class="fa fa-desktop"></i> Teacher Accounts</a>
                    <a href="home.php?view=monitoring" class="nav-item nav-link"><i class="fa fa-desktop"></i> Monitoring</a>
                    <a href="home.php?view=schoolyear" class="nav-item nav-link"><i class="fa fa-book"></i> School Year</a>
                    <a href="home.php?view=announcement" class="nav-item nav-link"><i class="fa fa-bullhorn"></i> Announcement</a>
                    <a href="home.php?view=lost" class="nav-item nav-link"><i class="fa fa-question-circle"></i> Lost & Found</a>
                    <a href="logout.php" class="nav-item nav-link"><i class="fa fa-desktop"></i> Logout</a>
                <?php } else if($_GET['view'] == 'request_history') { ?>
                    <a href="home.php?view=home" class="nav-item nav-link"><i class="fa fa-columns"></i> Dashboard</a>
                    <a href="home.php?view=request" class="nav-item nav-link active"><i class="fas fa-edit"></i></i> Student Request</a>
                    <a href="home.php?view=enrollment" class="nav-item nav-link"><i class="fa fa-question-circle"></i>  Enrollment</a>
                    <a href="home.php?view=student-accounts" class="nav-item nav-link"><i class="fa fa-desktop"></i> Accounts</a>
                    <a href="home.php?view=teacher-accounts" class="nav-item nav-link"><i class="fa fa-desktop"></i> Teacher Accounts</a>
                    <a href="home.php?view=monitoring" class="nav-item nav-link"><i class="fa fa-desktop"></i> Monitoring</a>
                    <a href="home.php?view=schoolyear" class="nav-item nav-link"><i class="fa fa-book"></i> School Year</a>
                    <a href="home.php?view=announcement" class="nav-item nav-link"><i class="fa fa-bullhorn"></i> Announcement</a>
                    <a href="home.php?view=lost" class="nav-item nav-link"><i class="fa fa-question-circle"></i> Lost & Found</a>
                    <a href="logout.php" class="nav-item nav-link"><i class="fa fa-desktop"></i> Logout</a>
                <?php } else if($_GET['view'] == 'enrollment') { ?>
                    <a href="home.php?view=home" class="nav-item nav-link"><i class="fa fa-columns"></i> Dashboard</a>
                    <a href="home.php?view=request" class="nav-item nav-link"><i class="fas fa-edit"></i></i> Student Request</a>
                    <a href="home.php?view=enrollment" class="nav-item nav-link active"><i class="fa fa-question-circle"></i>  Enrollment</a>
                    <a href="home.php?view=student-accounts" class="nav-item nav-link"><i class="fa fa-desktop"></i> Accounts</a>
                    <a href="home.php?view=teacher-accounts" class="nav-item nav-link"><i class="fa fa-desktop"></i> Teacher Accounts</a>
                    <a href="home.php?view=monitoring" class="nav-item nav-link"><i class="fa fa-desktop"></i> Monitoring</a>
                    <a href="home.php?view=schoolyear" class="nav-item nav-link"><i class="fa fa-book"></i> School Year</a>
                    <a href="home.php?view=announcement" class="nav-item nav-link"><i class="fa fa-bullhorn"></i> Announcement</a>
                    <a href="home.php?view=lost" class="nav-item nav-link"><i class="fa fa-question-circle"></i> Lost & Found</a>
                    <a href="logout.php" class="nav-item nav-link"><i class="fa fa-desktop"></i> Logout</a>
                <?php } else if($_GET['view'] == 'student-accounts') { ?>
                    <a href="home.php?view=home" class="nav-item nav-link"><i class="fa fa-columns"></i> Dashboard</a>
                    <a href="home.php?view=request" class="nav-item nav-link"><i class="fas fa-edit"></i></i> Student Request</a>
                    <a href="home.php?view=enrollment" class="nav-item nav-link"><i class="fa fa-question-circle"></i>  Enrollment</a>
                    <a href="home.php?view=student-accounts" class="nav-item nav-link active"><i class="fa fa-desktop"></i> Accounts</a>
                    <a href="home.php?view=teacher-accounts" class="nav-item nav-link"><i class="fa fa-desktop"></i> Teacher Accounts</a>
                    <a href="home.php?view=monitoring" class="nav-item nav-link"><i class="fa fa-desktop"></i> Monitoring</a>
                    <a href="home.php?view=schoolyear" class="nav-item nav-link"><i class="fa fa-book"></i> School Year</a>
                    <a href="home.php?view=announcement" class="nav-item nav-link"><i class="fa fa-bullhorn"></i> Announcement</a>
                    <a href="home.php?view=lost" class="nav-item nav-link"><i class="fa fa-question-circle"></i> Lost & Found</a>
                    <a href="logout.php" class="nav-item nav-link"><i class="fa fa-desktop"></i> Logout</a>
                <?php } else if($_GET['view'] == 'teacher-accounts') { ?>
                    <a href="home.php?view=home" class="nav-item nav-link"><i class="fa fa-columns"></i> Dashboard</a>
                    <a href="home.php?view=request" class="nav-item nav-link"><i class="fas fa-edit"></i></i> Student Request</a>
                    <a href="home.php?view=enrollment" class="nav-item nav-link"><i class="fa fa-question-circle"></i>  Enrollment</a>
                    <a href="home.php?view=student-accounts" class="nav-item nav-link"><i class="fa fa-desktop"></i> Accounts</a>
                    <a href="home.php?view=teacher-accounts" class="nav-item nav-link active"><i class="fa fa-desktop"></i> Teacher Accounts</a>
                    <a href="home.php?view=monitoring" class="nav-item nav-link"><i class="fa fa-desktop"></i> Monitoring</a>
                    <a href="home.php?view=schoolyear" class="nav-item nav-link"><i class="fa fa-book"></i> School Year</a>
                    <a href="home.php?view=announcement" class="nav-item nav-link"><i class="fa fa-bullhorn"></i> Announcement</a>
                    <a href="home.php?view=lost" class="nav-item nav-link"><i class="fa fa-question-circle"></i> Lost & Found</a>
                    <a href="logout.php" class="nav-item nav-link"><i class="fa fa-desktop"></i> Logout</a>
                <?php } else if($_GET['view'] == 'monitoring') { ?>
                    <a href="home.php?view=home" class="nav-item nav-link"><i class="fa fa-columns"></i> Dashboard</a>
                    <a href="home.php?view=request" class="nav-item nav-link"><i class="fas fa-edit"></i></i> Student Request</a>
                    <a href="home.php?view=enrollment" class="nav-item nav-link"><i class="fa fa-question-circle"></i>  Enrollment</a>
                    <a href="home.php?view=student-accounts" class="nav-item nav-link"><i class="fa fa-desktop"></i> Accounts</a>
                    <a href="home.php?view=teacher-accounts" class="nav-item nav-link"><i class="fa fa-desktop"></i> Teacher Accounts</a>
                    <a href="home.php?view=monitoring" class="nav-item nav-link active"><i class="fa fa-desktop"></i> Monitoring</a>
                    <a href="home.php?view=schoolyear" class="nav-item nav-link"><i class="fa fa-book"></i> School Year</a>
                    <a href="home.php?view=announcement" class="nav-item nav-link"><i class="fa fa-bullhorn"></i> Announcement</a>
                    <a href="home.php?view=lost" class="nav-item nav-link"><i class="fa fa-question-circle"></i> Lost & Found</a>
                    <a href="logout.php" class="nav-item nav-link"><i class="fa fa-desktop"></i> Logout</a>
                <?php } else if($_GET['view'] == 'schoolyear') { ?>
                    <a href="home.php?view=home" class="nav-item nav-link"><i class="fa fa-columns"></i> Dashboard</a>
                    <a href="home.php?view=request" class="nav-item nav-link"><i class="fas fa-edit"></i></i> Student Request</a>
                    <a href="home.php?view=enrollment" class="nav-item nav-link"><i class="fa fa-question-circle"></i>  Enrollment</a>
                    <a href="home.php?view=student-accounts" class="nav-item nav-link"><i class="fa fa-desktop"></i> Accounts</a>
                    <a href="home.php?view=teacher-accounts" class="nav-item nav-link"><i class="fa fa-desktop"></i> Teacher Accounts</a>
                    <a href="home.php?view=monitoring" class="nav-item nav-link"><i class="fa fa-desktop"></i> Monitoring</a>
                    <a href="home.php?view=schoolyear" class="nav-item nav-link active"><i class="fa fa-book"></i> School Year</a>
                    <a href="home.php?view=announcement" class="nav-item nav-link"><i class="fa fa-bullhorn"></i> Announcement</a>
                    <a href="home.php?view=lost" class="nav-item nav-link"><i class="fa fa-question-circle"></i> Lost & Found</a>
                    <a href="logout.php" class="nav-item nav-link"><i class="fa fa-desktop"></i> Logout</a>
                <?php } else if($_GET['view'] == 'school_year_detail') { ?>
                    <a href="home.php?view=home" class="nav-item nav-link"><i class="fa fa-columns"></i> Dashboard</a>
                    <a href="home.php?view=request" class="nav-item nav-link"><i class="fas fa-edit"></i></i> Student Request</a>
                    <a href="home.php?view=enrollment" class="nav-item nav-link"><i class="fa fa-question-circle"></i>  Enrollment</a>
                    <a href="home.php?view=student-accounts" class="nav-item nav-link"><i class="fa fa-desktop"></i> Accounts</a>
                    <a href="home.php?view=teacher-accounts" class="nav-item nav-link"><i class="fa fa-desktop"></i> Teacher Accounts</a>
                    <a href="home.php?view=monitoring" class="nav-item nav-link"><i class="fa fa-desktop"></i> Monitoring</a>
                    <a href="home.php?view=schoolyear" class="nav-item nav-link active"><i class="fa fa-book"></i> School Year</a>
                    <a href="home.php?view=announcement" class="nav-item nav-link"><i class="fa fa-bullhorn"></i> Announcement</a>
                    <a href="home.php?view=lost" class="nav-item nav-link"><i class="fa fa-question-circle"></i> Lost & Found</a>
                    <a href="logout.php" class="nav-item nav-link"><i class="fa fa-desktop"></i> Logout</a>
                <?php } else if($_GET['view'] == 'announcement') { ?>
                    <a href="home.php?view=home" class="nav-item nav-link"><i class="fa fa-columns"></i> Dashboard</a>
                    <a href="home.php?view=request" class="nav-item nav-link"><i class="fas fa-edit"></i></i> Student Request</a>
                    <a href="home.php?view=enrollment" class="nav-item nav-link"><i class="fa fa-question-circle"></i>  Enrollment</a>
                    <a href="home.php?view=student-accounts" class="nav-item nav-link"><i class="fa fa-desktop"></i> Accounts</a>
                    <a href="home.php?view=teacher-accounts" class="nav-item nav-link"><i class="fa fa-desktop"></i> Teacher Accounts</a>
                    <a href="home.php?view=monitoring" class="nav-item nav-link"><i class="fa fa-desktop"></i> Monitoring</a>
                    <a href="home.php?view=schoolyear" class="nav-item nav-link"><i class="fa fa-book"></i> School Year</a>
                    <a href="home.php?view=announcement" class="nav-item nav-link active"><i class="fa fa-bullhorn"></i> Announcement</a>
                    <a href="home.php?view=lost" class="nav-item nav-link"><i class="fa fa-question-circle"></i> Lost & Found</a>
                    <a href="logout.php" class="nav-item nav-link"><i class="fa fa-desktop"></i> Logout</a>
                <?php } else if($_GET['view'] == 'lost') { ?>
                    <a href="home.php?view=home" class="nav-item nav-link"><i class="fa fa-columns"></i> Dashboard</a>
                    <a href="home.php?view=request" class="nav-item nav-link"><i class="fas fa-edit"></i></i> Student Request</a>
                    <a href="home.php?view=enrollment" class="nav-item nav-link"><i class="fa fa-question-circle"></i>  Enrollment</a>
                    <a href="home.php?view=student-accounts" class="nav-item nav-link"><i class="fa fa-desktop"></i> Accounts</a>
                    <a href="home.php?view=teacher-accounts" class="nav-item nav-link"><i class="fa fa-desktop"></i> Teacher Accounts</a>
                    <a href="home.php?view=monitoring" class="nav-item nav-link"><i class="fa fa-desktop"></i> Monitoring</a>
                    <a href="home.php?view=schoolyear" class="nav-item nav-link"><i class="fa fa-book"></i> School Year</a>
                    <a href="home.php?view=announcement" class="nav-item nav-link"><i class="fa fa-bullhorn"></i> Announcement</a>
                    <a href="home.php?view=lost" class="nav-item nav-link active"><i class="fa fa-question-circle"></i> Lost & Found</a>
                    <a href="logout.php" class="nav-item nav-link"><i class="fa fa-desktop"></i> Logout</a>
                <?php }  else { ?>
                    <a href="home.php?view=home" class="nav-item nav-link active"><i class="fa fa-columns"></i> Dashboard</a>
                    <a href="home.php?view=request" class="nav-item nav-link"><i class="fas fa-edit"></i></i> Student Request</a>
                    <a href="home.php?view=enrollment" class="nav-item nav-link"><i class="fa fa-question-circle"></i>  Enrollment</a>
                    <a href="home.php?view=student-accounts" class="nav-item nav-link"><i class="fa fa-desktop"></i> Accounts</a>
                    <a href="home.php?view=teacher-accounts" class="nav-item nav-link"><i class="fa fa-desktop"></i> Teacher Accounts</a>
                    <a href="home.php?view=monitoring" class="nav-item nav-link"><i class="fa fa-desktop"></i> Monitoring</a>
                    <a href="home.php?view=schoolyear" class="nav-item nav-link"><i class="fa fa-book"></i> School Year</a>
                    <a href="home.php?view=announcement" class="nav-item nav-link"><i class="fa fa-bullhorn"></i> Announcement</a>
                    <a href="home.php?view=lost" class="nav-item nav-link"><i class="fa fa-question-circle"></i> Lost & Found</a>
                    <a href="logout.php" class="nav-item nav-link"><i class="fa fa-desktop"></i> Logout</a>
                <?php }  ?>
                <?php } else { ?>
                    <a href="home.php?view=home" class="nav-item nav-link active"><i class="fa fa-columns"></i> Dashboard</a>
                    <a href="home.php?view=request" class="nav-item nav-link"><i class="fas fa-edit"></i></i> Student Request</a>
                    <a href="home.php?view=enrollment" class="nav-item nav-link"><i class="fa fa-question-circle"></i>  Enrollment</a>
                    <a href="home.php?view=student-accounts" class="nav-item nav-link"><i class="fa fa-desktop"></i> Accounts</a>
                    <a href="home.php?view=teacher-accounts" class="nav-item nav-link"><i class="fa fa-desktop"></i> Teacher Accounts</a>
                    <a href="home.php?view=monitoring" class="nav-item nav-link"><i class="fa fa-desktop"></i> Monitoring</a>
                    <a href="home.php?view=schoolyear" class="nav-item nav-link"><i class="fa fa-book"></i> School Year</a>
                    <a href="home.php?view=announcement" class="nav-item nav-link"><i class="fa fa-bullhorn"></i> Announcement</a>
                    <a href="home.php?view=lost" class="nav-item nav-link"><i class="fa fa-question-circle"></i> Lost & Found</a>
                    <a href="logout.php" class="nav-item nav-link"><i class="fa fa-desktop"></i> Logout</a>
                <?php } ?>