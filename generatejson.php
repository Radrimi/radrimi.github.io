<?php


 $directory = "images_pro";


 //name : "Bolsa" , description: " " , price: 180.00 ,portion: 2 , image: "IMG-20151117-WA0002.jpg" , directory: "bolsas" 
 $bolsas = array();
 $bolsas_list = scandir($directory."/sapatos");

 foreach($bolsas_list as $bolsa){
	
	$bolsa = array(
		"name" => "Sapatos",
		"description" => "",
		"price" => " - ",
		"portion" => "2",
		"image" => $bolsa,
		"directory" => "sapatos"
	);
 		
	array_push($bolsas, $bolsa);	
	
 }

 echo json_encode($bolsas);
 




?>