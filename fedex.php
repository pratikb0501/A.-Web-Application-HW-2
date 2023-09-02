<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fedex Tracking App</title>
    <style>
        .msg-text{
            color:red;
        }
    </style>
</head>
<body>
    <h1>Fedex Tracking App</h1>
    <br>
    <br>
    <form method="get">
        <label for="trackId">Enter Tracking Number</label>
        <br>
        <br>
        <input type="text" placeholder="Enter tracking number" name = "trackId" id="trackID">
        <button>Submit</button>
        <br><br><br>
    </form>
    <?php
        define("TRACKING_NUMBER",582734098);
        $trackNum = TRACKING_NUMBER;
        $trackArray = [];
        $trackId = $_GET["trackId"] ?? null;
        $trackArray["track_id"] = $trackId;
        $trackArray["dopost"] = "Submit";

        if($trackId != null){     //error => tracking number entered is not a number
            if(!is_numeric($trackId) || $trackId == 0) print"<h1 class='msg-text'> Enter valid tracking number</h1>";
        }

        if($trackId && is_numeric($trackId)){
            $trackNum == $trackId ? 
            print"<h1 class='msg-text'>Package is on its way!!</h1>"  // tracking number entered match
            : print"<h1 class='msg-text'> Enter valid tracking number</h1>";  // tracking number entered does not match
        }


        echo"<pre><br>\$_GET = <br>";
        print_r($trackArray);  //print array
        echo"</pre>";

    ?>
</body>
</html>