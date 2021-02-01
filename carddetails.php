<?php
include('config.php');
$_SESSION['firstName'] = $_POST['firstName'];
$_SESSION['lastName'] = $_POST['lastName'];
$_SESSION['address'] = $_POST['address'];
$_SESSION['custOrderId'] = $_POST['custOrderId'];
$_SESSION['country'] = $_POST['country'];
$_SESSION['state'] = $_POST['state'];
$_SESSION['city'] = $_POST['city'];
$_SESSION['zip'] = $_POST['zip'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['phnNo'] = $_POST['phnNo'];
$_SESSION['amount'] = $_POST['amount'];
$_SESSION['currency'] = $_POST['currency'];

if ($_SESSION['country'] == "US") {
    $state = substr($_SESSION['state'], 0, 2);
    echo $state;
    $_SESSION['state'] = strtoupper($state);
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enter Card Details | ipayTotal</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style>
        .card {
            margin-left: 20%;
            margin-right: 20%;
            background-color: #EFF7FC;
        }

        .card-text {
            background-color: #38B2FF;
            color: white;
            padding: 0.2rem;
            border-radius: 2 rem;
        }
    </style>
</head>

<body>
    <div class="container">
        <br>
        <img class="text-center" style="width:150px;" src="logo.png" alt="ipaytotal">
        <h3 class="text-center">Enter Card Details</h3>
        <div class="card">
            <div class="card-body">
                <div class="form-wrap">
                    <span class="card-text">PAY - <?php echo $_SESSION['currency'] . $_SESSION['amount']; ?></span>
                    <hr>
                    <form action="payment.php" name="form-card" method="post" onsubmit="return validateForm()">
                        <div class="form-group">
                            <label for="cardNo">Card No -</label>
                            <input type="text" class="form-control" name="cardNo" id="card" placeholder="Enter 16 Digit Card Number(#### #### #### ####)" maxlength="19" required>
                        </div>
                        <div class="row">
                            <div class="col">

                                <label for="month">Expiry Month</label>
                                <select name="month" id="month" class="form-control" name="month" required>
                                    <option value="01">01</option>
                                    <option value="02">02</option>
                                    <option value="03">03</option>
                                    <option value="04">04</option>
                                    <option value="05">05</option>
                                    <option value="06">06</option>
                                    <option value="07">07</option>
                                    <option value="08">08</option>
                                    <option value="09">09</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                </select>
                            </div>
                            <div class="col">
                                <label for="year">Expiry Year</label>
                                <select name="year" id="year" class="form-control" name="year" required>
                                    <option value="2020">2020</option>
                                    <option value="2021">2021</option>
                                    <option value="2022">2022</option>
                                    <option value="2023">2023</option>
                                    <option value="2024">2024</option>
                                    <option value="2025">2025</option>
                                    <option value="2026">2026</option>
                                    <option value="2027">2027</option>
                                    <option value="2028">2028</option>
                                    <option value="2029">2029</option>
                                    <option value="2030">2030</option>
                                    <option value="2031">2031</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="cvv">CVV -</label>
                            <input type="text" class="form-control" name="cvv" id="cvv" placeholder="Enter CVV" maxlength="3" pattern="[0-9]+" required>
                        </div>
                        <br>
                        <hr>
                        <div id="btn" class="text-center">
                            <button class="btn btn-primary" type="submit">PAY</button>
                            <button class="btn btn-danger" type="submit">CANCEL</button>
                        </div>


                    </form>
                </div>
            </div>
        </div>


    </div>
    
    <script>
        function validateForm() {

            var mobile = document.forms[0]["cardNo"].value;
            mobile = mobile.replace(/ /g, ""); 
            mob_length = mobile.length;
            if (mob_length != 16) {
                alert("Card number must be of 16 digits");
                return false;
            }

            var cvv = document.forms[0]["cvv"].value;
            cvvs = cvv.length;
            if (cvvs != 3) {
                alert("CVV must be of 3 digits");
                return false;
            }

        }
        
        document.querySelector('#card').addEventListener('keydown', (e) => {
    e.target.value = e.target.value.replace(/(\d{4})(\d+)/g, '$1 $2')
})
/* Jquery */
$('#card').keyup(function() {
  $(this).val($(this).val().replace(/(\d{4})(\d+)/g, '$1 $2'))
});
    </script>




    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>