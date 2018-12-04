<?php
include('sessions.php');
$url = "http://localhost:8080".$_SERVER['REQUEST_URI'];
$id =  $_GET["id"];
$query4 = "SELECT * FROM event_details WHERE id=".$id;
$res3=mysqli_query($db, $query4);
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
        <form>
            <div class="form-style-agile">
                <div>
                    <?php
                    while ($row = mysqli_fetch_array($res3)) {
                        echo '<h4>Event name: ' . $row['event'] . '</h4>
                    <h4>Event location: ' . $row['location'] . '</h4>
					<h4>Date of event: ' . date('F d, Y', strtotime($row['date'])) . '</h4>
					<h4>Time of event: ' . $row['time'] . '</h4>
					<h4>Organizer: ' . $row['coord'] . '</h4>
					<h4>Mail ID: ' . $row['mail'] . '</h4>
					<h4>Contact: ' . $row['phone'] . '</h4>
					<h4>Event details: ' . $row['descr'] . '</h4>';
                    }
                    ?>
                </div>
                <div class="clearfix"></div>
                <div>
                    <?php
                    $_SESSION['event']=$row['event'];
                    $_SESSION['date']=date('F d, Y', strtotime($row['date']));
                    $_SESSION['url']=$url;
                    ?>
                        <br/><br/><a class="disp" id="alert" name="alert" onClick='location.href="?alert=1&id=<?php echo $id?>"'>Send an alert</a>
                        <?php
                        if($_GET['alert']){
                        $eve = $_SESSION['event'];
        $dt = $_SESSION['date'];
        $u = $_SESSION['url'];
        
                        function sendMessage()
        {       global $eve, $dt, $u;
            $heading = array(
                "en" => $eve
            );
            $content = array(
                "en" => "Event happening on ".$dt." Kindly visit now!"
            );

            $hashes_array = array();
            array_push($hashes_array, array(
                "id" => "like-button",
                "text" => "Visit Now",
                "url" => $u
            ));

            $fields = array(
                'app_id' => "c3a1dfba-1bc9-4978-bb36-965657450b6d",
                'included_segments' => array('All'),
                'data' => array("foo" => "bar"),
                'headings' => $heading,
                'contents' => $content,
                'web_buttons' => $hashes_array
            );

            $fields = json_encode($fields);

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=utf-8',
                'Authorization: Basic ZTk5MDBlNzUtZTg1My00MWFhLTg5ODUtYTdlMGY4ZTQxMjAz'));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
            curl_setopt($ch, CURLOPT_HEADER, FALSE);
            curl_setopt($ch, CURLOPT_POST, TRUE);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

            $response = curl_exec($ch);
            curl_close($ch);

            return $response;
        }

echo '<script type=\"text/javascript"/>alert("Alert has been sent to all subscribed users!")</script>';
                            
                        }
        $response = sendMessage();
$return["allresponses"] = $response;
$return = json_encode($return);

                        ?>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="footer">
    <h2>Events On Campus</h2>
</div>
</body>
</html>
