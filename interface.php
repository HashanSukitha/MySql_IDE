<?php
include("./classes/Get_DB_Names.php");
$_SESSION['CurrentDB']=0;
$_SESSION["temp"]=0;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link rel="stylesheet" href="css/styles.css" type="text/css"/>
<script src="jqryLib/jquery-1.9.1.js"></script>
<script src="jqryLib/jquery-ui.js"></script>


<script>
window.onload = function ()
{

	$( "#Settings" ).toggle( "blind", 0, 500 );
	$( "#System" ).toggle( "blind", 0, 500 );
}	
	
$(function() 
{
  function runEffect(myVal) 
  {
	var selectedEffect = $( "#effectTypes" ).val();
	var options = {};
	if ( selectedEffect === "scale" ) 
	{
         options = { percent: 0 };
	}
	else if ( selectedEffect === "size" ) 
	{
		options = { to: { width: 200, height: 60 } 
	};
   }
if(myVal=='1')
{
     
   $( "#System" ).toggle( selectedEffect, options, 500 );
}

if(myVal=='2')
{
    //fullScreen();
   $( "#Settings" ).toggle( selectedEffect, options, 500 );
}   

};
// set effect from select menu value

$( "#button1" ).click(function() {runEffect('1');return false;});

$( "#button2" ).click(function() {runEffect('2');return false;});


});

function fullScreen()
{
var el = document.documentElement
, rfs = // for newer Webkit and Firefox
       el.requestFullScreen
    || el.webkitRequestFullScreen
    || el.mozRequestFullScreen
    || el.msRequestFullScreen
;
if(typeof rfs!="undefined" && rfs){
  rfs.call(el);
} else if(typeof window.ActiveXObject!="undefined"){
  // for Internet Explorer
  var wscript = new ActiveXObject("WScript.Shell");
  if (wscript!=null) {
     wscript.SendKeys("{F11}");
  }
}
}


</script>


</head>

<body>
<!--========================================================================================-->
<div id="Settings">
		<div id="effect">
 
 <select name="effects" id="effectTypes" size="5">
<option selected="selected" value="blind">Blind</option>
<option value="bounce">Bounce</option>
<option value="clip">Clip</option>
<option value="drop">Drop</option>
<option value="explode">Explode</option>
<option value="fold">Fold</option>
<option value="highlight">Highlight</option>
<option value="puff">Puff</option>
<option value="pulsate">Pulsate</option>
<option value="scale">Scale</option>
<option value="shake">Shake</option>
<option value="size">Size</option>
<option value="slide">Slide</option>
</select>
 
		</div>
</div>
<!--========================================================================================-->

<!--========================================================================================-->
<div id="System">
  <div id="effect">
		
<?php 
$DB = new DBnames();

?>
<table width="200" border="1" id="sysTbl">
          <tr>
            <td><div align="center">Databases</div></td>
            <td><div align="center">Tables</div></td>
          </tr>
          <tr>
            <td><div align="center">
              <select name="select" size="5" id="DBList">
                <?php
	foreach($DB->names() as $d)
	 {
	 ?>
                <option><?php echo $d; ?></option>
                <?php
	 }
	 ?>
              </select>
            </div></td>
            <td><div align="center"></div></td>
          </tr>
        </table>
		</div>
	
</div>
<!--========================================================================================-->
<!--========================================================================================-->

<a href="#" id="button1">
<div id="tabhead1">
  <p>System</p>
</div>
</a>

<a href="#" id="button2">
<div id="tabhead2">
  <p>Settings</p>
</div>
</a>


<div id="box1">
  
  <div id="topBox">
  </div>
 
  <div id="heads">
     <div id="SQLhead">
	 <p>SQL</p>
	 </div>
      
	 <div id="Privihead">
	 <p>Privileges</p>
	 </div>
	 
	 <div id="Exporthead">
	 <p>Export</p>
	 </div>
   </div>

	<div id="box2">
	
              
    <?php
	
	  echo '<table border="1">';
	    echo '<tr>';
		  echo '<td>Database Name</td>';
          echo '<td>Number Of Tables</td>';
		echo '</tr>';
	  foreach($DB->names() as $d)
	 {
	    $LINK="Show_Table_Names.php?DB=".$d;

               echo '<tr>';
			     echo '<td>';
				    echo '<a href='.$LINK.'>'.$d.'</a>';
                 echo '</td>';
				 
				
	             
				 
				 echo '<td>';
				   echo $DB->NumOfTbles($d);
				 echo '</td>';
			   echo '</tr>';
				 
	 }
	 echo '</table>';
	 
	 ?>
             

	
	</div>
</div>




</body>
</html>
