<?php include('connection/MainController.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ABULALAS | OFFICIAL | SCHOOL PORTAL</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="datatable/datatable/dataTable.bootstrap.min.css">      
    <style>
		.height10{
			height:10px;
		}
		.mtop10{
			margin-top:10px;
		}
		.modal-label{
			position:relative;
			top:7px
		}
	</style>  
    <link rel="stylesheet" href="https://unpkg.com/ag-grid-community/dist/styles/ag-grid.css">
    <link rel="stylesheet" href="https://unpkg.com/ag-grid-community/dist/styles/ag-theme-alpine.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?php
        if (!empty($_GET['message'])) {
            if ($_GET['message'] == 'success') {
                echo '
                <script>
                    document.addEventListener("DOMContentLoaded", function() {
                        Swal.fire({
                            icon: "success",
                            title: "Confirmed Successful",
                            text: "Added successfully."
                        });
                    });
                </script>';
            } else {
                echo '
                <script>
                    document.addEventListener("DOMContentLoaded", function() {
                        Swal.fire({
                            icon: "error",
                            title: "Insert Error",
                            text: "An error occurred during form submission"
                        });
                    });
                </script>';
            }
        }
        ?>
</head>

<body>
    <div class="container-fluid position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3" style="background-color:#eece32;">
            <nav class="navbar navbar-light" style="background-color:#eece32;">
                <a href="#" class="navbar-brand mx-4 mb-3">
                    <center>
                        <img src="logo/main.png" style="width:100%; margin-left:20px;"/>
                    </center>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/user.png" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0"><?php echo strtoupper($filteredEmail); ?></h6>
                        <span><?php echo strtoupper($userSession[0]['role']); ?></span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <?php if(($userSession[0]['role']) == 'ADMIN') { ?>
                    <?php include('navbar/admin.php'); ?>
                    <?php } else if(($userSession[0]['role']) == 'TEACHER') { ?>
                    <?php include('navbar/teacher.php'); ?>    
                    <?php } else { ?>
                    <?php include('navbar/student.php'); ?>
                    <?php } ?>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand navbar-light sticky-top px-4 py-0" style="background-color:#eece32;">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="img/user.png" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex"><?php echo strtoupper($filteredEmail); ?></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">My Profile</a>
                            <a href="#" class="dropdown-item">Settings</a>
                            <a href="#" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->

            <?php if(($userSession[0]['designation'])  == 1) { ?>      
            <?php if(!empty($_GET['view'])){ ?>
            <?php if($_GET['view'] == 'home') { ?>
            <?php include('route/admin-home.php'); ?>
            <?php } else if($_GET['view'] == 'request') { ?>
            <?php include('route/admin-studentrequest.php'); ?>
            <?php } else if($_GET['view'] == 'request_history') { ?>
            <?php include('route/admin-request_history.php'); ?>
            <?php } else if($_GET['view'] == 'enrollment') { ?>
            <?php include('route/admin-enrollment.php'); ?>
            <?php } else if($_GET['view'] == 'student-accounts') { ?>
            <?php include('route/admin-student-accounts.php'); ?>
            <?php } else if($_GET['view'] == 'teacher-accounts') { ?>
            <?php include('route/admin-teacher-accounts.php'); ?>
            <?php } else if($_GET['view'] == 'monitoring') { ?>
            <?php include('route/admin-monitoring.php'); ?>
            <?php } else if($_GET['view'] == 'schoolyear') { ?>
            <?php include('route/admin-schoolyear.php'); ?>
            <?php } else if($_GET['view'] == 'school_year_detail') { ?>
            <?php include('route/admin-schoolyear-details.php'); ?>
            <?php } else if($_GET['view'] == 'announcement') { ?>
            <?php include('route/admin-announcement.php'); ?>
            <?php } else if($_GET['view'] == 'lost') { ?>
            <?php include('route/admin-lost.php'); ?>
            <?php }  else { ?>
            
            <?php }  ?>

            <?php } else { ?>
            <?php include('route/admin-home.php'); ?>
            <?php } ?>
            <?php }else if(($userSession[0]['designation']) == 3) { ?>
            <?php if(!empty($_GET['view'])){ ?>
            <?php if($_GET['view'] == 'home') { ?>
            <?php include('route/student-home.php'); ?>
            <?php } else if($_GET['view'] == 'request') { ?>
            <?php include('route/student-request.php'); ?>
            <?php } else if($_GET['view'] == 'request_history') { ?>
            <?php include('route/student-request_history.php'); ?>
            <?php } else if($_GET['view'] == 'myclass') { ?>
            <?php include('route/student-class.php'); ?>
            <?php } else if($_GET['view'] == 'monitoring') { ?>
            <?php include('route/student-monitoring.php'); ?>
            <?php } else { ?>

            <?php } ?>
            <?php }  else { ?>
            <?php include('route/student-home.php'); ?>
            <?php }  ?>
            <?php }else{ ?>
            <?php if(!empty($_GET['view'])){ ?>
            <?php if($_GET['view'] == 'home') { ?>
            <?php include('route/teacher-home.php'); ?>
            <?php } else if($_GET['view'] == 'attendance') { ?>
            <?php include('route/teacher-attendance.php'); ?>
            <?php } else if($_GET['view'] == 'mystudent') { ?>
            <?php include('route/teacher-student.php'); ?>
            <?php } else { ?>

            <?php } ?>
            <?php } ?>
            <?php } ?>


           


            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">ABULALAS ELEMENTARY SCHOOL</a>, All Right Reserved. 
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->

    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/ag-grid-enterprise@30.0.6/dist/ag-grid-enterprise.min.js"></script>   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Template Javascript -->
    <script src="js/main.js"></script>
            <?php if(!empty($_GET['view'])){ ?>
            <?php if($_GET['view'] == 'home') { ?>
            
            <?php } else if($_GET['view'] == 'request') { ?>
            <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>   
            <script src="datatable/datatable/jquery.dataTables.min.js"></script>
            <script src="datatable/datatable/dataTable.bootstrap.min.js"></script>
            <script>
                $(document).ready(function(){
                    // Function to initialize DataTable and hide alert
                    function initializeDataTable(tableId) {
                        $(tableId).DataTable();

                        // Hide alert on close button click
                        $(document).on('click', '.close', function(){
                            $('.alert').hide();
                        });
                    }

                    // Initialize DataTables for different tables
                    initializeDataTable('#myRequestTypeTable');
                    initializeDataTable('#myRequestActiveSyTable');
                    initializeDataTable('#myRequestApprovedSyTable');
                    initializeDataTable('#myRequestRejectedSyTable');
                    initializeDataTable('#myRequestArchiveSyTable');
                });
            </script>
            <?php } else if($_GET['view'] == 'request_history') { ?>


            <?php } else if($_GET['view'] == 'enrollment') { ?>
            <script src="js/ph-address-selector.js"></script>
            <script src="js/ph-address-selector1.js"></script>
            <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>   
            <script src="datatable/datatable/jquery.dataTables.min.js"></script>
            <script src="datatable/datatable/dataTable.bootstrap.min.js"></script>
            <script>
                $(document).ready(function(){
                    // Function to initialize DataTable and hide alert
                    function initializeDataTable(tableId) {
                        $(tableId).DataTable();

                        // Hide alert on close button click
                        $(document).on('click', '.close', function(){
                            $('.alert').hide();
                        });
                    }

                    // Initialize DataTables for different tables
                    initializeDataTable('#myFreshTable');
                    initializeDataTable('#myTransTable');
                    initializeDataTable('#myOfficialTable');
                });
            </script>
            <?php } else if($_GET['view'] == 'student-accounts') { ?>
                
            <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>   
            <script src="datatable/datatable/jquery.dataTables.min.js"></script>
            <script src="datatable/datatable/dataTable.bootstrap.min.js"></script>
            <script>
                $(document).ready(function(){
                    // Function to initialize DataTable and hide alert
                    function initializeDataTable(tableId) {
                        $(tableId).DataTable();

                        // Hide alert on close button click
                        $(document).on('click', '.close', function(){
                            $('.alert').hide();
                        });
                    }

                    // Initialize DataTables for different tables
                    initializeDataTable('#myStudentTable');
                });
            </script>
            <?php } else if($_GET['view'] == 'teacher-accounts') { ?>
            <script src="js/ph-address-selector.js"></script>
            <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>   
            <script src="datatable/datatable/jquery.dataTables.min.js"></script>
            <script src="datatable/datatable/dataTable.bootstrap.min.js"></script>
            <script>
                $(document).ready(function(){
                    // Function to initialize DataTable and hide alert
                    function initializeDataTable(tableId) {
                        $(tableId).DataTable();

                        // Hide alert on close button click
                        $(document).on('click', '.close', function(){
                            $('.alert').hide();
                        });
                    }

                    // Initialize DataTables for different tables
                    initializeDataTable('#myTeacherTable');
                });
            </script>
            <?php } else if($_GET['view'] == 'monitoring') { ?>
           
            <?php } else if($_GET['view'] == 'schoolyear') { ?>
            <script src="js/admin-schoolyear-aggrid.js"></script>

            <?php } else if($_GET['view'] == 'school_year_detail') { ?> 
            <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>   
            <script src="datatable/datatable/jquery.dataTables.min.js"></script>
            <script src="datatable/datatable/dataTable.bootstrap.min.js"></script>
            <script>
                $(document).ready(function(){
                    // Function to initialize DataTable and hide alert
                    function initializeDataTable(tableId) {
                        $(tableId).DataTable();

                        // Hide alert on close button click
                        $(document).on('click', '.close', function(){
                            $('.alert').hide();
                        });
                    }

                    // Initialize DataTables for different tables
                    initializeDataTable('#myGradeTable');
                    initializeDataTable('#mySectionTable');
                    initializeDataTable('#myRoomTable');
                    initializeDataTable('#mySchoolYearInfoTable');
                });
            </script>

            <script>
                function copyInputValue() {
                    // Get the input element
                    var inputElement = document.getElementById('myInput');

                    // Select the text in the input
                    inputElement.select();
                    inputElement.setSelectionRange(0, 99999); // For mobile devices

                    // Copy the text to the clipboard
                    document.execCommand('copy');

                    // Deselect the input
                    inputElement.setSelectionRange(0, 0);

                    // Provide feedback (you can customize this part)
                    alert('Input value copied: ' + inputElement.value);
                }
            </script>


            <?php } else if($_GET['view'] == 'announcement') { ?>
                
            <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>   
            <script src="datatable/datatable/jquery.dataTables.min.js"></script>
            <script src="datatable/datatable/dataTable.bootstrap.min.js"></script>
            <script>
                $(document).ready(function(){
                    // Function to initialize DataTable and hide alert
                    function initializeDataTable(tableId) {
                        $(tableId).DataTable();

                        // Hide alert on close button click
                        $(document).on('click', '.close', function(){
                            $('.alert').hide();
                        });
                    }

                    // Initialize DataTables for different tables
                    initializeDataTable('#myAnnouncementTable');
                });
            </script>

               <?php } else if($_GET['view'] == 'myclass') { ?>
                
                <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>   
                <script src="datatable/datatable/jquery.dataTables.min.js"></script>
                <script src="datatable/datatable/dataTable.bootstrap.min.js"></script>
                <script>
                    $(document).ready(function(){
                        // Function to initialize DataTable and hide alert
                        function initializeDataTable(tableId) {
                            $(tableId).DataTable();
    
                            // Hide alert on close button click
                            $(document).on('click', '.close', function(){
                                $('.alert').hide();
                            });
                        }
    
                        // Initialize DataTables for different tables
                        initializeDataTable('#myAttendanceToday');
                        initializeDataTable('#myAttendanceWeekly');
                        initializeDataTable('#myAttendanceMonthly');
                    });
                </script>

             <?php } else if($_GET['view'] == 'monitoring') { ?>
                
                <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>   
                <script src="datatable/datatable/jquery.dataTables.min.js"></script>
                <script src="datatable/datatable/dataTable.bootstrap.min.js"></script>
                <script>
                    $(document).ready(function(){
                        // Function to initialize DataTable and hide alert
                        function initializeDataTable(tableId) {
                            $(tableId).DataTable();
    
                            // Hide alert on close button click
                            $(document).on('click', '.close', function(){
                                $('.alert').hide();
                            });
                        }
    
                        // Initialize DataTables for different tables
                        initializeDataTable('#myMonitoringAttendanceToday');
                        initializeDataTable('#myMonitoringAttendanceWeekly');
                        initializeDataTable('#myMonitoringAttendanceMonthly');
                    });
                </script>

            <?php } else if($_GET['view'] == 'mystudent') { ?>

                <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>   
                <script src="datatable/datatable/jquery.dataTables.min.js"></script>
                <script src="datatable/datatable/dataTable.bootstrap.min.js"></script>
                <script>
                    $(document).ready(function(){
                        // Function to initialize DataTable and hide alert
                        function initializeDataTable(tableId) {
                            $(tableId).DataTable();
    
                            // Hide alert on close button click
                            $(document).on('click', '.close', function(){
                                $('.alert').hide();
                            });
                        }
    
                        // Initialize DataTables for different tables
                        initializeDataTable('#myStudentTable');
                    });
                </script>

            <?php } else if($_GET['view'] == 'attendance') { ?>

                <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>   
                <script src="datatable/datatable/jquery.dataTables.min.js"></script>
                <script src="datatable/datatable/dataTable.bootstrap.min.js"></script>
                <script>
                    $(document).ready(function(){
                        // Function to initialize DataTable and hide alert
                        function initializeDataTable(tableId) {
                            $(tableId).DataTable();
    
                            // Hide alert on close button click
                            $(document).on('click', '.close', function(){
                                $('.alert').hide();
                            });
                        }
    
                        // Initialize DataTables for different tables
                        initializeDataTable('#myMonitoringAttendanceTodayTeacher');
                        initializeDataTable('#myMonitoringAttendanceWeeklyTeacher');
                        initializeDataTable('#myMonitoringAttendanceMonthlyTeacher');
                    });
                </script>


            <?php } else if($_GET['view'] == 'lost') { ?>
           
            <?php }  else { ?>
            
            <?php }  ?>

            <?php } else { ?>
           
            <?php } ?>           
    
</body>

</html>