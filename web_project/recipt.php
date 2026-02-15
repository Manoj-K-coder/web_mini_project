<?php
$conn = mysqli_connect("localhost","root","","hotel_db");

if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$checkin=$_POST['checkin'];
$checkout=$_POST['checkout'];
$guests=$_POST['guests'];
$roomType=$_POST['roomType'];
$price=$_POST['price'];
$payment=$_POST['payment'];

$amenities = isset($_POST['amenities']) ?
implode(", ",$_POST['amenities']) : "None";

/* CALCULATE NUMBER OF NIGHTS */
$inDate = new DateTime($checkin);
$outDate = new DateTime($checkout);
$nights = $inDate->diff($outDate)->days;

/* CALCULATE TOTAL */
$total = $price * $nights;

/* INSERT INTO CORRECT TABLE */
$sql="INSERT INTO bookingss
(name,email,phone,checkin,checkout,guests,roomType,payment,price,amenities)
VALUES
('$name','$email','$phone','$checkin','$checkout','$guests','$roomType','$payment','$price','$amenities')";

if(!mysqli_query($conn,$sql)){
    die("Error: ".mysqli_error($conn));
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
<title>Receipt</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
<div class="card p-4 shadow">
<h3 class="text-center mb-4">Booking Receipt</h3>

<table class="table table-bordered">
<tr><th>Name</th><td><?php echo $name; ?></td></tr>
<tr><th>Email</th><td><?php echo $email; ?></td></tr>
<tr><th>Phone</th><td><?php echo $phone; ?></td></tr>
<tr><th>Check-in</th><td><?php echo $checkin; ?></td></tr>
<tr><th>Check-out</th><td><?php echo $checkout; ?></td></tr>
<tr><th>Nights</th><td><?php echo $nights; ?></td></tr>
<tr><th>Guests</th><td><?php echo $guests; ?></td></tr>
<tr><th>Room</th><td><?php echo $roomType; ?></td></tr>
<tr><th>Amenities</th><td><?php echo $amenities; ?></td></tr>
<tr><th>Price/Night</th><td>₹<?php echo $price; ?></td></tr>
<tr class="table-success">
<th>Total Amount</th>
<td><strong>₹<?php echo $total; ?></strong></td>
</tr>
<tr><th>Payment</th><td><?php echo $payment; ?></td></tr>
</table>

<button onclick="window.print()" class="btn btn-success">Print</button>

</div>
</div>

</body>
</html>
