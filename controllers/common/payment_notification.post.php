<?php

if (!defined('BOOTSTRAP')) { die('Access denied'); }


// here comes the code for notifications
// params to be here: dispatch[payment_notification.foo]=bar&payment=Dumb&order_id=baz

// Vars defined here
// $mode == 'foo' // whatever you set after payment_notification.

//if (!empty($_REQUEST['payment'])) {
//    define('PAYMENT_NOTIFICATION', true);
//
//    if (AREA == 'A' || $_REQUEST['payment'] == 'Dumb') {
//        if($mode == 'foo')
//        {
            // maybe we are fools
            
            // Three options:
            //    - Save order when user choose payment (see ../../payments/script.php)
            //    - Save order when user are redirected to success (see ../controllers/frontend/checkout.post.php)
            //    - Save order when receive payment notification (uncomment below) */
            //fn_order_placement_routines('save', $order_id);  // not tested if $order_id exist here try $_REQUEST["order_id"]
//        }
//    }
//}