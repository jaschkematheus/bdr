<?php

for($i = 1; $i <= 100; $i++){

		
	switch ($i) {
		case ($i%3 == 0 && $i%5 == 0):
			print_r("FizzBuzz <br>");
			break;
		case ($i%3 == 0):
			print_r("Fizz <br>");
			break;
		case ($i%5 == 0):
			print_r("Buzz <br>");
			break;
		case ($i):
			print_r("$i <br>");
			break;
	}


}

?>