<?php
$title = "Delete Record";
require_once './includes/header.php';
require_once './db/conn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $client_id = mysqli_real_escape_string($conn, $_POST['client_id']);

  $sql = "DELETE FROM client_info WHERE client_id = '$client_id'";

  if (mysqli_query($conn, $sql)) {
    if (mysqli_affected_rows($conn) > 0) {
      echo "<div class='alert alert-success text-center'>Record with ID $client_id deleted successfully!</div>";
    } else {
      echo "<div class='alert alert-warning text-center'>No record found with ID $client_id.</div>";
    }
  } else {
    echo "<div class='alert alert-danger text-center'>Error deleting record: " . mysqli_error($conn) . "</div>";
  }

  mysqli_close($conn);
}
?>

<div class="text-center mt-3">
  <a href="viewrecords.php" class="btn btn-info">Back to Records</a>
</div>

<?php require_once './includes/footer.php'; ?>
