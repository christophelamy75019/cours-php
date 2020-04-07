<?php

if ($argv[2] == "/") {
	if ($argv[3] == "0")
    	echo "pas possible";
    		else echo ($argv[1]/$argv[3]);

} elseif ($argv[2] == "-") {
    echo ($argv[1]-$argv[3]);

} elseif ($argv[2] == "+") {
    echo ($argv[1]+$argv[3]);

} elseif ($argv[2] == "x") {
    echo ($argv[1]*$argv[3]);

} else {
    echo "KO";
}
?>