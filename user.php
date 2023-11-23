<?php
include 'connect.php';
if (isset($_POST['submit'])) {
  $serial_no = $_POST['serial_no'];
  $brand = $_POST['brand'];
  $model = $_POST['model'];
  $status = $_POST['status'];
  $description = $_POST['description'];
  $directorate = $_POST['directorate'];
  $quantity = $_POST['quantity'];
  $purchase_date = $_POST['purchase_date'];


  $sql = "insert into `item`(serial_no,brand,model,status,description,directorate,quantity,purchase_date) 
    values('$serial_no','$brand','$model','$status','$description','$directorate','$quantity','$purchase_date')";
  $result = mysqli_query($con, $sql);
  if ($result) {
    echo "data inserted successfully";
    header('location:display.php');
  } else {
    die(mysqli_error($con));
  }
}


?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <title> hardware_inventory</title>
</head>

<body>
  <div class="container my-5">
    <form method="post">
      <div class="mb-3">
        <label>Serial No</label>
        <input type="text" class="form-control" placeholder="Enter Your Serial No" name="serial_no" autocomplete="off">
      </div>

      <div class="form-group">
        <form method="post">
          <div class="mb-3">
            <label>Brand</label>
            <input type="text" class="form-control" placeholder="Enter Your brand" name="brand" autocomplete="off">
          </div>

          <div class="form-group">
            <form method="post">
              <div class="mb-3">
                <label>Model</label>
                <input type="text" class="form-control" placeholder="Enter Your model " name="model" autocomplete="off">
              </div>

              <div class="form-group">
                <form method="post">
                  <div class="mb-3">
                    <label>description</label>
                    <textarea rows="10" cols="50" class="form-control" placeholder="Enter Your description" name="description" autocomplete="off"></textarea>
                  </div>

                  <div class="form-group col-md-5 mb-3">
                    <label for="vendorDetailsStatus">Status</label>
                    <select name="status" class="form-control chosenSelect">
                      <?php include('inc/statusList.html'); ?>
                    </select>
                  </div>
                  <div class="form-group col-md-5 mb-3">
                    <label for="vendorDetailsStatus">Directorate</label>
                    <select name="directorate" class="form-control chosenSelect">
                      <?php include('inc/directorList.html'); ?>
                    </select>
                  </div>

                  <div class="form-group">
                    <form method="post">
                      <div class="mb-3">
                        <label>quantity</label>
                        <input type="text" class="form-control" placeholder="Enter Your quantity" name="quantity" autocomplete="off">
                      </div>

                      <div class="form-group">
                        <form method="post">
                          <div class="mb-3">
                            <label>purchase_date</label>
                            <input type="date" class="form-control" placeholder="Enter Your purchase_date" name="purchase_date" autocomplete="off">
                          </div>
                          <button type="submit" class="btn btn-dark" name="submit">Submit</button>
                        </form>
                      </div>


</body>

</html>