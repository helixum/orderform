<?php

// These variables define the contact form fields.
// $cform[] = "form variable,Label Displayed,Optional alert text if field must be filled in";
// You can add and delete them as required. Leave the alert text part blank if the field is optional.
// Keep the variable names short. For the users name and email you must use the variables
// 'name' and 'email' as they are used when sending the order confirmation

$cform[] = "company,Company Name,";
$cform[] = "name,Contact Person,You must enter your name";
$cform[] = "str1,Address,You must enter your address";
$cform[] = "str2,,";
$cform[] = "city,City,You must enter your city";
$cform[] = "state,State,You must enter the state, county or province (or NA)";
$cform[] = "zip,Zip,You must enter the zip or post code (or NA)";
$cform[] = "country,Country,You must enter your country";
$cform[] = "tel,Tel No.,You must enter your telephone number";
$cform[] = "fax,Fax No.,";
$cform[] = "email,Email Address,You must enter your valid email address";

// Customer email
// First line is the subject.

$cemail[] = "Thank you for the order.";
$cemail[] = "Thank you for your order. Your order number is !!!ordnum!!!";
$cemail[] = "";
$cemail[] = "Order Information:";
$cemail[] = "";
$cemail[] = "!!!orderdetails!!!";
$cemail[] = "";
$cemail[] = "This message was automaticlly sent by !!!vendorcompany!!!";

// Vendor email
// First line is subject

$vemail[] = "Order !!!ordnum!!! received";
$vemail[] = "Order !!!ordnum!!! received from:";
$vemail[] = "";
$vemail[] = "!!!formfields!!!";
$vemail[] = "";
$vemail[] = "Order details:";
$vemail[] = "";
$vemail[] = "!!!orderdetails!!!";

// Contents of the Shopping Cart

$lang_select_a_domain_option = "Select a Domain Option:";
$lang_register_a_new_domain = "I want to register a new domain.";
$lang_transfer_my_existing_domain = "I want to transfer my existing domain.";
$lang_use_my_dns = "I will use my existing domain and update my nameservers only.";
$lang_new_domain = "New Domain:";
$lang_transfer_domain = "Transfer Domain:";
$lang_existing_domain = "Existing Domain:";
$lang_check = "Check";
$lang_domain = "Domain";
$lang_query_results = "Query Results";
$lang_domain_status = "Status";
$lang_select_a_package = "Package";
$lang_addtocart = "Check to Order";
$lang_no = "Not Available";
$lang_cannot_verify = "Cannot Verify";
$lang_invalid_domain = "Invalid Domain";
$lang_whois_problem = "Whois Problem";
$lang_hosting_only = "Hosting Only";
$lang_year = "Year";
$lang_register = "Register";
$lang_transfer = "Transfer";
$lang_no_hosting = "No Hosting";
$lang_coupon = "Coupon&nbsp;Code:";
$lang_add_to_cart = "Add Checked to Cart";
$lang_update = "Update Cart";
$lang_checkout = "Checkout";
$lang_subtotal = "Subtotal";
$lang_shopping_cart = "Shopping Cart";
$lang_remove = "Remove";
$lang_tax = "Tax ($tax%)";
$lang_monthly_fee = "Monthly Fee";
$lang_setup = "setup";
$lang_total = "Total";
$lang_total_due_now = "Total Due Now";
$lang_order_summary = "Order Summary";
$lang_modify = "Modify the Order";
$lang_terms = "I have read and agreed to these !!!terms of service!!!";
$lang_agreement = "You must check the box of agreement before completing this order";
$lang_your_contact_details = "Your Contact Details";
$lang_contact_form_info = "Please fill all marked fields that below.";
$lang_paymethod = "Choose Payment Method";
$lang_2co = "2Checkout";
$lang_paypal = "Paypal";
$lang_skrill = "Skrill (Moneybookers)";
$lang_nochex = "Nochex";
$lang_egold = "E-Gold";
$lang_googlecheckout = "Google Checkout";
$lang_wpfp = "Worldpay Futurepay";
$lang_idealING = "Ideal ING";
$lang_idealRABO = "Ideal RABO";
$lang_idealABNAMRO = "Ideal ABN AMRO";
$lang_paymate = "Paymate";
$lang_cdg = "CDGCommerce";
$lang_payza = "Payza";
$lang_auth = "Authorize";
$lang_okpay = "OKPAY";
$lang_libertyreserve = "Liberty Reserve";
$lang_cashu = "Cashu";
$lang_dixipay = "DIXIPAY";
$lang_onecard = "OneCard";
$lang_other = "Mail Order";
$lang_cpg = "Custom Payment Gateway";
$lang_mailer_error = "Mailer Error:";
$lang_banned_email = "Your email is in our blacklist!";
$lang_invalid_coupon = "The coupon that is entered is invalid!";
$lang_checkall = "Check All";
$lang_whoislookup_linkname = "Whois";
$lang_whoislookup_title = "Whois Lookup";
$lang_whoislookup_button = "Lookup";
$lang_whoislookup_disabled = "Whois lookup disabled";
$lang_whoislookup_connecterr = "Error: Problem connecting with whois server";
$lang_whoislookup_exterr = "Error: The domain extension is not recognised";
$lang_whoislookup_domainerr = "Error: The domain is not valid";
$lang_whoislookup_verify = "Verify";
$lang_whoislookup_back = "Do another Whois lookup";
?>
