<?php 
$rs = 6;
echo rs($rs);
function rs($rs){
	for ($i=1; $i <= $rs ; $i++) { 
		$rand[] = rand(1,10);
	}

	echo "array :[".implode(",", $rand).']';
	echo "<br/>";
	echo "Sum :".array_sum($rand);
}


 ?>