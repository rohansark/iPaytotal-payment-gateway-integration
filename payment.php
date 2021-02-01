<?php
require_once 'config.php';

// You can call our API following curl post example
$url = "https://ipaytotal.solutions/api/test/transaction";
$key = IPAYTOTAL_API_KEY;

$new_card = str_replace(' ', '', $_POST['cardNo']);

// Fill with real customer info
$data = [
    'api_key' => '16630iRX27NSvssxLrBPXJDirxT4ZZTcBW4Ajaz08qSpDiwyceDqL2jhOTjey0zfpCHa',
    'first_name' => $_SESSION['firstName'],
    'last_name' => $_SESSION['lastName'],
    'address' => $_SESSION['address'],
    'sulte_apt_no' => $_SESSION['custOrderId'],
    'country' => $_SESSION['country'],
    'state' => $_SESSION['state'], // if your country US then use only 2 letter state code.
    'city' => $_SESSION['city'],
    'zip' => $_SESSION['zip'],
    'ip_address' => $_SERVER['REMOTE_ADDR'],
    'birth_date' => '06/12/1990',
    'email' => $_SESSION['email'],
    'phone_no' => $_SESSION['phnNo'],
    'card_type' => '2', // See your card type in list
    'amount' => $_SESSION['amount'],
    'currency' => $_SESSION['currency'],
    'card_no' => $new_card,
    'ccExpiryMonth' => $_POST['month'],
    'ccExpiryYear' => $_POST['year'],
    'cvvNumber' => $_POST['cvv'],
    'shipping_first_name' => $_SESSION['firstName'],
    'shipping_last_name' => $_SESSION['lastName'],
    'shipping_address' => $_SESSION['address'],
    'shipping_country' => $_SESSION['country'],
    'shipping_state' => $_SESSION['state'],
    'shipping_city' => $_SESSION['city'],
    'shipping_zip' => $_SESSION[['zip']],
    'shipping_email' => $_SESSION['email'],
    'shipping_phone_no' => $_SESSION['phnNo'],
    'response_url' => 'https://bloodmates.000webhostapp.com/callback.php',
    'webhook_url' => 'https://bloodmates.000webhostapp.com/notification.php',
];

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json'
]);
$response = curl_exec($curl);
curl_close($curl);


$responseData = json_decode($response, true);



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
        <?php if($responseData['status']=='success'){ ?>
            <div class="card">
                <h3 class="text-center card-header"><?php echo $responseData['message'] ?></h3>
                <div class="card-body">
                    <p class="card-text text-center">Thanks for using ipaytotal</p>
                    <p class="card-text">Order ID - <?php echo $responseData['order_id'] ?></p>
                    <a href="ipay.php">Go back</a>
                </div>
            </div>
            <?php }else if($responseData['status']=='3d_redirect'){ ?>
            <div class="card">
                <h3 class="text-center card-header"><?php echo $responseData['message'] ?></h3>
                <div class="card-body">
                    
                    <a href="<?php echo $responseData['redirect_3ds_url'] ?>">Click Here To Go 3ds Link</a><br>
                    <a class="btn btn-primary" href="ipay.php">Go back</a>
                </div>
            </div>
            
            <?php }else{ ?>
            <div class="card">
                <h3 class="text-center card-header"><?php echo $responseData['message'] ?></h3>
                <div class="card-body">
                    <p class="card-text">Order ID - <?php echo $responseData['status'] ?></p>
                    <a class="btn btn-primary" href="ipay.php">Go back</a>
                </div>
            </div>
            
            <?php } ?>


    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>
