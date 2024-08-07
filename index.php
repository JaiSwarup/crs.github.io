<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
  <?php include 'navbar.php'; ?>
      <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
          <div class="col-10 col-sm-8 col-lg-6">
            <img src="/static/clothes.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
          </div>
          <div class="col-lg-6">
            <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">About the project</h1>
            <p class="lead">This project aims to address a critical challenge in the realm of cloth retail shops - the efficient supply and management of resources. While the impact of the COVID-19 pandemic has been substantial on various sectors of the economy, including retail, it is important to emphasize that the challenges faced by cloth retail shops are not inherently tied to the pandemic. The need for adaptability and resource management in this industry extends beyond pandemic-related issues.</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
            </div>
          </div>
        </div>
      </div>
    <div class="px-4 pt-5 my-5 text-center border-bottom">
        <h1 class="display-4 fw-bold text-body-emphasis">How this project aims to help</h1>
        <div class="col-lg-6 mx-auto">
          <p class="lead mb-4">A cloth retail project endeavors to revamp the industry by enhancing inventory management, optimizing the supply chain, and fostering a superior customer experience. By leveraging technology, adapting to trends, and prioritizing sustainability, this project aims to ensure cloth retail businesses remain competitive, customer-centric, and financially robust.</p>
          <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
            <button type="button" class="btn btn-primary btn-lg px-4 me-sm-3" id="signin">Get Started</button>
          </div>
        </div>
      </div>

      <div class="container">
      <?php include 'footer.php'; ?>

      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script>
      var getStarted = document.querySelector('#signin');
      getStarted.addEventListener('click', function() {
        window.location.href = '/signin.php';
      });
    </script>

</body>
</html>