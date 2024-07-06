<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<?php include 'navbar.php'; ?>

      <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $cust_id = $_POST['cust_id'];
        $name = $_POST['name'];
        $street = $_POST['street'];
        $town = $_POST['town'];
        $pin_code = $_POST['pin_code'];
        
      $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "shop";

      $conn = mysqli_connect($servername, $username, $password, $database);

      if (!$conn){
          die("Sorry we failed to connect: ". mysqli_connect_error());
      }
      else{ 

        $sql = "INSERT INTO `customer`(`cust_id`, `name`, `street`, `town`, `pin_code`) VALUES ('$cust_id','$name','$street','$town','$pin_code')";
        $result = mysqli_query($conn, $sql);
 
        if ($result) {
          echo '<div class="alert alert-success alert-dismissible" role="alert">
          <strong>Success!</strong> Your entry has been submitted successfully!
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
      } else {
          echo '<div class="alert alert-danger alert-dismissible" role="alert">
          <strong>Error!</strong> We are facing some technical issue and your entry was not submitted successfully! We regret the inconvenience caused!
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
      }
      }
    }  
?>
      <div class="container mt-40">
          <form action="/customer.php" method="post">
                <div class="mb-3">
                    <label for="cust_id" class="form-label">Customer-ID</label>
                    <input type="text" class="form-control" id="cust_id" id="cust_id" name="cust_id">
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Customer Name</label>
                    <input type="text" class="form-control" id="name" name="name" >
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="number" class="form-control" id="phone" name="phone" >
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Street</label>
                    <input type="text" class="form-control" id="street" name="street" >
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Town</label>
                    <input type="text" class="form-control" id="town" name="town" >
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Pin Code</label>
                    <input type="number" class="form-control" id="pincode" name="pin_code" >
                </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<div class="container">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
      <div class="col-md-4 d-flex align-items-center">
        <span class="mb-3 mb-md-0 text-body-secondary">Cloth Retail Shop</span>
      </div>
  
      <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
        <li class="ms-3">Jai Swarup</li>
        <li class="ms-3">Paras Jain</li>
        <li class="ms-3">Tanmay Bhat</li>
        <li class="ms-3">Chirand</li>
      </ul>
    </footer>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>