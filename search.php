<?php
//search("Sviecia saule", grybas) ===> false
//search("Sviecia saule", sau le) ===> true
//Search in string without PHP methods, only using strlen
function check($part, $str)
{

	$word = "";
	$words[] = "";

		$n = 0;
		for($i=0; $i < strlen($str); $i++)
		{

			if($str[$i] == " ")
			{
				$n += 1;
				$word = "";
			}
			if($str[$i] != " ")
			{
				$word .=$str[$i];
				$words[$n] = $word;
			}
			
		}

		foreach ($words as $word) {
			if($word == $part)
				return true;
			else
				return false;
		}
}

		if(check("Labasss", "Labas ka tu"))
			echo "labas";
		else
			echo "atia";

?>
