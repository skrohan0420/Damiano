<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Payment Successful</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <style>
    /* Custom styles for the payment successful page */
    .container {
      margin-top: 50px;
    }
    .success-icon {
      font-size: 4em;
      color: #28a745;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6 text-center">
        <i class="fa fa-check-circle success-icon"></i>
        <h2 class="mt-3">Payment Successful!</h2>
        <p class="mt-3 font-weight-bold">Thank you for your contrubution. Your transaction was successful.</p>
        <p class="mt-3">Order ID: 20231227132727-0026-RET-SNRTBP</p>
        <p>Tracking ID: 20231227132727-0026-RET-SNRTBP</p>
        <p class="mt-3">Transaction Status: Success</p>
        <p class="mt-3">Transaction Amount: 3000</p>
        <p class="mt-3 font-weight-bold">The donor will receive a 80G receipt in 5-6 <br>working days at the regstered email <br>address.</p>
        <p class="mt-3">Thank you for generous donation!</p>
        <a href="<?php echo base_url('donate')?>" class="btn btn-primary mt-3">Back To Home</a>
      </div>
    </div>
  </div>
  <!-- Bootstrap JS and dependencies (jQuery and Popper.js) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <!-- Font Awesome -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
</body>
</html>
