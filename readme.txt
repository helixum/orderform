---------------------------------------------------------------------------------
Chapter 1 Installing DHCart
---------------------------------------------------------------------------------
Installing DHCart

Incorporating DHCart with your site is simply a matter of adding 2 lines to the
required page. However, first of all we need to setup a few variables with
information about the domain extensions you support, prices and registration
periods, any hosting options etc.


Domain Registration:

Open config.php in any text editor such as notepad.exe. First of all if you don't
know anything about PHP then don't get scared! We will walk you though this and
support is just an email away if required. Near the top of the file you will
see a list of domain extensions each one looking 
something like this. 
$register[]=".com,1:2:5:10,14.99:28.99:64.99:119.99";

This list of domain extensions is a subset of the over 400 domain extensions
supported by Whois that you wish to sell. Each domain extension is on a
separate line. You can add or delete to this list as described later.

You will notice that each line is separated into three sections by commas
as the example above and we will now describe each section.

	.com			This is the domain extension.
	1:2:5:10		These are the periods in years that you
				wish to register this domain extension for.
				In this case 1, 2, 5 & 10 years. You can
				have as many registration periods as you
				wish (at least 1 though). Notice that each
				registration  period is separated by a
				colon ( : ).

	14.99:28.99:64.99:119.99
				These are the prices for
				each registration period listed in the
				previous section again separated by
				colons. i.e. one year is charged at 14.99
				and ten years at 119.99. You can have
				any number of prices but it must match
				with the number of registration periods as above.

You can remove any domain extensions you do not wish to support simply by
deleting the relevant lines. To add domains simply open up the domains.txt file
included and copy and paste into the list. Don't forget to adjust the
registration periods and prices though.


Domain Transfers:

As well as registering domain names you can optionally also transfer existing
domains to your registrar. You can set the transfer periods and prices as you
wish separately to the registration values. This is done exactly as described
above for registration except each entry looks like this:
$transfer[]=".com,1:2:5:10,14.99:28.99:64.99:119.99";

If you do not wish to support domain transfers simply comment out or delete each
entry.


Hosting Plans:

Optionally you can allow a user to select a hosting plan for each domain that they
choose. You can have as many different plans as you wish covering different
options and contract periods etc. Recurring billing is supported only by Paypal
and Worldpay Futurepay and Moneybbokers.

To setup hosting plans find the following lines
$hosting[]="Basic 1 year,0,19,S";
$hosting[]="Standard 1 year,0,39,S";
$hosting[]="Standard monthly,10,3.25,R";
$hosting[]="Professional 1 year,0,129,S";
$hosting[]="Professional monthly,15,10.75,R";

Here we have setup 5 hosting plans. Each plan is setup in sections separated by
commas. The first section is the plan description which you should keep as short
as possible. The second section is the setup cost. The third section is the price
(single charge or monthly). The fourth and final section determines whether the
plan is single charge or monthly recurring (S or R). Leave out any currency 
symbols etc.

If you do not wish to support hosting plans then simply comment out or delete
each entry.


Agreement:

You can optionally have DHCart display a link to your agreements or contracts on
the checkout page. The user will be forced to tick a checkbox for your agreements.
You can define a page to be linked to for agreements for domain registration,
domain transfers and/or hosting. The link and the checkbox will only be displayed
if you have defined a link.

$agreements="agreements.html";

If you do not need to use of this option then comment the line out as required.


Other settings:

There are a few settings that we still need to set which will be found below the
hosting packages variables as follows.

$vendorcompany="Your Company Name";
$vendoremail="sales@yoursite.com";
$sendtoorder="order@yoursite.com";
$columns=5;
$asymbol="$";
$currency="USD";
$tax="0";
$discountfordomain="0";
$minamoutfordiscountdomain="0.00";
$hostingrequired="";
$bannedemails="";
$AutoCurrencyConverter="Y";
$allowwhoislookup="Y";
$charset="UTF-8";

$vendoremail
This is the email address which is your customers will contact with you.

$vendorcompany
This is your company name.

$sendtoorder
This is the email address where you would like the order details to be sent.

$columns
This is the number of columns of domain extension checkboxes to display underneath the domain
entry field. For example below there are 5 columns of checkboxes.

$asymbol
Symbol to use for currency. It shows at left corner of prices.  Blank it if does not required.

$currency
Name to use for currency. It shows at right corner of prices. Blank it if does not required.

$tax
Tax(%) to be added at checkout (It must be 0 if you will not use).

$discountfordomain
Set discount as percentage(%) for domain register/transfer. Set it as 100 to provide free domain or leave as 0 to disable this function.

$minamoutfordiscountdomain
Set required minumum price of hosting plan to provide discount for domain register/transfer.

$hostingrequired
Set it as Y if domains must have hosting plans selected in order to check out.
Blank it if does not required.

$bannedemails
You can stop giving orders from specific email addresses. Separate each phrase with
commas(for example: buyers@email.com, buyers@email2.com).

$AutoCurrencyConverter
If you set it as Y when DHCart convert default currency to payment gateway's currency automatically. Exchange rates get from Google. Blank it to set rates manually.

$allowwhoislookup
Set Y if you want to allow whois lookup of registered domains. Blank it to disable.

$charset
Set HTML charset


Payment Process Settings:

DHCart currently supports 2checkout, Paypal, Moneybookers,
Nochex, E-Gold, Google Checkout, Worldpay Futurepay, manuel processing and one of another
payment gateway.

Using 2checkout
To accept payments by 2checkout.com set the following variables.
$Use2CO="";
$vendorid2co="12345";
$rate2co="1.00";

$Use2CO
Set as Y if you will accept payments by 2checkout.com. Blank it if you won't.

$vendorid2co
Your 2checkout vendor ID

$rate2co
If the currency of this payment gateway different than your default currency when set the currency exchange rate. If the both is same when set it as 1.00.


Using Paypal.com 
To accept payments by Paypal.com set the following variables.
$UsePaypal="Y"
$paypalrate="1.00";
$paypalemail="paypal@yoursite.com"; 
$paypalcurrency="USD";
$paypallanguage="US";
$paypalreturn="http://www.yoursite.com/ok.h tm"; 
$paypalcancel="http://www.yoursite.com/can.htm"; 
$paypaldesc="Web Services"; 

$UsePaypal
Set as Y if you will accept payments by Paypal.com. Blank it if you won't.

$paypalrate
If the currency of this payment gateway different than your default currency when set the currency exchange rate. If the both is same when set it as 1.00.

$paypalemail 
This is the Paypal account (email address) used to receive payment.

$paypalcurrency
Set as USD, GBP, EUR, CAD or JPY

$paypallanguage
Language of payment screen. Set it as US, GB, NL, DE, IT, FR or TR

$paypalreturn
This is the full URL that Paypal will go to after a successful sale.

$paypalcancel 
This is the full URL that Paypal will go to if the user cancels payment at any
point. 

$paypaldesc 
This is the product description shown on the checkout page of paypal.com. 


Using Skrill (Moneybookers)
To accept payments by Skrill (Moneybookers) set the following variables.
$UseSkrill="";
$skrillrate="1.00";
$skrillemail="moneybookers@yoursite.com";
$skrillcurrency="USD";
$skrillreturn="http://www.yoursite.com/ok.htm";
$skrillcancel="http://www.yoursite.com/can.htm";
$skrilldesc="Web Services";

$UseSkrill
Set as Y if you will accept payments by Skrill (Moneybookers). Blank it if you won't.

$skrillrate
If the currency of this payment gateway different than your default currency when set the
currency exchange rate. If the both is same when set it as 1.00.

$skrillemail 
Your skrill.com email address to receive payments

$skrillcurrency
Set as USD, GBP, EUR, AUD, CAD, JPY, HKD, SGD, CHF, DKK, SEK, SEK, XCD, MYR, NZD,
TWD, THB, CZK, SKK, HUF, BGN, EEK, EEK, LVL or ZAR.

$skrilllanguage
Set as EN, DE, ES, FR or IT

$skrillreturn
This is the full URL that skrill.com will go to after a successful sale.

$skrillcancel
This is the full URL that skrill.com will go to if the user cancels payment
at any point.

$skrilldesc
This is the product description shown on the checkout page of skrill.com.


Using Nochex
To accept payments by Nochex.com set the following variables.
$UseNochex="";
$nochexrate="1.00";
$nochexmerchantid="nochex@yoursite.com";
$nochexdesc="Web Services";
$nochexsuccess="http://www.yoursite.com/ok.htm";
$nochexcancel="http://www.yoursite.com/can.htm";

$UseNochex
Set as Y if you will accept payments by Nochex.com. Blank it if you won't.

$nochexrate
If the currency of this payment gateway different than your default currency when set the currency exchange rate. If the both is same when set it as 1.00.

$nochexmerchantid
This is the Nochex Merchant Id (email address) used to receive payment.

$nochexdesc 
This is the product description shown on the checkout page of nochex.com. 

$nochexsuccess
This is the full URL that Nochex will go to after a successful sale.

$nochexcancel
This is the full URL that Nochex will go to if the user cancels payment at any
point.


Using E-Gold
To accept payments by E-Gold.com set the following variables.
$UseEgold="";
$egoldrate="1.00";
$egoldid="12345";
$egoldname="Your Company Name";
$egoldreturn="http://www.yoursite.com/ok.htm";
$egoldcancel="http://www.yoursite.com/can.htm";
$egoldunits="1";
$egoldmetalid="1";
$egoldmemo="Web Services";

$UseEgold
Set as Y if you will accept payments by E-Gold. Blank it if you won't.

$egoldrate
If the currency of this payment gateway different than your default currency when set the currency exchange rate. If the both is same when set it as 1.00.

$egoldid
Your E-Gold account number

$egoldname
The name you wishes to have displayed as the Payee on the E-Gold payment form.

$egoldreturn
full URL to return to after transaction

$egoldcancel
full URL to return to if user cancels transaction

$egoldmemo
Description for item purchased


Using Google checkout
To accept payments by Google checkout set the following variables:
$UseGoogleCheckout="";
$gcrate="1.00";
$gcmerchantid="";
$gcdesc="Web services";
$gccurrency="USD";

$UseGoogleCheckout
Set as Y if you will accept payments by Google Checkout. Blank it if you won't.

$gcrate
If the currency of this payment gateway different than your default currency when set the currency exchange rate. If the both is same when set it as 1.00.

$gcmerchantid
Google Checkout merchant id

$gcdesc
Description of services provided

$gccurrency
Account currency code


Using Worldpay Futurepay
To accept payments by Worldpay Futurepay set the following variables:

$UseWorldpayFuturepay="";
$wpfprate="1.00";
$wpfpinstid="123456";
$wpfpcartid="15";
$wpfpcurrency="GBP";
$wpfpdesc="Web Services";
$wpfptest="0";
$wpfpoption="1";

$UseWorldpayFuturepay
Set as Y if you will accept payments by Worldpay Futurepay. Blank it if you won't.

$wpfprate
If the currency of this payment gateway different than your default currency when set the currency exchange rate. If the both is same when set it as 1.00.

$wpfpinstid
instId value

$wpfpcartid
cartId value

$wpfpcurrency
currency value

$wpfpdesc
Description for purchase


Usig Ideal ING
To accept payments by Ideal ING set the following variables:

$UseIdealING="";
$idealINGrate="1.00";
$idealINGid="12345678";
$idealINGlang="nl";
$idealINGcurrency="EUR";
$idealINGdesc="Hostingpakket";
$idealINGitem="123456";
$idealINGvalid="2008-12-01T12:00:00:0000Z";
$idealINGsuccess="http://www.yoursite/ok.htm";
$idealINGcancel="http://www.yoursite/can.htm";
$idealINGerror="http://www.yoursite/err.htm";

$UseIdealING
Set as Y if you will accept payments by Ideal ING. Blank it if you won't.

$idealINGrate
If the currency of this payment gateway different than your default currency when set the currency exchange rate. If the both is same when set it as 1.00.

$idealINGid
Merchant id

$idealINGlang
Language

$idealINGcurrency
Currency code

$idealINGdesc
Description of services sold

$idealINGitem
Item number

$idealINGvalid
Valid until

$idealINGsuccess
full URL to return to after transaction

$idealINGcancel
full URL to return to if user cancels transaction

$idealINGerror
full URL to return if error occur


Usig Ideal RABO
To accept payments by Ideal RABO set the following variables:

$UseIdealRABO="";
$idealRABOrate="1.00";
$idealRABOid="12345678";
$idealRABOlang="nl";
$idealRABOcurrency="EUR";
$idealRABOdesc="Hostingpakket";
$idealRABOitem="123456";
$idealRABOvalid="2016-01-01T12:00:00:0000Z";
$idealRABOsuccess="http://www.yoursite/ok.htm";
$idealRABOcancel="http://www.yoursite/can.htm";
$idealRABOerror="http://www.yoursite/err.htm";

$UseIdealRABO
Set as Y if you will accept payments by Ideal RABO. Blank it if you won't.

$idealRABOrate
If the currency of this payment gateway different than your default currency when set the currency exchange rate. If the both is same when set it as 1.00.

$idealRABOid
Merchant id

$idealRABOlang
Language

$idealRABOcurrency
Currency code

$idealRABOdesc
Description of services sold

$idealRABOitem
Item number

$idealINGvalid
Valid until

$idealRABOsuccess
full URL to return to after transaction

$idealRABOcancel
full URL to return to if user cancels transaction

$idealRABOerror
full URL to return if error occur



Usig Ideal ABNAMRO
To accept payments by Ideal ABNAMRO set the following variables:

$UseIdealABNAMRO="";
$idealABNAMROrate="1.00";
$idealABNAMROid="12345678";
$idealABNAMROlang="nl";
$idealABNAMROcurrency="EUR";
$idealABNAMROdesc="Hostingpakket";
$idealABNAMROitem="123456";
$idealABNAMROvalid="2016-01-01T12:00:00:0000Z";
$idealABNAMROsuccess="http://www.yoursite/ok.htm";
$idealABNAMROcancel="http://www.yoursite/can.htm";
$idealABNAMROerror="http://www.yoursite/err.htm";

$UseIdealABNAMRO
Set as Y if you will accept payments by Ideal ABNAMRO. Blank it if you won't.

$idealABNAMROrate
If the currency of this payment gateway different than your default currency when set the currency exchange rate. If the both is same when set it as 1.00.

$idealABNAMROid
Merchant id

$idealABNAMROlang
Language

$idealABNAMROcurrency
Currency code

$idealABNAMROdesc
Description of services sold

$idealABNAMROitem
Item number

$idealABNAMROvalid
Valid until

$idealABNAMROsuccess
full URL to return to after transaction

$idealABNAMROcancel
full URL to return to if user cancels transaction

$idealABNAMROerror
full URL to return if error occur


Using Paymate
To accept payments by Paymate set the following variables:

$UsePaymate="";
$paymaterate="1.00";
$paymateid="";
$paymatedesc="Web Services";
$paymatecurrency="USD";

$UsePaymate
Set as Y if you will accept payments by Paymate. Blank it if you won't.

$paymaterate
If the currency of this payment gateway different than your default currency when set the currency exchange rate. If the both is same when set it as 1.00.

$paymateid
Paymate account id

$paymatedesc
Description of service provided
 
$paymatecurrency
Currency code


// Using CDGCommerce
To accept payments by CDGCommerce set the following variables:

$UseCDGCommerce="";
$cdgrate="1.00";
$cdgvendorid="12345";
$cdghome="http://www.yoursite";
$cdgdesc="Web Services";
$cdgreturn="http://www.yoursite/ok.htm";
$cdgmername="MERCHANT INC";
$cdgrecipe="monthlybusiness";

$UseCDGCommerce
Set as Y if you will accept payments by CDGCommerce. Blank it if you won't.

$cdgrate
If the currency of this payment gateway different than your default currency when set the currency exchange rate. If the both is same when set it as 1.00.

$cdgvendorid
Vendor Id

$cdghome
Your site home page

$cdgdesc
Description of item purchased

$cdgreturn
Page to return to

$cdgmername
Merchant Name

$cdgrecipe
Name of the predefined monthly recurring recipe


// Using Authorize.net
To accept payments by Authorize.net set the following variables:

$UseAuthorize="";
$authrate="1.00";
$authloginid="";
$authdesc="Web Services";
$authcurrency="USD";
$authtxnkey="";

$UseAuthorize
Set as Y if you will accept payments by CDGCommerce. Blank it if you won't.

$authrate
If the currency of this payment gateway different than your default currency when set the currency exchange rate. If the both is same when set it as 1.00.

$authloginid
Authorize.net login ID

$authdesc
Description of services ordered

$authcurrency
Currency

$authtxnkey
Secret transaction key


// Using AlertPay
To accept payments by CDGCommerce set the following variables:

$UseAlertPay="";
$alertpayrate="1.00";
$alertpaymerchantid="";
$alertpaydesc="Web Services";
$alertpaycurrency="USD";
$alertpayreturnurl="http://www.yoursite/ok.htm";
$alertpaycancelurl="http://www.yoursite/can.htm";


// Payza Settings
$UsePayza="";
$payzarate="1.00";
$payzamerchant="yourpayzaemail@domain";
$payzaitemname="Web Services";
$payzacurrency="USD";
$payzareturnurl="http://www.yoursite/ok.htm";
$payzacancelurl="http://www.yoursite/can.htm";

$UsePayza
Set as Y if you will accept payments by Payza. Blank it if you won't.

$payzarate
If the currency of this payment gateway different than your default currency when set the currency exchange rate. If the both is same when set it as 1.00.

$payzamerchant
The email address associated with your Payza account

$payzaitemname
Description of service provided
 
$payzacurrency
The currency of the payment

$payzareturnurl
Full URL to return to after transaction

$payzacancelurl
Full URL to return to if user cancels transaction


// OKPAY settings
$UseOKPAY="";
$okrate="1.00";
$okreceiver="okpay@domain";
$okcurrency="USD";
$okdesc="Web Services";
$oksuccess="http://www.yoursite/ok.htm";
$okfail="http://www.yoursite/can.htm";

$UseOKPAY
Set as Y if you will accept payments by OKPAY. Blank it if you won't.

$okrate
If the currency of this payment gateway different than your default currency when set the currency exchange rate. If the both is same when set it as 1.00.

$okreceiver
One of the following: Email address / Cellphone number or Wallet ID.

$okcurrency
The currency of the payment

$okdesc
Description for item purchased

$oksuccess
full URL to return to after transaction

$okfail
full URL to return to if user cancels transaction


// Liberty Reserve settings
$UseLibertyReserve="";
$lrrate="1.00";
$lracc="U1234567";
$lrstore="Store Name"
$lrcurrency="LRUSD";
$lrcurrency_="USD";
$lrcomments="Web Services";
$lrsuccessurl="http://www.yoursite/ok.htm";
$lrsuccessurlmethod="GET";
$lrfailurl="http://www.yoursite/can.htm";
$lrfailurlmethod="";
$lrstatusurl="mailto:mymail@domain.com";
$lrstatusurlmethod="GET";

$UseLibertyReserve
Set as Y if you will accept payments by Liberty Reserve. Blank it if you won't.

$lrrate
If the currency of this payment gateway different than your default currency when set the currency exchange rate.  If the both is same when set it as 1.00.

$lracc
Merchant's account number

$lrstore
Name of the Merchant's store

$lrcurrency
Currency type preferred. LRUSD, LREUR.

$lrcurrency_
Define 3 digit currency code. USD, EUR

$lrcomments
Memo, that Merchant may want to include along with payment

$lrsuccessurl
URL address of payment successful page at the Merchant's web site

$lrsuccessurlmethod
Payment successful page redirect HTTP method. GET, POST...

$lrfailurl
URL address of payment failed page at the Merchant's web site

$lrfailurlmethod
Payment failed page redirect HTTP method.

$lrstatusurl
For example: http://www.merchant.com/status.aspx or mailto:mymail@domain.com

$lrstatusurlmethod
Status data transmit HTTP method. GET, POST


// Cashu settings
$UseCashu="";
$cashurate="1.00";
$cashumerchantid="XYZ";
$cashuencryptionkey="";
$cashucurrency="USD";
$cashulanguage="EN";
$cashudisplaytext="Web Services";
$cashuservicename="";
 
$UseCashu
Set as Y if you will accept payments by Cashu. Blank it if you won't.

$cashurate
If the currency of this payment gateway different than your default currency when set the currency exchange rate. If the both is same when set it as 1.00.

$cashumerchantid
The Merchant ID as entered during registration.

$cashuencryptionkey
Cashu Encryption Keyword will be used to create MD5 hash of a string for each payment.

$cashucurrency
Currency in which the service/item is being sold on the Merchant’s website. USD CSH AED EUR JOD EGP SAR

$cashulanguage
String identifying the interface language of the payment page.

$cashudisplaytext
English or Arabic description of the transaction, this will be used to display for the customer on the payment page.

$cashuservicename
Name of the service or domain entered by Merchant that has multiple checkout pages (details on this available on cashU Merchant account guide)


// DIXIPAY settings
$UseDIXIPAY="";
$dixipayrate="1.00";
$dixipayrecipientacc="201017000002";
$dixipayrecipientname="My Company";
$dixipayproduct="Web Services";
$dixipayurlreturn="http://www.yoursite/ok.htm";
$dixipayurlcancel="http://www.yoursite/can.htm";
$dixipayurlstatus="https://www.yoursite/results.php";
$dixipayurllogo="https://www.yoursite/logo.jpg";
$dixipaylang="EN";
$dixipaycurrency="EUR";
$dixipayapikey="a7c04902a40ae5d699d774727e";

$UseDIXIPAY
Set as Y if you will accept payments by DIXIPAY. Blank it if you won't.

$dixipayrate
If the currency of this payment gateway different than your default currency when set the currency exchange rate. If the both is same when set it as 1.00.

$dixipayrecipientacc
Account number of recipient in DIXIPAY

$dixipayrecipientname
Merchant name which will be shown on the gateway.

$dixipayproduct
Description of products or service which will be shown on the gateway.

$dixipayurlreturn
URL to which the customer will be returned when the payment is made successfully

$dixipayurlcancel
URL to which the customer will be returned if the payment process is cancelled.

$dixipayurlstatus
URL, which sends payment results to.

$dixipayurllogo
The URL of the logo which you would like to appear at the top of the gateway.

$dixipaylang
Language interface can be any of next languages: EN RU AR

$dixipaycurrency
3-letter code of the currency of the amount

$dixipayapikey
Special key is used to verify compliance with the seller in the system.


Manual payment processing
If you wish to process payments manually set the following variables.

$UseManual="Y";
$manualreturn=http://www.yoursite.com/thanks.htm; 

$UseManual
Set as Y if you wish to process payments manually. Blank it if you don't.

$manualreturn 
This is the full URL that the user will be taken to after checkout.


// OneCard settings
$UseOneCard="";
$onecardrate="1.00";
$onecardmerchid="test_merchant";
$onecardtranskey="XYZ";
$onecardcurrency="USD";
$onecardmprod="Web Services";
$onecardreturnurl="http://www.yoursite.com/ok.html";	// The URL where user will be redirected to after a successful transaction is completed on OneCard website

$UseOneCard
Set as Y if you will accept payments by OneCard. Blank it if you won't.

$onecardrate
If the currency of this payment gateway different than your default currency when set the currency exchange rate. If the both is same when set it as 1.00.

$onecardmerchid
The merchant identifier provided by OneCard upon signing the contract

$onecardtranskey
The merchant identifier provided by OneCard upon signing the contract

$onecardcurrency
Currency EGP SAR USD EUR AED KWD SYP

$onecardmprod
Product/Service description that will be displayed to the user

$onecardreturnurl
The URL where user will be redirected to after a successful transaction is completed on OneCard website


// Custom Payment Gateway
To accept payments by your payment gateway set the following variables.
$UseCPG="";
$cpgrate="1.00";
$cpgurl="http://www.gatewayurl";
$cpgordernum="order_number";
$cpgtotal="total";
$cpgrecurringtotal="recurrtotal";
$cpgcurrency="USD";
$cpgother="";

$UseCPG
Set as Y if you will accept payments by your payment gateway. Blank it if you won't.

$cpgrate
If the currency of this payment gateway different than your default currency when set the currency exchange rate. If the both is same when set it as 1.00.

$cpgurl
The url of your payment gateway or form.

$cpgordernum
The field name of order number value.

$cpgtotal
The field name of total fee value.

$cpgrecurringtotal
The field name of monthly recurring total fee value.

$cpgcurrency
3 digit currency code of your payment gateway.

$cpgother
Other field names that required together with their values (for example: cancel_url=http://www.yoursite.com/can.htm&return_url=http://www.yoursite.com/ok.htm)


// Coupon Module
$couponcode = "";
$applicablecoupontodomain = "";
$applicablecoupontohosting = "Y";
$couponvalue = "0";
$coupontype = "P";
$couponvalidupto = "2012-12-24";

$couponcode
Coupon code. Blank it if does not required.

$applicablecoupontodomain
Set it as Y if coupon is applicable to domain registration and transfer.  Blank it if does not required.

$applicablecoupontohosting
Set it as Y if coupon is applicable to hosting.  Blank it if does not required.

$couponvalue
Set value of your coupon code($/%). Set it as 0 if does not required.

$coupontype
Set it as D for dollar(money) or P for Percentage(%). Blank it if does not required.

$couponvalidupto
Write the date that the coupon will be valid up at YYYY-MM-DD format.


Adding DHCart to Your Page:

Now we have setup config.php you are ready to add the shopping cart to your
site. First of all save the changes you have made to config.php.

Open order.php file in a text editor such as Notpad. Remove the text
"Customize the HEADER of your page" and paste your header html/xhtml code
instead of it. Then Remove the text "Customize the FOOTER of your page"
and paste your footer html/xhtml code instead of it.

Finally upload your page and the following files which all need to be in the
same directory on the server. Make sure you use the ascii (or text) method
for FTP upload.

dhcart.php
order.php (you can change the file name as you wish)
config.php
whois_servers.php 
language.php
class.phpmailer.php
class.smtp.php
dhcart.css
loading.gif

Separate pricing for short domain names:

Some registrars have higher pricing for short domain names. DHCart supports
separate pricing if required.

To add separate pricing you need to add a separate section to the $register
entry for the domain extension separated by a comma as follows:
$register[]=".cd,1:2,39.99:74.99,length(1-3)=79.99:149.99";

The new section, length(1-3)=79.99:149.99, tells Whois to use the higher
pricing for domain names between 1 and 3 characters in length.

You can add one length command to any domain extension as required.

---------------------------------------------------------------------------------
Chapter 2 Customising DHCart
---------------------------------------------------------------------------------

You can change size and colors of the text and tables by editing dhcart.css file.

To help you we have separated all of the English text, the fields used on the order
form and the email messages and placed them in a separate language file called
"language.php". This enables you to easily translate the text into other languages,
modify the emails sent to clients and also to add or remove entry fields used on
the order form.


Translating Into Other Languages:

To translate the script first open up language.php in a text editor and save it
with a new name such as french.php etc. You will find each phrase used in the
script has an entry similar to the following.
$lang_order_summary = "Order Summary";

Simply modify the text within the quotation marke after the equals sign.


Modifying The Order Form Fields:

You can easily add or remove entry fields from the order form. To do this open up
the language file and scroll down to find the entry field definitions which look as
follows.

$cform[] = "name,Contact Person,You must enter your name";

As you can see this is split into three comma separated parts. The first part
specifies the html field name. The second specifies the label displayed on the
screen. The third specifies the javascript warning to be displayed if the user tries
to leave the field empty. Leave the warning blank if the field can be left blank
(such as fax etc).

For the name and email fields you must use the html field names 'name' and 'email'
although you can obviously translate the displayed labels as required. This is
because the script requires these two fields.

You can add, remove or edit fields as required.


Modifying The Email Messages:

The subject and text of the email messages sent to the client and vendor confirming
the order can easily be modified. Open up the language file and scroll down to the 
customer or vendor email section as required.

The first line defines the subject of the email. The rest of the lines define the
body text of the email. Within the text you can get Whois to automatically insert
data using the following variables.

!!!vendorcompany!!! 
You company name 

!!!vendoremail!!! 
You company email address 

!!!ordnum!!! 
The unique Whois order no 

!!!orderdetails!!! 
Full order details will be inserted here. This should be on a blank line.

!!!ipaddress!!! 
Users IP address 

!!!name!!!
Customer name

!!!formfields!!! 
This will insert all of the entered data from the order form. This variable
should be on a blank line.
