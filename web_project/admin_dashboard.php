<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
if(!isset($_SESSION['admin'])){
    header("Location: admin_login.php");
    exit();
}

$conn = mysqli_connect("localhost","root","","hotel_db");

if(!$conn){
    die("Connection Failed: " . mysqli_connect_error());
}

/* DELETE */
if(isset($_GET['delete'])){
    $id = intval($_GET['delete']);
    mysqli_query($conn,"DELETE FROM bookingss WHERE id=$id"); // change to bookings if needed
    header("Location: admin_dashboard.php");
    exit();
}

/* SEARCH */
if(isset($_POST['search'])){
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $result = mysqli_query($conn,"SELECT * FROM bookingss WHERE email='$email'");
}else{
    $result = mysqli_query($conn,"SELECT * FROM bookingss ORDER BY id DESC");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Admin Dashboard</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">

<div class="d-flex justify-content-between mb-3">
<h3>All Bookings</h3>
<a href="logout.php" class="btn btn-danger">Logout</a>
</div>

<form method="POST" class="mb-3">
<div class="input-group">
<input type="email" name="email" class="form-control" placeholder="Search by Email" required>
<button type="submit" name="search" class="btn btn-primary">Search</button>
<a href="admin_dashboard.php" class="btn btn-secondary">Reset</a>
</div>
</form>

<table class="table table-bordered table-striped">
<tr class="table-dark">
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
<th>Checkin</th>
<th>Checkout</th>
<th>Nights</th>
<th>Guests</th>
<th>Room</th>
<th>Amenities</th>
<th>Price/Night</th>
<th>Total Amount</th>
<th>Payment</th>
<th>Action</th>
</tr>

<?php while($row = mysqli_fetch_assoc($result)){ 

    // Calculate nights
    $inDate = new DateTime($row['checkin']);
    $outDate = new DateTime($row['checkout']);
    $nights = $inDate->diff($outDate)->days;

    // Calculate total
    $total = $row['price'] * $nights;
?>

<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['phone']; ?></td>
<td><?php echo $row['checkin']; ?></td>
<td><?php echo $row['checkout']; ?></td>
<td><?php echo $nights; ?></td>
<td><?php echo $row['guests']; ?></td>
<td><?php echo $row['roomType']; ?></td>
<td><?php echo $row['amenities']; ?></td>
<td>₹<?php echo $row['price']; ?></td>
<td class="fw-bold text-success">₹<?php echo $total; ?></td>
<td><?php echo $row['payment']; ?></td>
<td>
<a href="admin_dashboard.php?delete=<?php echo $row['id']; ?>" 
class="btn btn-danger btn-sm"
onclick="return confirm('Delete this booking?')">
Delete
</a>
</td>
</tr>

<?php } ?>

</table>

</div>
</body>
</html>
