<?php
function combine_arrays($first, $second){
	$new= array();
	$newer= array($first[0], $first[1], $second[0], $second[1]);
	for($a=0; $a<2; $a++){
		$new[]= $first[$a];
	}
	for ($b=0; $b<2; $b++){
		$new[] = $second[$b];
	}
echo "(" . $new[0] .  ", " . $new[1] .  ", " . $new[2] . ", "  . $new[3] . ")" . "<br>";
return $newer;
}

 print_r(combine_arrays(array(0,1), array(2,3)));


 //COPY: cp source destination
 // to put it in current directory, use a dot 
 //To refer to the directory it is in, use ~/Location/Location

 //Commit: git commit -m "A comment on it, like 'Added 2 new files'"
 //New Comment!

 ?>


