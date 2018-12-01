<?php
include('sessions.php');
if (isset($_POST['send_alert'])) {
    if (count($errors) == 0) {
        $eve = $_SESSION['event'];
        $dt = $_SESSION['date'];
        $u = $_SESSION['url'];
        echo $eve;
        echo $dt;
        echo $u;
        
        function sendMessage()
        {
            $heading = array(
                "en" => $_GET[$eve]
            );
            $content = array(
                "en" => "Event happening on " . $_GET[$dt]
            );

            $hashes_array = array();
            array_push($hashes_array, array(
                "id" => "like-button",
                "text" => "Visit Now",
                "url" => $_GET[$u]
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

        $response = sendMessage();
        $return["allresponses"] = $response;
        $return = json_encode($return);
        if (sendMessage()) {
            header('location: info_auth.php');
        }else {
            header('location: error.php');
        }
    }
}
?>