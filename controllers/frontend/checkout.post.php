<?php

if (!defined('BOOTSTRAP')) { die('Access denied'); }

// here comes the code for user payment success (this not mean that they pay)

// Three options:
//  - Save order when user choose payment (see ../../payments/script.php)
//  - Save order when receive payment notification (see ../controllers/common/payment_notification.post.php)
//  - Save order when user are redirected to success (uncomment below)

//if ($mode == 'complete')
//{
//    fn_order_placement_routines('save', $order_id);  // not tested if $order_id exist here try $_REQUEST["order_id"]
//}