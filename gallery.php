<?php

function generate_gallery($directory){
	//$origin is the tab you are opening this from
	$dir = $directory;
	$origin = substr($directory, 0, -1);
	//$dir    = 'portfolio/';

	//$files1 = scandir($dir);
	$files = scandir($dir, 1);

	$x=0;
	$id_counter=0;
	
	echo "<table><tr>";

	foreach ($files as &$value) {
		
		if($value!="." && $value!=".."){
			if($origin=="web"){
				echo "<td><div style='background-image: url(".$dir.$value.");' class='thumbnail_web' id='".$origin.$id_counter."'>&nbsp;</div></td>";
				$x++;
				$id_counter++;
				if($x==5){
					echo "</tr><tr>";
					$x=0;
				}

			}
			else{
				
				echo "<td><div style='background-image: url(".$dir.$value.");' class='thumbnail' id='".$origin.$id_counter."'>&nbsp;</div></td>";
				$x++;
				$id_counter++;
				if($x==10){
					echo "</tr><tr>";
					$x=0;
				}
			
			}

		}
		
	}

	echo "</tr></table>";

	// $arr is now array(2, 4, 6, 8)
	unset($value);

	return $origin;
	
	}



?>