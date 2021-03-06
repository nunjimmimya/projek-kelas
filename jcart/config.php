<?php

// jCart v1.3
// http://conceptlogic.com/jcart/

// Do NOT store any sensitive info in this file!!!
// It's loaded into the browser as plain text via Ajax


////////////////////////////////////////////////////////////////////////////////
// REQUIRED SETTINGS

// Path to your jcart files
$config['jcartPath']              = 'jcart/';

// Path to your checkout page
$config['checkoutPath']           = 'checkout.php';

// The HTML name attributes used in your item forms
$config['item']['id']              = 'design_id';       // Item id
$config['item']['name']            = 'selected_design'; // Item name
$config['item']['shirt_snapshot']  = 'shirt_snapshot'; // Design snapshot
$config['item']['price']           = 'sum_total';       // Item price
$config['item']['qty']             = 'quantity';        // Item quantity
$config['item']['front_text']      = 'front_text';      // Item front text
$config['item']['back_text']       = 'back_text';       // Item back text
$config['item']['front_logo']      = 'front_logo';      // Item front image
$config['item']['back_logo']       = 'back_logo';       // Item back image
$config['item']['url']             = 'my-item-url';     // Item URL (optional)
$config['item']['add']             = 'my-add-button';   // Add to cart button

// Your PayPal secure merchant ID
// Found here: https://www.paypal.com/webapps/customerprofile/summary.view
$config['paypal']['id']           = 'myshir_1354679335_biz@yahoo.com';

////////////////////////////////////////////////////////////////////////////////
// OPTIONAL SETTINGS

// Three-letter currency code, defaults to USD if empty
// See available options here: http://j.mp/agNsTx
$config['currencyCode']           = '';

// Add a unique token to form posts to prevent CSRF exploits
// Learn more: http://conceptlogic.com/jcart/security.php
$config['csrfToken']              = false;

// Override default cart text
$config['text']['cartTitle']      = '';    // Shopping Cart
$config['text']['singleItem']     = '';    // Item
$config['text']['multipleItems']  = '';    // Items
$config['text']['subtotal']       = '';    // Subtotal
$config['text']['update']         = '';    // update
$config['text']['checkout']       = '';    // checkout
$config['text']['checkoutPaypal'] = '';    // Checkout with PayPal
$config['text']['removeLink']     = '';    // remove
$config['text']['emptyButton']    = '';    // empty
$config['text']['emptyMessage']   = '';    // Your cart is empty!
$config['text']['itemAdded']      = '';    // Item added!
$config['text']['priceError']     = '';    // Invalid price format!
$config['text']['quantityError']  = '';    // Item quantities must be whole numbers!
$config['text']['checkoutError']  = '';    // Your order could not be processed!

// Override the default buttons by entering paths to your button images
$config['button']['checkout']     = '';
$config['button']['paypal']       = '';
$config['button']['update']       = '';
$config['button']['empty']        = '';


////////////////////////////////////////////////////////////////////////////////
// ADVANCED SETTINGS

// Display tooltip after the visitor adds an item to their cart?
$config['tooltip']                = true;

// Allow decimals in item quantities?
$config['decimalQtys']            = false;

// How many decimal places are allowed?
$config['decimalPlaces']          = 1;

// Number format for prices, see: http://php.net/manual/en/function.number-format.php
$config['priceFormat']            = array('decimals' => 2, 'dec_point' => '.', 'thousands_sep' => ',');

// Send visitor to PayPal via HTTPS?
$config['paypal']['https']        = true;

// Use PayPal sandbox?
$config['paypal']['sandbox']      = true;

// The URL a visitor is returned to after completing their PayPal transaction
$config['paypal']['returnUrl']    = 'http://customyshirt.com/trackingid.html';

// The URL of your PayPal IPN script
$config['paypal']['notifyUrl']    = '';

?>