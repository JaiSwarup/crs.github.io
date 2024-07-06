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

      <form action="/DBMS/supplier.php" method="get">
  <button type="submit" name="display">Display</button>
</form>

<?php
if (isset($_GET['display'])) {
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "shop";

  $conn = mysqli_connect($servername, $username, $password, $database);


  $sql = "SELECT * FROM `supplier`";
  $result = mysqli_query($conn, $sql);

  $num = mysqli_num_rows($result);

  if ($num > 0) {
    echo "<table><tr><th>ID</th><th>Name</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
      echo "<tr><td>".$row['supp_id']."</td><td>".$row['name']. "</td></tr>";
    }
    echo "</table>";
  }
}
?>


  <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $supp_id = $_POST['supp_id'];
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        
      $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "shop";

      $conn = mysqli_connect($servername, $username, $password, $database);

      if (!$conn){
          die("Sorry we failed to connect: ". mysqli_connect_error());
      }
      else{ 

        $sql = "INSERT INTO `supplier` (`supp_id`, `name`) VALUES ('$supp_id', '$name')";
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
          <form action="/DBMS/supplier.php" method="post">
                <div class="mb-3">
                    <label for="supp_id" class="form-label">Supplier-Id</label>
                    <input type="text" class="form-control" id="supp_id" name="supp_id" >
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" >
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="number" class="form-control" id="phone" name="phone" >
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<div class="container">
    <?php include 'footer.php'; ?>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>