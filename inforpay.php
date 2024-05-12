<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>MoMo Sandbox</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="./statics/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css"/>
    <!-- CSS -->
</head>

<div class="col-md-4 methodofpayment">
    <h4>Method of payment</h4>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="payment" id="exampleRadios1" value="cash">
        <img src="img/cash.png" height="34" width="64">
        <label class="form-check-label" for="exampleRadios1">
            Cash
        </label>
    </div>
    <br>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="payment" id="exampleRadios4" value="transfer">
        <img src="img/momo.png" height="44" width="64">
        <label class="form-check-label" for="exampleRadios4">
            Transfer
        </label>
        <br>
        <form method="POST" target="_blank" enctype="application/x-www-form-urlencoded" action="momoOnl.php">
            <input type="submit"  name="Momo" value="Pay by QR Momo" class="btn btn-primary"></input>
        </form>
        <br>
        <form method="POST" target="_blank" enctype="application/x-www-form-urlencoded" action="momoATM.php">
            <input type="submit"  name="Momo" value="Pay by ATM Momo" class="btn btn-primary"></input>
        </form>
    </div>

    <input type="submit" value="Pay now" name="redirect" class="btn">
</div>


<script type="text/javascript" src="./statics/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="./statics/moment/min/moment.min.js"></script>
</body>
</html>
