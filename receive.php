<?php
$title = "Add Record";
require_once './includes/header.php';
require_once './db/conn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $address = mysqli_real_escape_string($conn, $_POST['address']);
  $city = mysqli_real_escape_string($conn, $_POST['city']);
  $province = mysqli_real_escape_string($conn, $_POST['province']);
  $postal_code = mysqli_real_escape_string($conn, $_POST['postal_code']);

  $sql = "INSERT INTO client_info (email, address, city, province, postalcode)
          VALUES ('$email', '$address', '$city', '$province', '$postal_code')";

  if (mysqli_query($conn, $sql)) {
      echo "<div class='alert alert-success text-center'>Record added successfully!</div>";
  } else {
      echo "<div class='alert alert-danger text-center'>Error: " . mysqli_error($conn) . "</div>";
  }

  mysqli_close($conn);
}
?>

<div class="text-center mt-3">
  <a href="index.php" class="btn btn-secondary">Back to Form</a>
</div>

<?php require_once './includes/footer.php'; ?>
