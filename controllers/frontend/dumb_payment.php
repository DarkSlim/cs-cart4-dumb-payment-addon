<?php

if (!defined('BOOTSTRAP')) { die('Access denied'); }

// here comes the code for user payment success (this not mean that they pay)

// Three options:
//  - Save order when receive payment notification (see ../controllers/common/payment_notification.post.php)
//  - Save order when user are redirected to success (uncomment below)

if ($mode == 'complete')
{
    
    $pp_response = array();
    // http://www.cs-cart.com/documentation/reference_guide/index.htmld?orders_order_statuses.htm
    // B Backordered
    // C Complete
    // D Declined
    // F Failed
    // I Canceled
    // O Open
    // P Processed
    $pp_response['order_status'] = 'P';
    $pp_response['reason_text'] = __('order_id') . '-' . $_REQUEST['order_number'] . '-why not';
    
    fn_finish_payment($_REQUEST["order_id"], $pp_response);
    fn_order_placement_routines('save', $_REQUEST["order_id"]); 
}