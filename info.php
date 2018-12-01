<?php
include('config.php');
//echo $_SERVER['REQUEST_URI'];
$url = "http://localhost:8080".$_SERVER['REQUEST_URI'];
$id =  $_GET["id"];
$query3 = "SELECT * FROM event_details WHERE id=".$id;
 $res2=mysqli_query($db, $query3);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>What's going on?</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <link rel="stylesheet" href="style.css" type="text/css" media="all" />
    <link rel="stylesheet" href="css/font-awesome.css">
    <link href="//fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
</head>
<body>
<h1>
    <span>E</span>vents
    <span>O</span>n
    <span>C</span>ampus</h1>
<div class="main-content-agile">
    <div class="info-sub-main-w3">
        <form action="info.php" method="get">
            <div class="form-style-agile">
                <div>
                    <?php
                    while ($row = mysqli_fetch_array($res2)) {
                        echo '<h4>Event name: ' . $row['event'] . '</h4>
                    <h4>Event location: ' . $row['location'] . '</h4>
					<h4>Date of event: ' . date('F d, Y', strtotime($row['date'])) . '</h4>
					<h4>Time of event: ' . $row['time'] . '</h4>
					<h4>Organizer: ' . $row['coord'] . '</h4>
					<h4>Mail ID: ' . $row['mail'] . '</h4>
					<h4>Contact: ' . $row['phone'] . '</h4>
					<h4>Event details: ' . $row['descr'] . '</h4>';
                    }?>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="footer">
    <h2>Events On Campus | Design Project</h2>
</div>
</body>
</html>
