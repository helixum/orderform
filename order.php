<?php include"config.php"; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
 <title>Your Order Page</title>
 <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
 <link href="dhcart.css" type="text/css" rel="stylesheet" />
</head>

<body onLoad="init()">

 <div id="loading" style="position:absolute; width:100%; text-align:center; top:240px;"><img src="loading.gif" width="32" height="32" border="0"></div><script language="javascript"> var ld=(document.all);  var ns4=document.layers; var ns6=document.getElementById&&!document.all; var ie4=document.all;  if (ns4) 	ld=document.loading; else if (ns6) 	ld=document.getElementById("loading").style; else if (ie4) 	ld=document.all.loading.style;  function init() { if(ns4){ld.visibility="hidden";} else if (ns6||ie4) ld.display="none"; } </script>

 <?php include"dhcart.php"; ?>

</body>
</html>