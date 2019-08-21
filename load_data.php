<?php
  include_once "includes/dbh.inc.php";


$output = '';

if(isset($_POST["id"])){
	if ($_POST["id"] != '') {
		
		$sql = "SELECT * FROM item_list WHERE id = '".$_POST["id"]."'";
	}

	else {
		$sql = "SELECT * FROM item_list";
	}
	$result = mysqli_qeery($conn, $sql);

	while($row = mysqli_fetch_array($result)){
		$output .= '<label for="">".$row.["size_mb"]"</label>'
		$output .= '<input type="text">'

	}

	echo $output;
}


?>
