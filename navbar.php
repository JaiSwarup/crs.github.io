<nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="/index.php">Cloth Retail Shop</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
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
        </ul>
        <button type="button" class="btn btn-primary btn-lg px-2 py-1 me-sm-3 fs-6" id="login">Login / Register</button>
      </div>
    </div>
  </nav>
  <script>
      var getStarted = document.querySelector('#login');
      getStarted.addEventListener('click', function() {
        window.location.href = '/signin.php';
      });
    </script>