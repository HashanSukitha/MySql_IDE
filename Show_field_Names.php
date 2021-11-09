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
		$TBL = $_GET['TBL'];
$link = mysql_connect('localhost', 'root', '');
mysql_select_db($DB) or die(mysql_error());
$result = mysql_query("SHOW COLUMNS FROM ".$TBL);
if (!$result) {
    echo 'Could not run query: ' . mysql_error();
    exit;
}
if (mysql_num_rows($result) > 0) {
    while ($row = mysql_fetch_assoc($result)) {
        print_r($row);
		echo "<br>";
		
    }
}


   ?> 


	
	</div>
</div>

</body>
</html>
