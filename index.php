<?php
$title = "Client Information Form";
require_once './includes/header.php';
?>

<h2 class="text-center mb-4">Client Information Form</h2>

<form method="post" action="receive.php" class="bg-white p-4 rounded shadow-sm">
  <div class="col-md-6">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" name="email" required>
  </div>

  <div class="mb-3">
    <label for="address" class="form-label">Address</label>
    <input type="text" class="form-control" name="address" required>
  </div>

  <div class="mb-3 row">
    <div class="col-md-6">
      <label for="city" class="form-label">City</label>
      <input type="text" class="form-control" name="city" required>
    </div>

    <div class="col-md-3">
      <label for="province" class="form-label">Province</label>
      <select name="province" class="form-select" required>
        <option value="" disabled selected>Choose...</option>
        <option>Alberta</option>
        <option>British Columbia</option>
        <option>Manitoba</option>
        <option>New Brunswick</option>
        <option>Newfoundland and Labrador</option>
        <option>Northwest Territories</option>
        <option>Nova Scotia</option>
        <option>Nunavut</option>
        <option>Ontario</option>
        <option>Prince Edward Island</option>
        <option>Quebec</option>
        <option>Saskatchewan</option>
        <option>Yukon</option>
      </select>
    </div>

    <div class="col-md-3">
      <label for="postal_code" class="form-label">Area Code</label>
      <input type="text" class="form-control" name="postal_code" required>
    </div>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>

<div class="mt-4">
  <a href="viewrecords.php" class="btn btn-info w-100">View Records</a>
</div>

<!-- Delete section -->
    <div class="mt-2">
      <form action="delete.php" method="post" class="rounded-3 overflow-hidden" style="background-color: transparent; margin:0;">
        <div class="d-flex w-100">
          <input type="number"
                 class="form-control fw-bold text-dark border-0"
                 id="client_id"
                 name="client_id"
                 placeholder="Primary Key"
                 required
                 autofocus
                 style="background-color: #d4edda;
                        width: 150px;
                        height: 45px;
                        border-radius: 0;">
          <button type="submit"
                  class="btn fw-semibold text-white border-0"
                  style="background-color: #dc3545;
                         height: 45px;
                         width: 1500px;
                         border-radius: 0;">
            To delete a record, click this button
          </button>
        </div>
      </form>
    </div>


<?php require_once './includes/footer.php'; ?>
