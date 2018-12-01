<?php
include('server.php');
?>
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
    <div class="sub-main-w3">
        <form action="event.php" method="post">
            <div class="form-style-agile">
                <label>Event Name</label>
                <div class="pom-agile">
                    <input placeholder="Symposium" name="event" type="text" required="">
                </div>
            </div>
            <div class="form-style-agile">
                <label>Event location</label>
                <div class="pom-agile">
                    <input placeholder="MGR Hall" name="location" type="text" required="">
                </div>
            </div>
            <div class="form-style-agile">
                <label>Event Date</label>
                <div class="pom-agile">
                    <input placeholder="Date" name="date" type="date" id="date" required="">
                </div>
            </div>
            <div class="form-style-agile">
                <label>Event time</label>
                <div class="pom-agile">
                    <input placeholder="09:00 am" name="time" type="time" id="time" required="">
                </div>
            </div>
            <div class="clear"></div>
            <div class="form-style-agile">
                <label>Event Coordinator</label>
                <div class="pom-agile">
                    <input placeholder="John" name="coord" type="text" id="coord" required="">
                </div>
            </div>
            <div class="clear"></div>
            <div class="form-style-agile">
                <label>Coordinator Mail</label>
                <div class="pom-agile">
                    <input placeholder="example@example.com" name="mail" type="email" id="mail" required="">
                </div>
            </div>
            <div class="form-style-agile">
                <label>Coordinator contact</label>
                <div class="pom-agile">
                    <input placeholder="+919876543210" name="phone" type="tel" id="phone" required="">
                </div>
            </div>
            <div class="clear"></div>
            <div class="clear"></div>
            <div class="form-style-agile">
                <label>Event description</label>
                <div class="pom-agile">
                    <textarea name="descr" id="descr" cols="50" rows="10" required=""></textarea>
                </div>
            </div>
            <div class="clear"></div>
            <input type="submit" name="submit_event" value="Submit">
        </form>
    </div>
</div>
<div class="footer">
    <h2>Events On Campus
    </h2>
</div>
</body>
</html>