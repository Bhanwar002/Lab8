<?php
$title = "View Records";
require_once './includes/header.php';
require_once './db/conn.php';

$sql = "SELECT * FROM client_info";
$result = mysqli_query($conn, $sql);
?>

<h2 class="text-center mb-4">All Client Records</h2>

<div class="table-responsive">
<table class="table table-striped table-bordered">
  <thead class="table-dark">
    <tr>
      <th>ID</th>
      <th>Email</th>
      <th>Address</th>
      <th>City</th>
      <th>Province</th>
      <th>Postal Code</th>
    </tr>
  </thead>
  <tbody>
    <?php
    if ($result && mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>{$row['client_id']}</td>
                <td>{$row['email']}</td>
                <td>{$row['address']}</td>
                <td>{$row['city']}</td>
                <td>{$row['province']}</td>
                <td>{$row['postalcode']}</td>
                
              </tr>";
      }
    } else {
      echo "<tr><td colspan='7' class='text-center'>No records found</td></tr>";
    }
    ?>
  </tbody>
</table>
</div>

<div class="text-center mt-3">
  <a href="index.php" class="btn btn-secondary">Back to Form</a>
</div>

<?php
mysqli_close($conn);
require_once './includes/footer.php';
?>
