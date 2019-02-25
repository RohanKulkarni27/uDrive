<?php require_once('./config.php'); ?>

<form action="charge.php" method="post">
<?php 
  $id=$_GET['id'];
  echo "<input type='text' value='".$id."' name='cardID' style='display:none;'/>";
?>
  <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
          data-key="<?php echo $stripe['publishable_key']; ?>"
          data-description="Access for a year"
          data-amount="14400"
          data-locale="auto"></script>
</form>