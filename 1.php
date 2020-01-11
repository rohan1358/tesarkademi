<?php 	
function biodata(){
	$biodata = array(
		"name" => "Rohan Adi Priyatna",
		"age" => 18,
		"address" => "Pasir Datar Indah, Caringin, Sukabumi Regency, Jawa Barat 43154",
		"hobbies" => ["Gaming"],
		"is_married" => false,
		"list_school" => 
					[
			array("high_school" => "SMK"),
			array("year_in" => 2017),
			array("year_out" => 2019),
			array("major" => Null)
			],
		"skills" => [
			array("php" => "beginner"),
			array("html" => "beginner"),
			array("javascript" => "beginner"),
			array("sql" => "beginner"),
			array("css" => "beginner"),
			array("budidaya Ikan" => "advanced")
		],
		"interest_in_coding" => true
	);

	return $biodata;
	
 }
 echo json_encode(biodata());
 ?>
