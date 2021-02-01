<?php

include('config.php');

$status = $_GET['status'];
$message = $_GET['message'];
$order_id = $_GET['order_id'];
$sulte_apt_no = $_GET['sulte_apt_no'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Status | ipayTotal</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <br>
        <img class="text-center" style="width:150px;" src="logo.png" alt="ipaytotal">
        <h1 class="text-center"> ipaytotal </h1>
        <hr>
        <div class="card">
            <h3 class="text-center card-header"><?php echo $message ?></h3>
            <div class="card-body">
                <p class="card-text">Order ID - <?php echo $order_id ?></p>
                <p class="card-text">Customer Order ID - <?php echo $sulte_apt_no ?></p>
                <a href="ipay.php">Go back</a>
            </div>
        </div>


    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>