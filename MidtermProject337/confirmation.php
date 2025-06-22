<!DOCTYPE html>
<html>
    <head>
        <title>Confirmation</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    </head>
    <body>
        <div class="menu"><?php include 'navbar.php';?></div>
            <div class="container">
                <?php
                $firstname = htmlspecialchars($_POST['firstname'], ENT_QUOTES);
                $lastname = htmlspecialchars($_POST['lastname'], ENT_QUOTES);
                $nas = htmlspecialchars($_POST['nas'], ENT_QUOTES);
                $city = htmlspecialchars($_POST['city'], ENT_QUOTES);
                $state = htmlspecialchars($_POST['state'], ENT_QUOTES);
                $zip = htmlspecialchars($_POST['zip'], ENT_QUOTES);
                $checkin = htmlspecialchars($_POST['checkin'], ENT_QUOTES);
                $checkout = htmlspecialchars($_POST['checkout'], ENT_QUOTES);
                $room = htmlspecialchars($_POST['room'], ENT_QUOTES);
                $phone = htmlspecialchars($_POST['phone'], ENT_QUOTES);
                $email = htmlspecialchars($_POST['email'], ENT_QUOTES);
                $people = htmlspecialchars($_POST['people'], ENT_QUOTES);
                $payment = htmlspecialchars($_POST['payment'], ENT_QUOTES);
                $card = htmlspecialchars($_POST['card'], ENT_QUOTES);
                $requests = htmlspecialchars($_POST['requests'], ENT_QUOTES);
                $phonenumber = preg_replace("/^(\d{3})(\d{3})(\d{4})$/", "($1) $2-$3", $phone);
                $cardnumber = preg_replace("/^(\d{4})(\d{4})(\d{4})(\d{4})$/", "$1 $2 $3 $4", $card);


                $checkinDate = new DateTime($checkin);
                $checkoutDate = new DateTime($checkout);
                $interval = $checkinDate->diff($checkoutDate);
                $numDays = $interval->days;

                $tax = 0.07;
                if ($room === "King"){
                    $cost = 200;
                }
                elseif ($room === "Queen"){
                    $cost = 150;
                }
                else{
                    $cost = 300;
                }
                $total = ($numDays*$cost)*(1+$tax);
                $totalprice = "$" . number_format($total, 2);
                ?>

                <h1><strong>Thank you <?php echo $firstname ." ". $lastname;?> for your reservation</strong></h1>
                <p>The following are the information that you entered:</p>

                <div class="form-group mb-4 row">
                    <label class="control-label col-sm-3">Number & Address </label>
                    <div class="col-sm-9">
                        <p class="form-control-static"><?php echo $nas;?></p>
                    </div>
                </div>

                <div class="form-group mb-4 row">
                    <label class="control-label col-sm-3">City </label>
                    <div class="col-sm-9">
                        <p class="form-control-static"><?php echo $city;?></p>
                    </div>
                </div>

                <div class="form-group mb-4 row">
                    <label class="control-label col-sm-3">State </label>
                    <div class="col-sm-9">
                        <p class="form-control-static"><?php echo $state;?></p>
                    </div>
                </div>

                <div class="form-group mb-4 row">
                    <label class="control-label col-sm-3">Zip Code </label>
                    <div class="col-sm-9">
                        <p class="form-control-static"><?php echo $zip;?></p>
                    </div>
                </div>

                <div class="form-group mb-4 row">
                    <label class="control-label col-sm-3">Check-in Date </label>
                    <div class="col-sm-9">
                        <p class="form-control-static"><?php echo $checkin;?></p>
                    </div>
                </div>

                <div class="form-group mb-4 row">
                    <label class="control-label col-sm-3">Check-out Date </label>
                    <div class="col-sm-9">
                        <p class="form-control-static"><?php echo $checkout;?></p>
                    </div>
                </div>

                <div class="form-group mb-4 row">
                    <label class="control-label col-sm-3">Room Type </label>
                    <div class="col-sm-9">
                        <p class="form-control-static"><?php echo $room;?></p>
                    </div>
                </div>

                <div class="form-group mb-4 row">
                    <label class="control-label col-sm-3">Number of People </label>
                    <div class="col-sm-9">
                        <p class="form-control-static"><?php echo $people;?></p>
                    </div>
                </div>

                <div class="form-group mb-4 row">
                    <label class="control-label col-sm-3">Number of Days </label>
                    <div class="col-sm-9">
                        <p class="form-control-static"><?php echo $numDays;?></p>
                    </div>
                </div>

                <div class="form-group mb-4 row">
                    <label class="control-label col-sm-3">Email </label>
                    <div class="col-sm-9">
                        <p class="form-control-static"><?php echo $email;?></p>
                    </div>
                </div>

                <div class="form-group mb-4 row">
                    <label class="control-label col-sm-3">Phone Number </label>
                    <div class="col-sm-9">
                        <p class="form-control-static"><?php echo $phonenumber;?></p>
                    </div>
                </div>

                <div class="form-group mb-4 row">
                    <label class="control-label col-sm-3">Credit Card </label>
                    <div class="col-sm-9">
                        <p class="form-control-static"><?php echo $payment;?></p>
                    </div>
                </div>

                <div class="form-group mb-4 row">
                    <label class="control-label col-sm-3">Card Number </label>
                    <div class="col-sm-9">
                        <p class="form-control-static"><?php echo $cardnumber;?></p>
                    </div>
                </div>

                <div class="form-group mb-4 row">
                    <label class="control-label col-sm-3">Special Request </label>
                    <div class="col-sm-9">
                        <p class="form-control-static"><?php echo $requests;?></p>
                    </div>
                </div>

                <div class="form-group mb-4 row">
                    <label class="control-label col-sm-3">Total Charge </label>
                    <div class="col-sm-9">
                        <p class="form-control-static"><?php echo $totalprice;?></p>
                    </div>
                </div>
                
                <div class="form-group mb-4 row">
                </div>
            </div>
        </div>
    </body>
</html>
