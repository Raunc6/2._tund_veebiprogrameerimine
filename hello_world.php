<?php

	$first_name="Rauno";
	$last_name="Taaksalu";
	echo $first_name." ".$last_name;
	
?>	

<br>

<?php

	$age = 20;
	//kui on väiksem kui 18, siis alaealine
	//Kui on suurem või võrdne 18-ega, siis täisealine.
	if($age < 18) {
		//tõene
		echo "alaealine";
		
	} else {
		//väär
		echo "täisealine";
	}

?>

<br>

<?php

	// nii mitu korda trüki välja "palju", kui palju on vanust
	
	for($i = 0; $i < $age; $i = $i + 1 ) {
		
		//see mida korratakse
		echo "palju ";
		
	}

	
	echo "õnne";
?>