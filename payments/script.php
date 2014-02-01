<?php
/**
*   copyright: this belongs to someone dumb

    this payment don't anything exccept
    show us what vars we have here
    show us basic structure we need here
*/

require_once('helper.php');

use Tygh\Registry;
use Addons\DumbPayment\Helper as ADH;


// get addon setting
///ADH\LOGGER(Registry::get('addons.dumb_payment_addon.account_id'), __FILE__, __LINE__);

// get all defined vars and contents
//ADH\LOGGER(print_r(get_defined_vars(), true), __FILE__, __LINE__);

// test if cs-cart was installed
if (!defined('BOOTSTRAP')) { die('Access denied'); }


// here comes your ma... controller

// I don't know yet how they set this
if (defined('PAYMENT_NOTIFICATION'))
{
    // this will never happen :(
    // see ../../../app/controllers/common/payment_notification.php
    
    // Otherwise we can create a post controller for payment_notification :)
    // see ../controllers/common/payment_notification.post.php
    // and http://docs.cs-cart.com/precontrollers-postcontrollers
}
else
{
    // here comes the code executed after payment selection
    
    // Vars defined here
    // $order_id = Integer
    // $force_notification = Array
    // $payment_info = Array
    // $order_info = Array
    // $is_processor_script = 1
    // $processor_data = Array
    // $mode = 'place_order'

    // create a redirect (form that post) data to dumb payment
    
    // payment redir url
    $success_redir_url = fn_url("dumb_payment.complete?order_id=$order_id");
    
    // your payment redir url
    //$submit_url = 'https://dumb.dumb.dumb/pay';
    $submit_url = $success_redir_url; // my submit url is a redir to success
    
    $data = array(
        'foo' => 'bar',
        'success_uri' => $success_redir_url // or whatever your payment expect
    );
    
    $payment_name = 'Dumb Payment';
    $exclude_empty_values = true;
    fn_create_payment_form($submit_url, $data, $payment_name, $exclude_empty_values);
}