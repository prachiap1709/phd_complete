<?php

require('../include/dbconfig.php');

session_start();

require('razorpay-php/Razorpay.php');
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;

$success = true;

$error = "Payment Failed";
 
if (empty($_POST['razorpay_payment_id']) === false)
{
    $api = new Api($keyId, $keySecret);

    try
    {
        // Please note that the razorpay order ID must
        // come from a trusted source (session here, but
        // could be database or something else)
        $attributes = array(
            'razorpay_order_id' => $_POST['razorpay_order_id'],
            'razorpay_payment_id' => $_POST['razorpay_payment_id'],
            'razorpay_signature' => $_POST['razorpay_signature']
        );

        $api->utility->verifyPaymentSignature($attributes);
    }
    catch(SignatureVerificationError $e)
    {
        $success = false;
        $error = 'Razorpay Error : ' . $e->getMessage();
    }
}

if (empty($_POST['razorpay_payment_id']) === false)
{
	//@mysql_connect ("localhost", "emarketz_wrd1", "HTE9ZPKzHq") or die ('I cannot connect to the database.');
	//mysql_select_db ("emarketz_newwrd");
	
	//echo $_SESSION['insert_id'];
	
	$sql_update = "update tbl_instantorder set status = 'Paid' where id='".$_SESSION['insert_id']."'";
	
	$conn->query($sql_update);				   
 // mysql_query($sql_insert) or die(mysql_error());
  $insert_id = mysqli_insert_id($conn);
	//mysql_query($sql_update) or die(mysql_error());
    
	
	$html = "<p>Your payment has been successfully processed. Thank you.</p>
             <p>Payment ID: {$_POST['razorpay_payment_id']}</p>";
	unset($_SESSION['insert_id']);
	 
}
else
{
    $html = "<p>Your payment failed</p>
             <p>{$error}</p>";
}
echo '<div style="font-size: 20px;background-color: 39ace5;width: 45%;text-align: center;color: #FFF;margin: auto;font-weight: bold;margin-top: 5%;padding: 6px;">'.$html.'</div>';
?>


