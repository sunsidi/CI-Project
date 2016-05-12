<!DOCTYPE html>
<html>
<body>

<h1>My First Heading</h1>

<form action="./charge.php" method="POST">
  <script
    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
    data-key="pk_test_4PkZgbRXDU8aVuSiTySCgiYW"
    data-amount="10000"
    data-name="Demo Site"
    data-description="2 widgets ($20.00)"
    data-image="/128x128.png">
  </script>
</form>

</body>
</html>