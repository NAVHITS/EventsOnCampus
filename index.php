<?php
include('sessions.php')
?>
<!DOCTYPE html>
<html lang="en">
<head><title>What's going on?</title>
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
    <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async='async'></script>
    <script>
        var OneSignal = window.OneSignal || [];
        OneSignal.push(["init", {
            appId: "c3a1dfba-1bc9-4978-bb36-965657450b6d",
            autoRegister: true,
            httpPermissionRequest: {
                enable: true
            },
            notifyButton: {
                enable: true
            },
            welcomeNotification: {
                "title": "EventsOnCampus",
                "message": "Hi! Thanks for subscribing! You will now recieve event alerts from us",

            },
            promptOptions: {
                actionMessage: "We'd like to show you notifications for the latest events and updates.",
                acceptButtonText: "ALLOW",
                cancelButtonText: "NO THANKS"
            }
        }]);
    </script>
</head>
<body>
<h1>
    <span>E</span>vents
    <span>O</span>n
    <span>C</span>ampus</h1>
<div class="main-content-agile">
    <div class="sub-main-w3">
        <form action="event.php" method="get">
            <div class="form-style-agile">
                <div>
                    <h1 class="home" style="color:black">Welcome! Submit your event today and reach out to the campus...</h1>
                    <input type="submit" value="Submit event">
                    <div><br/><br/><a class="disp" href='list_auth.php'>|  View events  |</a>&nbsp;&nbsp;<a class="disp" href='logout.php'>|  Logout  |</a></div>
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