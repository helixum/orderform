<?php

// Add list of extensions you support for registering. See whois_servers.php for full list of supported domains.
// domain extension,list of years allowed seperated by :, list of prices seperated by :
$register[]=".com,1:2:5:10,14.99:28.99:64.99:119.99";
$register[]=".net,1:2:5:10,14.99:28.99:64.99:119.99";
$register[]=".org,1:2:5:10,14.99:28.99:64.99:119.99";
$register[]=".info,2:5:10,24.99:64.99:119.99";
$register[]=".biz,2:5:10,24.99:64.99:119.99";


// Optional list of extensions you support for transfers.
// domain extension,list of years allowed seperated by :, list of prices seperated by :
$transfer[]=".com,1:2:5:10,14.99:28.99:64.99:119.99";
$transfer[]=".net,1:2:5:10,14.99:28.99:64.99:119.99";
$transfer[]=".org,1:2:5:10,14.99:28.99:64.99:119.99";
$transfer[]=".info,2:5:10,24.99:64.99:119.99";
$transfer[]=".biz,2:5:10,24.99:64.99:119.99";


// Optional list of hostinging packages and prices
// description,setup,price,S (single charge) or R (monthly recurring charge)
$hosting[]="Basic 1 year,0,19,S";
$hosting[]="Standard 1 year,0,39,S";
$hosting[]="Standard monthly,10,3.25,R";
$hosting[]="Professional 1 year,0,129,S";
$hosting[]="Professional monthly,15,10.75,R";
$hosting[]="Rapid SSL 1 year,0,15,S";
$hosting[]="Dedicated IP monthly,0,3,R";


// Optional agreement for domain register, transfer and hosting. Set to "" if not required.
$agreements="agreements.html";


// Other settings
$vendorcompany="Your Company Name";			// Your company name.
$vendoremail="sales@yoursite";				// Your customers will contact with you by this email.
$sendtoorder="order@yoursite";				// The orders will send to this email.
$columns=5;						// Number of columns in domain extensions table.
$asymbol="$";						// Symbol to use for currency. It appears at left corner of prices (Blank it if you don't use).
$currency="USD";					// Name to use for currency(contains 3 characters). It appears at right corner of prices (If you blank it Auto Currency Converter won't work).
$tax="7.5";						// Tax(%) to be added at checkout (It must be 0 if you will not use).
$discountfordomain="0";					// Set discount as percentage(%) for domain register/transfer. Set it as 100 to provide free domain or leave as 0 to disable this function.
$minamoutfordiscountdomain="0.00";			// Set required minumum price of hosting plan to provide discount for domain register/transfer.
$hostingrequired="";					// Set it as Y if domains must have hosting plans selected in order to check out. Blank it if does not required.
$bannedemails="";					// You can stop giving orders from specific email addresses. Separate each phrase with commas(for example: buyers@email.com, buyers@email2.com).
$AutoCurrencyConverter="Y";				// If you set it as Y when DHCart convert default currency to payment gateway's currency automatically. Exchange rates get from Google. Blank it to set rates manually.
$allowwhoislookup="Y";					// Set Y if you want to allow whois lookup of registered domains. Blank it to disable.
$charset="UTF-8";					// Set HTML charset

// 2checkout settings
$Use2CO="";						// Set as Y if you will accept payments by 2checkout.com. Blank it if you won't.
$rate2co="1.00";					// If the currency of this payment gateway different than your default currency when set the currency exchange rate. If the both is same when set it as 1.00.
$vendorid2co="12345";					// 2CO vendor ID


// Paypal settings
$UsePaypal="";						// Set as Y if you will accept payments by Paypal.com. Blank it if you won't.
$paypalrate="1.00";					// If the currency of this payment gateway different than your default currency when set the currency exchange rate. If the both is same when set it as 1.00.
$paypalemail="paypal@yoursite.com";			// Paypal payment email
$paypalcurrency="USD";					// Currency USD, GBP, EUR, CAD or JPY
$paypallanguage="US";					// Language of payment screen US, GB, NL, DE, IT, FR, TR
$paypalreturn="http://www.yoursite/ok.htm";		// full URL to return to after successful transaction
$paypalcancel="http://www.yoursite/can.htm";		// full URL to return to if user cancels transaction
$paypaldesc="Web Services";				// Description for item purchased


// Skrill (Moneybookers) settings
$UseSkrill="";						// Set as Y if you will accept payments by Skrill (Moneybookers). Blank it if you won't.
$skrillrate="1.00";					// If the currency of this payment gateway different than your default currency when set the currency exchange rate. If the both is same when set it as 1.00.
$skrillemail="skrill@yoursite.com";			// Skrill payment email
$skrillcurrency="USD";					// Currency USD, GBP, EUR, AUD, CAD, JPY, HKD, SGD, CHF, DKK, SEK, SEK, XCD, MYR, NZD, TWD, THB, CZK, SKK, HUF, BGN, EEK, EEK, LVL or ZAR
$skrillreturn="http://www.yoursite/ok.htm";		// full URL to return to after successful transaction
$skrillcancel="http://www.yoursite/can.htm";		// full URL to return to if user cancels transaction
$skrilldesc="Web Services";                     	// Description for item purchased
$skrillcycle="31";                                      // Payment cycle in days (set to 30 or 31 normally)
$skrilltotalperiod="12";                                // Total number of charges to make


// Nochex settings
$UseNochex="";						// Set as Y if you will accept payments by Nochex.com. Blank it if you won't.
$nochexrate="1.00";					// If the currency of this payment gateway different than your default currency when set the currency exchange rate. If the both is same when set it as 1.00.
$nochexmerchantid="nochex@yoursite.com";		// Nochex Merchant Id
$nochexdesc="Web Services";				// Description for item purchased
$nochexsuccess="http://www.yoursite/ok.htm";		// full URL to return to after transaction
$nochexcancel="http://www.yoursite/can.htm";		// full URL to return to if user cancels transaction


// E-Gold settings
$UseEgold="";						// Set as Y if you will accept payments by E-Gold. Blank it if you won't.
$egoldrate="1.00";					// If the currency of this payment gateway different than your default currency when set the currency exchange rate. If the both is same when set it as 1.00.
$egoldid="12345";					// Your E-Gold account number
$egoldname="Your Company Name";				// The name you wishes to have displayed as the Payee on the E-Gold payment form. 
$egoldreturn="http://www.yoursite/ok.htm";		// full URL to return to after transaction
$egoldcancel="http://www.yoursite/can.htm";		// full URL to return to if user cancels transaction
$egoldunits="1";                                                                                                                                 // eGold units. 1 for USD, 44 for GBP, 85 for Euro. See egold.com for further details
$egoldmetalid="1";
$egoldmemo="Web Services";				// Description for item purchased


// Google Checkout settings
$UseGoogleCheckout="";					// Set as Y if you will accept payments by Google Checkout. Blank it if you won't.
$gcrate="1.00";						// If the currency of this payment gateway different than your default currency when set the currency exchange rate. If the both is same when set it as 1.00.
$gcmerchantid="";					// Google Checkout merchant id
$gcdesc="Web services";					// Description of services provided
$gccurrency="USD";					// Account currency code


// Worldpay Futurepay settings
$UseWorldpayFuturepay="";				// Set as Y if you will accept payments by Worldpay Futurepay. Blank it if you won't.
$wpfprate="1.00";					// If the currency of this payment gateway different than your default currency when set the currency exchange rate. If the both is same when set it as 1.00.
$wpfpinstid="123456";					// instId value
$wpfpcartid="15";					// cartId value
$wpfpcurrency="GBP";					// currency value
$wpfpdesc="Web Services";				// Description for purchase
$wpfptest="0";						// testMode
$wpfpoption="1";					// option value


// Ideal ING settings
$UseIdealING="";					// Set as Y if you will accept payments by Ideal ING. Blank it if you won't.
$idealINGrate="1.00";					// If the currency of this payment gateway different than your default currency when set the currency exchange rate. If the both is same when set it as 1.00.
$idealINGid="12345678";					// Merchant id
$idealINGlang="nl";					// Language
$idealINGcurrency="EUR";				// Currency code
$idealINGdesc="Hostingpakket";				// Description of services sold
$idealINGitem="123456";					// Item number
$idealINGvalid="2016-01-01T12:00:00:0000Z";		// Valid until
$idealINGsuccess="http://www.yoursite/ok.htm";		// full URL to return to after transaction
$idealINGcancel="http://www.yoursite/can.htm";		// full URL to return if user cancels transaction
$idealINGerror="http://www.yoursite/err.htm";		// full URL to return if error occur


// Ideal RABO settings
$UseIdealRABO="";					// Set as Y if you will accept payments by Ideal RABO. Blank it if you won't.
$idealRABOrate="1.00";					// If the currency of this payment gateway different than your default currency when set the currency exchange rate. If the both is same when set it as 1.00.
$idealRABOid="12345678";				// Merchant id
$idealRABOlang="nl";					// Language
$idealRABOcurrency="EUR";				// Currency code
$idealRABOdesc="Hostingpakket";				// Description of services sold
$idealRABOitem="123456";				// Item number
$idealRABOvalid="2016-01-01T12:00:00:0000Z";		// Valid until
$idealRABOsuccess="http://www.yoursite/ok.htm";		// full URL to return to after transaction
$idealRABOcancel="http://www.yoursite/can.htm";		// full URL to return if user cancels transaction
$idealRABOerror="http://www.yoursite/err.htm";		// full URL to return if error occur


// Ideal ABN AMRO settings
$UseIdealABNAMRO="";					// Set as Y if you will accept payments by Ideal ABNAMRO. Blank it if you won't.
$idealABNAMROrate="1.00";				// If the currency of this payment gateway different than your default currency when set the currency exchange rate. If the both is same when set it as 1.00.
$idealABNAMROid="12345678";				// Merchant id
$idealABNAMROlang="nl";					// Language
$idealABNAMROcurrency="EUR";				// Currency code
$idealABNAMROdesc="Hostingpakket";			// Description of services sold
$idealABNAMROitem="123456";				// Item number
$idealABNAMROvalid="2016-01-01T12:00:00:0000Z";		// Valid until
$idealABNAMROsuccess="http://www.yoursite/ok.htm";	// full URL to return to after transaction
$idealABNAMROcancel="http://www.yoursite/can.htm";	// full URL to return if user cancels transaction
$idealABNAMROerror="http://www.yoursite/err.htm";	// full URL to return if error occur


// Paymate Settings
$UsePaymate="";						// Set as Y if you will accept payments by Paymate. Blank it if you won't.
$paymaterate="1.00";					// If the currency of this payment gateway different than your default currency when set the currency exchange rate. If the both is same when set it as 1.00.
$paymateid="";						// Paymate account id
$paymatedesc="Web Services";				// Description of service provided 
$paymatecurrency="USD";					// Currency code


// CDGCommerce settings
$UseCDGCommerce="";					// Set as Y if you will accept payments by CDGCommerce. Blank it if you won't.
$cdgrate="1.00";					// If the currency of this payment gateway different than your default currency when set the currency exchange rate. If the both is same when set it as 1.00.
$cdgvendorid="12345";					// Vendor Id
$cdghome="http://www.yoursite";				// Your site home page
$cdgdesc="Web Services";				// Description of item purchased
$cdgreturn="http://www.yoursite/ok.htm";		// Page to return to
$cdgmername="MERCHANT INC";				// Merchant Name
$cdgrecipe="monthlybusiness";				// Name of the predefined monthly recurring recipe


// Authorize.net settings
$UseAuthorize="";					// Set as Y if you will accept payments by CDGCommerce. Blank it if you won't.
$authrate="1.00";					// If the currency of this payment gateway different than your default currency when set the currency exchange rate. If the both is same when set it as 1.00.
$authloginid="";					// Authorize.net login ID
$authdesc="Web Services";				// Description of services ordered
$authcurrency="USD";					// Currency
$authtxnkey="";						// Secret transaction key


// Payza Settings
$UsePayza="";						// Set as Y if you will accept payments by Payza. Blank it if you won't.
$payzarate="1.00";					// If the currency of this payment gateway different than your default currency when set the currency exchange rate. If the both is same when set it as 1.00.
$payzamerchant="yourpayzaemail@domain";			// The email address associated with your Payza account
$payzaitemname="Web Services";				// Description of service provided 
$payzacurrency="USD";					// The currency of the payment
$payzareturnurl="http://www.yoursite/ok.htm";		// Full URL to return to after transaction
$payzacancelurl="http://www.yoursite/can.htm";		// Full URL to return to if user cancels transaction


// OKPAY settings
$UseOKPAY="";						// Set as Y if you will accept payments by OKPAY. Blank it if you won't.
$okrate="1.00";						// If the currency of this payment gateway different than your default currency when set the currency exchange rate. If the both is same when set it as 1.00.
$okreceiver="okpay@domain";				// One of the following: Email address / Cellphone number or Wallet ID.
$okcurrency="USD";					// The currency of the payment
$okdesc="Web Services";					// Description for item purchased
$oksuccess="http://www.yoursite/ok.htm";		// full URL to return to after transaction
$okfail="http://www.yoursite/can.htm";			// full URL to return to if user cancels transaction


// Liberty Reserve settings
$UseLibertyReserve="";					// Set as Y if you will accept payments by Liberty Reserve. Blank it if you won't.
$lrrate="1.00";						// If the currency of this payment gateway different than your default currency when set the currency exchange
$lracc="U1234567";					// Merchant's account number
$lrstore="Store Name";					// Name of the Merchant's store
$lrcurrency="LRUSD";					// Currency type preferred. LRUSD, LREUR
$lrcurrency_="USD";					// 3 digit currency code. USD, EUR
$lrcomments="Web Services";				// Memo, that Merchant may want to include along with payment
$lrsuccessurl="http://www.yoursite/ok.htm";		// URL address of payment successful page at the Merchant's web site
$lrsuccessurlmethod="GET";				// Payment successful page redirect HTTP method. GET, POST...
$lrfailurl="http://www.yoursite/can.htm";		// URL address of payment failed page at the Merchant's web site
$lrfailurlmethod="GET";					// Payment failed page redirect HTTP method.
$lrstatusurl="mailto:mymail@domain.com";		// For example: http://www.merchant.com/status.aspx or mailto:mymail@domain.com
$lrstatusurlmethod="GET";				// Status data transmit HTTP method. GET, POST


// Cashu settings
$UseCashu="";						// Set as Y if you will accept payments by Cashu. Blank it if you won't.
$cashurate="1.00";					// If the currency of this payment gateway different than your default currency when set the currency exchange rate. If the both is same when set it as 1.00.
$cashumerchantid="XYZ";					// The Merchant ID as entered during registration.
$cashuencryptionkey="";					// Cashu Encryption Keyword will be used to create MD5 hash of a string for each payment.
$cashucurrency="USD";					// Currency in which the service/item is being sold on the Merchant’s website. USD CSH AED EUR JOD EGP SAR
$cashulanguage="EN";					// String identifying the interface language of the payment page.
$cashudisplaytext="Web Services";			// English or Arabic description of the transaction, this will be used to display for the customer on the payment page.
$cashuservicesname="XYZ";				// Name of the service or domain entered by Merchant that has multiple checkout pages (details on this available on cashU Merchant account guide)


// DIXIPAY settings
$UseDIXIPAY="";						// Set as Y if you will accept payments by DIXIPAY. Blank it if you won't.
$dixipayrate="1.00";					// If the currency of this payment gateway different than your default currency when set the currency exchange rate. If the both is same when set it as 1.00.
$dixipayrecipientacc="201017000002";			// Account number of recipient in DIXIPAY
$dixipayrecipientname="My Company";			// Merchant name which will be shown on the gateway.
$dixipayproduct="Web Services";				// Description of products or service which will be shown on the gateway.
$dixipayurlreturn="http://www.yoursite/ok.htm";		// URL to which the customer will be returned when the payment is made successfully
$dixipayurlcancel="http://www.yoursite/can.htm";	// URL to which the customer will be returned if the payment process is cancelled.
$dixipayurlstatus="https://www.yoursite/results.php";	// URL, which sends payment results to.
$dixipayurllogo="https://www.yoursite/logo.jpg";	// The URL of the logo which you would like to appear at the top of the gateway.
$dixipaylang="EN";					// Language interface can be any of next languages: EN RU AR
$dixipaycurrency="EUR";					// 3-letter code of the currency of the amount
$dixipayapikey="a7c04902a40ae5d699d774727e";		// Special key is used to verify compliance with the seller in the system.

// OneCard settings
$UseOneCard="";						// Set as Y if you will accept payments by OneCard. Blank it if you won't.
$onecardrate="1.00";					// If the currency of this payment gateway different than your default currency when set the currency exchange rate. If the both is same when set it as 1.00.
$onecardmerchid="test_merchant";			// The merchant identifier provided by OneCard upon signing the contract
$onecardtranskey="XYZ";					// The merchant identifier provided by OneCard upon signing the contract
$onecardcurrency="USD";					// Currency EGP SAR USD EUR AED KWD SYP
$onecardmprod="Web Services";				// Product/Service description that will be displayed to the user
$onecardreturnurl="http://www.yoursite.com/ok.html";	// The URL where user will be redirected to after a successful transaction is completed on OneCard website


// Manual payment settings
$UseManual="Y";						// Set as Y if you wish to process payments manually. Blank it if you don't.
$manualreturn="http://www.dhcart.com/order.html";	// Return URL if handling payment manually


// Custom Payment Gateway
$UseCPG="";						// Set as Y if you will accept payments by your payment gateway. Blank it if you won't.
$cpgrate="1.00";					// If the currency of this payment gateway different than your default currency when set the currency exchange rate. If the both is same when set it as 1.00.
$cpgurl="http://www.gatewayurl";			// The url of your payment gateway or form.
$cpgordernum="order_number";				// The field name of order number value.
$cpgtotal="total";					// The field name of total fee value.
$cpgrecurringtotal="recurrtotal";			// The field name of monthly recurring total fee value.
$cpgcurrency="USD";					// 3 digit currency code of your payment gateway.
$cpgother="";						// Other field names that required together with their values (for example: cancel_url=http://www.yoursite.com/can.htm&return_url=http://www.yoursite.com/ok.htm)


// Coupon Module
$couponcode = "";					// Coupon code. Blank it if does not required
$applicablecoupontodomain = "";				// Set it as Y if coupon is applicable to domain registration or transfer.  Blank it if does not required.
$applicablecoupontohosting = "Y";			// Set it as Y if coupon is applicable to hosting.  Blank it if does not required.
$couponvalue = "10";					// Set value of your coupon code($/%) Blank it if does not required.
$coupontype = "P";					// Set it as D for dollar(money) or P for Percentage(%). Blank it if does not required
$couponvalidupto = "2012-12-24";			// Coupon is valid up to (YYYY-MM-DD)


/////////////////////////////////////////////////////////////////////////////////////////////////////////////
// Code below this point should not need modifying. Do so at your own risk!                               //
///////////////////////////////////////////////////////////////////////////////////////////////////////////

// DHCart v4.38
// http://www.dhcart.com
// You are licensed to use this on one domain only.

session_start();
$copyright="Copyright-DHCart_v4.38-www.dhcart.com";

?>
