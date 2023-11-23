<?php
include 'connect.php';
$id = $_GET['updateid'];
$sql = "Select * from `item` where id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);

$serial_no = $row['serial_no'];
$brand = $row['brand'];
$model = $row['model'];
$status = $row['status'];
$description = $row['description'];
$directorate = $row['directorate'];
$quantity = $row['quantity'];
$purchase_date = $row['purchase_date'];

if (isset($_POST['submit'])) {
  $serial_no = $_POST['serial_no'];
  $brand = $_POST['brand'];
  $model = $_POST['model'];
  $status = $_POST['status'];
  $description = $_POST['description'];
  $directorate = $_POST['directorate'];
  $quantity = $_POST['quantity'];
  $purchase_date = $_POST['purchase_date'];


  $sql = "update `item` set id=$id,serial_no='$serial_no', brand='$brand',model='$model',status='$status',description='$description',directorate='$directorate',quantity='$quantity',purchase_date='$purchase_date'
    where id=$id ";
  $result = mysqli_query($con, $sql);
  if ($result) {
    echo "data Updated successfully";
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

  <title>hardware_inventory</title>
</head>

<body>

  <div class="container my-5">
    <form method="post">
      <div class="mb-3">

        <label>serial no</label>
        <input type="text" class="form-control" placeholder="Enter Your serial no" name="serial_no" autocomplete="off" value=<?php echo $serial_no; ?>>
      </div>

      <div class="form-group">
        <form method="post">
          <div class="mb-3">

            <label>brand</label>
            <input type="text" class="form-control" placeholder="Enter Your brand" name="brand" autocomplete="off" value=<?php echo $brand; ?>>
          </div>

          <div class="form-group">
            <form method="post">
              <div class="mb-3">

                <label>model</label>
                <input type="text" class="form-control" placeholder="Enter Your model Number" name="model" autocomplete="off" value=<?php echo $model; ?>>
              </div>
                  <form method="post">
                    <div class="mb-3">

                      <label>description</label>
                      <textarea rows="10" cols="50" class="form-control" placeholder="Enter Your description" name="description" autocomplete="off"></textarea>
                      <!-- <input type="text" class="form-control" placeholder="Enter Your description" name="description" autocomplete="off" value=<?php echo $description; ?>> -->
                    </div>
                     
                    <div class="form-group col-md-5 mb-3">
                                  <label for="vendorDetailsStatus">Status</label>
                                  <select name="status" class="form-control chosenSelect">
                                    <?php include('inc/statusList.html'); ?>
                                  </select>
                                </div>
                                <div class="form-group col-md-5 mb-3">
                                  <label for="vendorDetails">Directorate</label>
                                  <select name="directorate" class="form-control chosenSelect">
                                    <?php include('inc/directorList.html'); ?>
                                  </select>
                                </div>

                        <div class="form-group">
                          <form method="post">
                            <div class="mb-3">

                              <label>quantity</label>
                              <input type="text" class="form-control" placeholder="Enter Your quantity Number" name="quantity" autocomplete="off" value=<?php echo $quantity; ?>>
                            </div>

                            <div class="form-group">
                              <form method="post">
                                <div class="mb-3">

                                  <label>purchase_date</label>
                                  <input type="date" class="form-control" placeholder="Enter Your purchase_date" name="purchase_date" autocomplete="off" value=<?php echo $purchase_date; ?>>
                                </div>

                             

                                <div class="mt-5">
                                <button type="submit" class="btn btn-dark" name="submit">Update</button>
                                </div>
                              </form>
                            </div>


</body>

</html>