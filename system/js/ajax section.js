<!-----------------------------------------------ajax section ------------------------------------------------->


function showCustomer(functionName,form,db)
{

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
    document.getElementById(form).innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("POST","system/classes/DB.php?f="+functionName+"&db="+db,true);
xmlhttp.send();


}
<!-----------------------------------------------end of ajax section ------------------------------------------------->

function showtbl(functionName1,form1,db1)
{
 //alert("xxx");
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
    document.getElementById(form1).innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("POST","system/classes/DB.php?f="+functionName1+"&db="+db1,true);
xmlhttp.send();


}