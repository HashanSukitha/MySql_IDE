<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link rel="stylesheet" href="css/styles.css" type="text/css"/>

</head>

<body>



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
        $DB = $_GET['DB'];
	    $tblCount=1;
		$link = mysql_connect('localhost', 'root', '');
		mysql_select_db($DB) or die(mysql_error());
		$result = mysql_query("show tables"); // run the query and assign the result to $result
		
		$LINK="Show_field_Names.php?DB=".$DB;
		
		echo '<table border="1">';
		  echo '<tr>';
		    echo '<td></td>';
			echo '<td>Table Name</td>';
		   echo '</tr>';
		   
		   
		while($table = mysql_fetch_array($result))  
		{ // go through each row that was returned in $result
		    echo '<tr>';
		     echo '<td>';
			   echo $tblCount;
			 echo '</td>';
			 
			 echo '<td>';
				echo('<a href='.$LINK.'&TBL='.$table[0].'>'.$table[0].'</a>'. "<BR>");
			 echo '</td>';
			echo '</tr>';
			
			$tblCount=$tblCount+1;
		}
		     
		echo '</table>'
   ?> 

	
	</div>
</div>

</body>
</html>
