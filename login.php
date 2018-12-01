<?php
include("config.php");
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = mysqli_real_escape_string($db,$_POST['username']);
    $password = mysqli_real_escape_string($db,$_POST['password']);

    $sql = "SELECT id FROM user_db WHERE username = '$username' and password = '$password'";
    $result = mysqli_query($db,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $active = $row['active'];

    $count = mysqli_num_rows($result);
    if($count == 1) {

        $_SESSION['login_user'] = $username;

        header("location: index.php");
    }else {
        $error = "Your Login Name or Password is invalid";
        echo "<script type=\'text/javascript'/>alert($error);</script>";
    }
}
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
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet"></head>
<body>
<h1>
    <span>E</span>vents
    <span>O</span>n
    <span>C</span>ampus</h1>
<div class="main-content-agile">
    <div class="sub-main-w3">
        <form action = "" method = "post">
            <div class="form-style-agile">
                <label>User Name</label>
                <div class="pom-agile">
                    <input placeholder="username" name="username" type="text" required="">
                </div>
            </div>
            <div class="form-style-agile">
                <label>Password</label>
                <div class="pom-agile">
                    <input placeholder="password" name="password" type="password" required="">
                </div>
            </div>
            <div class="clear"></div>
            <input type = "submit" value = "Submit"/>
        </form>
    </div>
</div>
<div class="footer">
    <h2>Events On Campus</h2>
</div>
</body>
</html>