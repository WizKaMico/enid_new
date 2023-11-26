<?php include('connection/ScanController.php'); ?>
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
            if ($_GET['message'] == 'success') {
                echo '
                <script>
                    document.addEventListener("DOMContentLoaded", function() {
                        Swal.fire({
                            icon: "success",
                            title: "Scanned Successful",
                            text: ""
                        });
                    });
                </script>';
            } else {
                echo '
                <script>
                    document.addEventListener("DOMContentLoaded", function() {
                        Swal.fire({
                            icon: "error",
                            title: "Scanned Error",
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
                <div class="navbar-nav w-100">
                  
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
        
            <?php if(!empty($_GET['room_id'])) { ?>
                <?php if(!empty($_GET['view'])) { ?>
                <?php if($_GET['view'] == 'scan')  { ?>
                <?php include('scanner/home.php'); ?>
                <?php } else if($_GET['view'] == 'delay')  { ?>
                <?php include('scanner/delay.php'); ?>
                <?php } else { ?>
                <?php include('scanner/home.php'); ?>
                <?php } ?>
                <?php } else { ?>
                <?php include('scanner/home.php'); ?>
                <?php } ?>
            <?php } else { ?>
                <?php include('scanner/error.php'); ?>
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


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
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
    <script>
            // Get the form and input elements
        const myForm = document.getElementById('myForm');
        const inputElement = document.getElementById('floatingInput');

        // Automatically focus on the input when the page loads
        document.addEventListener('DOMContentLoaded', function() {
            inputElement.focus();
        });

        // Submit the form when the user enters something
        inputElement.addEventListener('input', function() {
            myForm.submit();
        });
    </script> 
    
<script>
  function updateClock() {
    var now = new Date();
    var daysOfWeek = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
    var months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

    var dayOfWeek = daysOfWeek[now.getDay()];
    var month = months[now.getMonth()];
    var day = now.getDate();
    var year = now.getFullYear();
    var hours = now.getHours();
    var minutes = now.getMinutes();
    var ampm = hours >= 12 ? 'PM' : 'AM';

    // Convert to 12-hour format
    hours = hours % 12 || 12;

    var formattedDate = month + ' ' + day + ', ' + year + ', ' + dayOfWeek;
    var formattedTime = hours + ':' + (minutes < 10 ? '0' : '') + minutes + ' ' + ampm;

    document.getElementById('clock').innerHTML = formattedDate + '<br>' + formattedTime;
  }

  // Update the clock every second
  setInterval(updateClock, 1000);

  // Initial update
  updateClock();
</script>

<script>
    // Function to update the countdown and redirect after 5 seconds
    function countdown() {
      let seconds = 3;
      const countdownDisplay = document.getElementById('countdown');

      // Update countdown display every second
      const interval = setInterval(() => {
        seconds--;
        countdownDisplay.textContent = `Countdown: ${seconds}`;

        if (seconds === 0) {
          clearInterval(interval);
        //   header('Location:scan.php?view=delay&message=success&uid='.$uid.'&room_id='.$room_id);
          // Redirect to another page after 5 seconds
          window.location.href = 'scan.php?view=home&message=success&uid=<?php echo $_GET['uid']; ?>&room_id=<?php echo $_GET['room_id']; ?>'; // Replace with your desired URL
        }
      }, 1000);
    }

    // Start the countdown when the page loads
    window.onload = countdown;
  </script>
</body>

</html>