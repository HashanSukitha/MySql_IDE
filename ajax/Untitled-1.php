<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Tiny Scrollbar: A lightweight jQuery plugin</title>
	<link rel="stylesheet" href="css/website.css" type="text/css" media="screen"/>
	
	<script type="text/javascript" src="../system/js/jquery.min.js"></script>
	<script type="text/javascript" src="../system/js/jquery.tinyscrollbar.min.js"></script>
	<script type="text/javascript" src="../jqryLib/jquery-ui.js"></script>
	<script type="text/javascript" src="../jqryLib/jquery-1.9.1.js"></script>
	<script type="text/javascript">
	var j = jQuery.noConflict();
		j(document).ready(function(){
			j('#scrollbar1').tinyscrollbar();	
		});
	</script>
	







	<script>
function showCustomer(str)
{
var xmlhttp;
if (str=="")
  {
  document.getElementById("txtHint").innerHTML="";
  return;
  }
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","x.php?q="+str,true);
xmlhttp.send();

 j("<style>").text("#scrollbar1 .viewport  { overflow: scroll; }")
}
</script>	
		
</head>
<body>
	<div id="scrollbar1">
		<div class="scrollbar"><div class="track"><div class="thumb"><div class="end"></div></div></div></div>
		<div class="viewport">
		  <div class="overview">
                <p>
				<form action=""> 
					<select name="customers" onchange="showCustomer(this.value)">
					<option value="">Select a customer:</option>
					<option value="emp">emp</option>
					<option value="xx">North/South</option>
					<option value="cvv">Wolski Zajazd</option>
					</select>
			</form>
					<br>
					<div id="txtHint">Customer info will be listed here...</div>
				</p>
					   
			</div>
		</div>
	</div>	
</body>
</html>
