<?php
session_start();
		if($_GET['f']=='dbNames')
		{
		   //if($_SESSION['isDBFormOpen']!='yes')
		  // {
			   $dbx = new DB();
			  $form ="'".$_GET['form']."'";
			   $dbx->dbNames($form);
			  // $_SESSION['isDBFormOpen']='yes';
			// }
		}
		elseif($_GET['f']=='tableNames')
		{
		
		   $dby = new DB();
		   $dby->tableNames();
		}
		elseif($_GET['f']=='createDB')
		{
		   $dbz = new DB();
		   $dbz->createDB();
		}
		elseif($_GET['f']=='deleteDB')
		{
		  
		   $dba= new DB();
		   $dbn =$_GET['db'];
		   $dba->deleteDB($dbn);
		}
     
/////////////////////////////////////////////////////////////////////////	
class DB
{	 
        /////////////////////////////////////////////////////////////////////////
		public function dbNames($form)
		{
			//$form="";
			$link = mysql_connect('localhost', 'root', '');
			$res = mysql_query("SHOW DATABASES");
			 echo '<table border="0" >';
			while ($row = mysql_fetch_array($res)) 
			{
			  if(($row['Database']=='information_schema')||($row['Database']=='mysql'))
			 {
				// ===========================================================================================
				echo '<tr>';
				 echo '<td>';
				   $x = "'".$row['Database']."'";
				     echo'<a href="#">';
				      echo('<a href="javascript:checkAndGenNumber('.$x.')">'.$row['Database'].'</a>');
				     echo'</a>';
				 echo '</td>';

                 echo '<td>';
				   echo'<a href="#">';
				    echo '<img src="system/images/disable_delete.png" />';
				   echo'</a>';
				 echo '</td>';     
				 
				 echo '<td>';
				  echo'<a href="#">';
				   echo '<img src="system/images/disable_edit.png" />';
				  echo'</a>';
				 echo '</td>'; 

				echo '<td>';
				   echo'<a href="#">';
				     echo '<img src="system/images/users.png" />';
				   echo'</a>';
				 echo '</td>';
				 
				 
				echo '</tr>';
				// ===========================================================================================
	          }
			  else
			  {
			    // ===========================================================================================
			  echo '<tr>';
				 echo '<td>';
				   $x = "'".$row['Database']."'";
				   echo('<a href="javascript:checkAndGenNumber('.$x.')">'.$row['Database'].'</a>');
				   
				 echo '</td>';
				 
				 echo '<td>';
				   echo'<a href="javascript:deleteDB('.$form.','.$x.')">';
				    echo '<img src="system/images/delete.png" />';
				   echo'</a>';
				 echo '</td>';
				
				
				echo '<td>';
				  echo'<a href="javascript:checkAndGenNumber3('.$x.')">';
				   echo '<img src="system/images/edit.png" />';
				  echo'</a>';
				 echo '</td>';
				
				
				echo '<td>';
				 echo'<a href="#">';
				   echo '<img src="system/images/users.png" />';
				  echo'</a>';
				 echo '</td>';
				 
				 
				echo '</tr>';
				// ===========================================================================================
			  }
			}
			echo '</table>';
		   
	     }
    /////////////////////////////////////////////////////////////////////////
	 public function tableNames()
		 {
		  $DB = $_GET['db'];
	    $tblCount=1;
		$link = mysql_connect('localhost', 'root', '');
		mysql_select_db($DB) or die(mysql_error());
		$result = mysql_query("show tables"); 
		
		echo '<table border="1">';
		  echo '<tr>';
		    echo '<td></td>';
			echo '<td>Table Name</td>';
		   echo '</tr>';
		   
		   
		while($table = mysql_fetch_array($result))  
		{
		    echo '<tr>';
		     echo '<td>';
			  echo $tblCount;
			 echo '</td>';
			 
			echo '<td>';
				//echo('<a href='.$LINK.'&TBL='.$table[0].'>'.$table[0].'</a>'. "<BR>");
				echo('<a href=#>'.$table[0].'</a>'. "<BR>");
			 echo '</td>';
			echo '</tr>';
			
			$tblCount=$tblCount+1;
		}
		     
		echo '</table>';
	}
	
	/////////////////////////////////////////////////////////////////////////
	public function createDB()
	{
	 $DBN = $_GET['DBname'];
	 

	 echo $DBN;
	 
		 	 $link = mysql_connect('localhost', 'root', '');
		if (!$link) {
			die('Could not connect: ' . mysql_error());
		}
		
		// Make my_db the current database
		$db_selected = mysql_select_db($DBN, $link);
		
		if (!$db_selected) 
		{
		  // If we couldn't, then it either doesn't exist, or we can't see it.
		  $sql = 'CREATE DATABASE '.$DBN;
		
		  if (mysql_query($sql, $link)) {
			  echo "Database ".$DBN." created successfully\n";
		  } else {
			  echo 'Error creating database: ' . mysql_error() . "\n";
		  }
		}
		
		mysql_close($link);  
		
	}
	/////////////////////////////////////////////////////////////////////////
	public function deleteDB($dbn)
	{
		 $link1 = mysql_connect('localhost', 'root', '');
		 if (!$link1) 
		 {
		   die('Could not connect: ' . mysql_error());
		 }
	
		$sql1 = 'DROP DATABASE '.$dbn;
		if (mysql_query($sql1, $link1))
		{
		  echo "Database my_db was successfully dropped\n";
		}
		 else
		{
		  echo 'Error dropping database: ' . mysql_error() . "\n";
		 }
	
	}
}

?>
