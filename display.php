<?php
include 'connect.php'; ?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Crud Operation</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

  <div class="container">
    <a href="user.php" class="text-light"><button class="btn btn-dark my-5">Add User
      </button></a>&nbsp;&nbsp;
    <!-- <a href="excelupload.php" class="text-light"><button class="btn btn-info my-5">Upload a ExcelSheet 01
      </button></a> -->

     

    <table class="table">
      <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">Serial No</th>
          <th scope="col">Brand</th>
          <th scope="col">Model</th>
          <th scope="col">Status</th>
          <th scope="col">description</th>
          <th scope="col">Directorate</th>
          <th scope="col">Quantity</th>
          <th scope="col">Purchase_date</th>
          <th scope="col">Operations</th>
        </tr>
      </thead>
      <tbody>

        <?php
        $sql = "Select * from `item`";
        $result = mysqli_query($con, $sql);
        if ($result) {
          while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            $serial_no = $row['serial_no'];
            $brand = $row['brand'];
            $model = $row['model'];
            $status = $row['status'];
            $description = $row['description'];
            $directorate = $row['directorate'];
            $quantity = $row['quantity'];
            $purchase_date = $row['purchase_date'];
          
            echo '<tr>
        <th scope="row">' . $id . '</th>
        <td>' . $serial_no . '</td>
        <td>' . $brand . '</td>
        <td>' . $model . '</td>
        <td>' . $status . '</td>
        <td>' . $description. '</td>
        <td>' . $directorate . '</td>
        <td>' . $quantity . '</td>
        <td>' . $purchase_date . '</td>
        <td>
    <button class="btn btn-success"><a href="update.php? updateid=' . $id . ' " class="text-light">Update</a> </button>
    <button class="btn btn-danger"><a href="delete.php? deleteid=' . $id . ' " class="text-light">Delete</a> </button>
    </td>
      </tr>';
          }
        }

        ?>

     

      </tbody>
    </table>
  </div>

</body>

</html>