<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="/index.html">Cloth Retail Shop</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="/project.html">Project</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/item.php">Item</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Account
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/customer.php">Customer</a></li>
                  <li><a class="dropdown-item" href="/supplier.php">Supplier</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Bill
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/sale.php">Sales</a></li>
                  <li><a class="dropdown-item" href="/purchase.php">Purchase</a></li>
                </ul>
              </li>
          </div>
        </div>
      </nav>
      <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $item_id = $_POST['item_id'];
        $name = $_POST['name'];
        $stock = $_POST['stock'];
        $price = $_POST['price'];
        $category = $_POST['category'];
        
      $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "shop";

      $conn = mysqli_connect($servername, $username, $password, $database);

      if (!$conn){
          die("Sorry we failed to connect: ". mysqli_connect_error());
      }
      else{ 

        $sql = "INSERT INTO `item`(`item_id`, `name`, `stock`, `price`, `category`) VALUES ('$item_id','$name','$stock','$price','$category')";
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
          <form action="/item.php" method="post">
                <div class="mb-3">
                    <label for="item_id" class="form-label">Item-ID</label>
                    <input type="text" class="form-control" id="item_id" name="item_id">
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" class="form-control" id="price" name="price">
                </div>
                <div class="mb-3">
                    <label for="stock" class="form-label">Quantity In Stock</label>
                    <input type="text" class="form-control" id="stock" name="stock">
                </div>
                <div class="mb-3">
                  <label for="category" class="form-label">Category</label>
                  <select class="form-select" aria-label="Default select example" name="category">
                    <option selected>Open this select menu</option>
                    <option value="1">Bedsheets</option>
                    <option value="2">Kurti</option>
                    <option value="3">Cushion Cover</option>
                  </select>
                    <!-- <input type="text" class="form-control" id="category" name="category"> -->
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