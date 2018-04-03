<?php
/**
 * Script: /06_affiliates/wowuk/paypal.php
 * Author: Andy Gray
 *
 * Description
 * Prepare and forward a transction to Paypal
 * - the order will already have been created via AJAX
 * - the orderId is used to reference the order
 * On Success redirect to success page
 * On Failure redirect to failure page
 * IPN notifications are not managed here (at present)
 *
 * Modification History
 * - initial spike
 */

if(!defined('ROOTPATH')){
    //define('ROOTPATH', $_SERVER['DOCUMENT_ROOT'] . '/astrowow/');
    define('ROOTPATH', $_SERVER['DOCUMENT_ROOT'] . '/');
}

//require_once (ROOTPATH . '/var/lib/wsapi/config.php');
require_once ( ROOTPATH.'helper/paypal/recurring-payment/paypal-config.php');
require_once ( ROOTPATH.'helper/paypal/recurring-payment/paypal.class.php');
require_once ( ROOTPATH.'helper/paypal/recurring-payment/class.payment.paypal.generic.php');
require_once ( ROOTPATH.'helper/paypal/recurring-payment/class.payment.paypal.wow1.php');

define('ORDER_URL', ROOTPATH.'bal/order.php');
define('USER_URL', ROOTPATH.'bal/user.php');

require_once(ORDER_URL);
require_once(USER_URL);

echo "Processing...";

$action = $_REQUEST ['action'];
if (isset ( $action )) {

    $transaction = new WOWPaypalTransaction ();
    //print_r($transaction);
    //exit;
    switch ($action) {
        case 'process' :
            $orderId = $_REQUEST ['orderid'];
            $currency_code = $_REQUEST ['currency_code'];
            $product_item_number = $_REQUEST ['product_item_id'];
            $product_name = $_REQUEST ['product_name'];
            $product_price = $_REQUEST ['product_price'];
            if(isset($_REQUEST ['product_discount'])) {
                $product_discount = $_REQUEST ['product_discount'];
            }
            else {
                $product_discount = 0;
            }

            if(isset($_REQUEST ['product_discount'])) {
                $product_shipping_charge = $_REQUEST ['product_shipping_charge'];
            }
            else {
                $product_shipping_charge = 0;
            }
			if(isset($_REQUEST ['user_id'])) {
                $user_id = $_REQUEST ['user_id'];
            }
            else {
                $user_id = 0;
            }
			
           // echo "1= $orderId, | 2= $currency_code, | 3= $product_item_number, | 4= $product_name,  | 5= $product_price, | 6= $product_discount, | 7= $product_shipping_charge";
            $transaction->manage_process ( $orderId,$currency_code,$product_item_number,$product_name,$product_price,$product_discount,$product_shipping_charge,$user_id );
            break;
        case 'success' :
			$transaction->manage_success ( SUCCESS_URL_BUY_SUBSCRIPTION);
            break;
        case 'cancel' :
			$transaction->manage_success ( CANCEL_URL );
            break;
        case 'ipn':
        	/* PAP integration */        
            $transaction->manage_ipn ();
            break;
        default :
    }
} else {
    $orderId = $_REQUEST ['orderid'];
    $transaction = new WOWPaypalTransaction ();
    $transaction->manage_process ( $orderId );
}
die ();
?>
