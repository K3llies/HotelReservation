<!DOCTYPE html>
<html>
    <head>
        <title>Reservation</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    </head>
    <body>
    <div class="menu"><?php include 'navbar.php';?></div>
        <div class="container">
            <h1><strong>Reservation at MKAB's Resort</strong></h1>
            <form action="confirmation.php" method="POST">

                <div class="form-group mb-4 row">
                    <label class="control-label col-sm-3" for="firstname">First Name </label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="firstname" name="firstname" autofocus required>
                    </div>
                </div>

                <div class="form-group mb-4 row">
                    <label class="control-label col-sm-3" for="lastname">Last Name </label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="lastname" name="lastname" required>
                    </div>
                </div>

                <div class="form-group mb-4 row">
                    <label class="control-label col-sm-3" for="nas">Number & Street </label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="nas" name="nas" required>
                    </div>
                </div>

                <div class="form-group mb-4 row">
                    <label class="control-label col-sm-3" for="city">City </label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="city" name="city" required>
                    </div>
                </div>

                <div class="form-group mb-4 row">
                    <label class="control-label col-sm-3" for="state">State </label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="state" name="state" required>
                    </div>
                </div>

                <div class="form-group mb-4 row">
                    <label class="control-label col-sm-3" for="zip">Zip Code </label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control" id="zip" name="zip" required>
                    </div>
                </div>

                <div class="form-group mb-4 row">
                    <label class="control-label col-sm-3" for="checkin">Check-in Date </label>
                    <div class="col-sm-9">
                        <input type="date" class="form-control" id="checkin" name="checkin" required>
                    </div>
                </div>

                <div class="form-group mb-4 row">
                    <label class="control-label col-sm-3" for="checkout">Check-out Date </label>
                    <div class="col-sm-9">
                        <input type="date" class="form-control" id="checkout" name="checkout" required>
                    </div>
                </div>

                <div class="form-group mb-4 row">
                    <label class="control-label col-sm-3" for="room">Room Type </label>
                    <div class="col-sm-9">
                        <select class="form-control" id="room" name="room">
                            <option value="" disabled selected>Select Room Type</option>
                            <option value="King">King</option>
                            <option value="Queen">Queen</option>
                            <option value="Suite">Suite</option>
                        </select>
                    </div>
                </div>

                <div class="form-group mb-4 row">
                    <label class="control-label col-sm-3" for="phone">Phone Number </label>
                    <div class="col-sm-9">
                        <input type="tel" class="form-control" id="phone" placeholder="(###) ###-####" name="phone" required>
                    </div>
                </div>

                <div class="form-group mb-4 row">
                    <label class="control-label col-sm-3" for="email">Email </label>
                    <div class="col-sm-9">
                        <input type="email" class="form-control" id="email" placeholder="someone@abc.com" name="email" required>
                    </div>
                </div>

                <div class="form-group mb-4 row">
                    <label class="control-label col-sm-3" for="people">Number of People </label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control" id="people" name="people" required>
                    </div>
                </div>

                <div class="form-group mb-4 row">
                    <label class="control-label col-sm-3" for="payment">Payment Method </label>
                    <div class="col-sm-9">
                        <select class="form-control" id="payment" name="payment">
                            <option value="" disabled selected>Select Payment Method</option>
                            <option value="MC">MC</option>
                            <option value="VISA">VISA</option>
                            <option value="AMEX">AMEX</option>
                            <option value="Discover">Discover</option>
                        </select>
                    </div>
                </div>

                <div class="form-group mb-4 row">
                    <label class="control-label col-sm-3" for="card">Card Number </label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="card" maxlength="16" pattern="\d{16}" required title="Please enter a 16-digit card number." name="card" required>
                    </div>
                </div>

                <div class="form-group mb-4 row">
                    <label class="control-label col-sm-3" for="requests">Special Requests </label>
                    <div class="col-sm-9">
                        <textarea class="form-control" id="requests" name="requests" rows="3"></textarea>
                    </div>
                </div>

                <div class="form-group mb-4 row">
                    <div class="col-sm-offset-3 col-sm-9">
                    <button type="submit" class="btn btn-primary">Reserve a room</button>
                    <button type="reset" class="btn btn-success">Clear</button>
                    </div>
                </div>

                <div class="form-group mb-4 row">
                </div>
            </form>
        </div>
    </body>
</html>