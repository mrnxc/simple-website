<!DOCTYPE html>
<html>
<head>
	<title>Inventory</title>
	<link rel="stylesheet" type="text/css" href="DIST/css/bootstrap.css">
</head>
<body>
	
<?php
      $c=oci_connect("jasper","123","localhost/XE");
     if (!$c){

          $e=oci_error();
            trigger_error('Could not connect database:'.$e['message'],E_USER_ERROR);

            }

            $s=oci_parse($c, "select * from inventory");
	if(!$s){
			$e=oci_error();
			trigger_error('Could not parse statement:'.$e['message'],E_USER_ERROR);

		}

		$r=oci_execute($s);
		if(!$r){

		$e=oci_error($s);
		trigger_error('Could not parse statement:'.$e['message'],E_USER_ERROR);

	}


		echo '<table class="table table-striped table-hover ">';
		$ncols=oci_num_fields($s);
		echo"<tr>\n";
		for ($i=1; $i<=$ncols; ++$i){
			$colname= oci_field_name($s,$i);
		        echo "<th><b>".htmlentities($colname,ENT_QUOTES)."</b> </th>\n";
		
		}


			echo"</tr>\n";

				while (($row=oci_fetch_array($s,OCI_ASSOC+OCI_RETURN_NULLS))!=FALSE){
				echo"<tr>\n";
				foreach ($row as $item){
					echo "<td>".($item !==null?htmlentities($item,ENT_QUOTES):"&nbsp;")."</tb>\n";
			}
				echo"</tr>\n";
		}
			echo"</table>\n";

?>
</body>
</html>