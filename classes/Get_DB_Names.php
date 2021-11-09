<?php

class DBnames
{
	 public function names()
	 {
	     $names = array();
		 
	   // Usage without mysql_list_dbs()
		$link = mysql_connect('localhost', 'root', '');
		$res = mysql_query("SHOW DATABASES");
		
		while ($row = mysql_fetch_assoc($res)) 
		{
			//echo $row['Database'] . "\n"."</br>";
			$names[]=$row['Database'];
		}
		  return $names;
		//// Deprecated as of PHP 5.4.0
		//$link = mysql_connect('localhost', 'root', '');
		//$db_list = mysql_list_dbs($link);
		//
		//while ($row = mysql_fetch_object($db_list)) {
		//     echo $row->Database . "\n"."</br>";
		//}
	 }
	 public function NumOfTbles($d)
	 {
	   $conn = mysql_connect('localhost', 'root', '');
       $res = mysql_query( "select table_name from information_schema.tables where table_schema='".$d."'", $conn );
        return mysql_num_rows( $res );
	 }
}

?>