<?php
include('sessions.php');
if (isset($_POST['submit_event'])) {
    if (count($errors) == 0) {
        $query = "INSERT INTO event_details (event, location, date, time, coord, mail, phone, descr) values('".$_POST["event"]."', '".$_POST["location"]."', '".$_POST["date"]."', '".$_POST["time"]."', '".$_POST["coord"]."', '".$_POST["mail"]."', '".$_POST["phone"]."', '".$_POST["descr"]."')";
        if (mysqli_query($db, $query)) {
            header('location: thankyou.php');
        }else {
            header('location: error.php');
        }
    }
}
?>