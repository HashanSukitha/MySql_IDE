<?php


        $itm = $_GET['q'];
        $link = mysql_connect('localhost', 'root', '');
		mysql_select_db("hashan") or die(mysql_error());
		$res = mysql_query("SELECT * FROM ".$itm);
		echo '<table>';
		while($table = mysql_fetch_array($res))  
		{ // go through each row that was returned in $result
		    echo '<tr>';
			 echo '<td>';
				echo('<a href="#"'.$table[0].'>'.$table[0].'</a>');
			 echo '</td>';
			 
			 echo '<td>';
			   echo('<a href="#"'.$table[1].'>'.$table[1].'</a>'. "<BR>");
			 echo '</td>';
			echo '</tr>';

		}   
		echo '</table>'

?>