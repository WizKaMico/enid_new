<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" href="../js/fullcalendar/fullcalendar.min.css" />
<script src="../js/fullcalendar/lib/jquery.min.js"></script>
<script src="../js/fullcalendar/lib/moment.min.js"></script>
<script src="../js/fullcalendar/fullcalendar.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script>

$(document).ready(function () {
    var calendar = $('#calendar').fullCalendar({
        events: "../api/get_school_announcement.php",
        displayEventTime: false,
        selectable: true,
        selectHelper: true
    });
});

</script>

<style>
body {
    text-align: center;
    font-size: 12px;
    font-family: "Lucida Grande", Helvetica, Arial, Verdana, sans-serif;
}

#calendar {
    width: 50%;
    height: 50px;
    margin: 0 auto;
}


</style>
</head>
<body>
    <div id='calendar'></div>
</body>


</html>