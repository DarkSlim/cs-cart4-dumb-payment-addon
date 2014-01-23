<?php
/**
*   copyright: this belongs to someone dumb

    this payment don't anything exccept
    show us what vars we have here
    show us basic structure we need here
*/

use Tygh\Registry;

// isn't required but useful
function LOGGER ($msg, $f, $l)
{
    // Johny Logger, keep logging
    $logger = Tygh\Logger::instance();
    $logger->logfile = 'var/dumb_payment' . date('Y-m-d') . '.log';
    $logger->write($msg, $f, $l);
}

// get addon setting
LOGGER(Registry::get('addons.dumb_payment_addon.account_id'), __FILE__, __LINE__);

// get all defined vars and contents
//LOGGER(print_r(get_defined_vars(), true), __FILE__, __LINE__);

// test if cs-cart was installed
if (!defined('BOOTSTRAP')) { die('Access denied'); }


// here comes your ma... controller

// I don't know yet how they set this
if (defined('PAYMENT_NOTIFICATION'))
{
    // here comes the code for notifications
    // params to be here: dispatch[payment_notification.foo]=bar&payment=dumb&order_id=baz
    
    // Vars defined here
    // $mode = 'foo' // whatever you set after payment_notification.
}
else
{
    // here comes the code for payment selection
    
    // Vars defined here
    // $order_id = Integer
    // $force_notification = Array
    // $payment_info = Array
    // $order_info = Array
    // $is_processor_script = 1
    // $processor_data = Array
    // $mode = 'place_order'

    // create a redirect (form that post) data to dumb payment
    $submit_url = 'https://dumb.dumb.dumb/pay';
    $data = array('foo' => 'bar');
    $payment_name = 'Dumb Payment';
    $exclude_empty_values = true;
    fn_create_payment_form($submit_url, $data, $payment_name, $exclude_empty_values);
}
exit; // I don't know why but any payments does