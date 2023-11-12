<?php include('connection/LoginController.php'); ?>

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

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?php
        if (!empty($_GET['message'])) {
            if ($_GET['message'] == 'security') {
                echo '
                <script>
                    document.addEventListener("DOMContentLoaded", function() {
                        Swal.fire({
                            icon: "success",
                            title: "Login Successful",
                            text: "Your login has been verified successfully."
                        }).then(function() {
                            window.location.href = "security.php?view=security";
                        });
                    });
                </script>';
            } else if ($_GET['message'] == 'verification') {
                echo '
                <script>
                    document.addEventListener("DOMContentLoaded", function() {
                        Swal.fire({
                            icon: "success",
                            title: "Login Successful",
                            text: "Your login has been verified successfully."
                        }).then(function() {
                            window.location.href = "security.php?view=verification";
                        });
                    });
                </script>';
            } else {
                echo '
                <script>
                    document.addEventListener("DOMContentLoaded", function() {
                        Swal.fire({
                            icon: "error",
                            title: "Login Error",
                            text: "An error occurred during login."
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


        <!-- Start -->
       <?php if(!empty($_GET['view'])) {  ?>
       <?php if($_GET['view'] == 'login') { ?>
       <?php include('login/login.php'); ?>
       <?php  } else { ?>
       <?php include('login/login.php'); ?>
       <?php  } ?>
       <?php  } else { ?>
       <?php include('login/login.php'); ?> 
       <?php  } ?>
        <!--  End -->
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

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script>
    function updateLabel() {
        var accessRoleSelect = document.getElementById('accessRole');
        var uidInputLabel = document.querySelector('label[for="uidInput"]');

        switch (accessRoleSelect.value) {
            case 'ADMIN':
                uidInputLabel.textContent = 'UID (ADMIN)';
                break;
            case 'TEACHER':
                uidInputLabel.textContent = 'UID (TEACHER)';
                break;
            case 'STUDENT':
                uidInputLabel.textContent = 'LRN (STUDENT)';
                break;
            default:
                uidInputLabel.textContent = 'UID (ADMIN)';
        }
    }
</script>

</body>

</html>