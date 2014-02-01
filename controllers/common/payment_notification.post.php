<?php

if (!defined('BOOTSTRAP')) { die('Access denied'); }


// here comes the code for notifications
// params to be here: dispatch[payment_notification.dumb_payment]=bar&payment=Dumb&order_id=baz

// Vars defined here
// $mode == 'dumb_payment' // whatever you set after payment_notification.

//if (!empty($_REQUEST['payment']) && $_REQUEST['payment'] == 'Dumb') {
//    define('PAYMENT_NOTIFICATION', true);
//
//    if (AREA == 'A' || $_REQUEST['payment'] == 'Dumb') {
//        if($mode == 'foo')
//        {
            // maybe we are fools
            
            // Three options:
            //    - Save order when user are redirected to success (see ../controllers/frontend/checkout.post.php)
            //    - Save order when receive payment notification (uncomment below) */
//        }
//    }
//}