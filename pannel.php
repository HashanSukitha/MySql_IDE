
<?php
include("./classes/Get_DB_Names.php");
?>


<html>
<head>
<link rel="stylesheet" href="css/styles.css" type="text/css"/>
</head>

<body>


<?php 
$DB = new DBnames();
$DB->names();
?>


<select id="DBList">
	 <?php
	foreach($DB->names() as $d)
	 {
	 ?> 

		   <option><?php echo $d; ?></option>
   
	 <?php
	 }
	 ?>
</select>


</body>
</html>






