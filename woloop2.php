<?php
	function loop($num){
		if($num<=100){
			echo $num."<br>";

			loop(++$num);
		}
	}
	loop(1);
?>