<?php 
$apiKey =  rzp_test_mZNzawpicVOX3V 
?>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<form action="" method="POST">
<script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="<?php echo $apiKey; ?>" 
    data-amount="3000" 
    data-currency="INR"//You can accept international payments by changing the currency code. Contact our Support Team to enable International for your account
    data-id="<?php echo 'ORD'.rand(10, 100).'END';?>"//Replace with the order_id generated by you in the backend.
    data-buttontext="Pay with Razorpay"
    data-name="InSaid Transaction"
    data-description="Money transfer for Insaid "
    data-image="https://www.insaid.co/wp-content/uploads/2018/11/INSAID_Logo_with-INSAID-Text-3.png"
    data-prefill.name="<?php echo $_POST['fname']?>"
    data-prefill.email="<?php echo $_POST['email']?>"
    data-prefill.contact="<?php echo $_POST['contact']?>"
    data-theme.color="#F37254">


</script>
<input type="hidden" custom="Hidden Element" name="hidden">
</form>


