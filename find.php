<?php
require('SimpleXLSX.php');
if ( $xlsx = SimpleXLSX::parse('CDR_06_08.xlsx') ) {
	$it = $xlsx->rows();
	$flatarray=array();
foreach($it as $k=>$v) {
	//1st column
	$flatarray[]=$v[0];
	
}
//var_dump($flatarray);
$unique=array_unique($flatarray);
echo "Total records in Excel file are:" ." " . count(array_filter($flatarray)) . ". " . 
	 "Unique records are:" ." " . count(array_filter($unique)) . "." ;
} else {
	echo SimpleXLSX::parseError();
}

?>