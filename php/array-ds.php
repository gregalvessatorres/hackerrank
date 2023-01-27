<?php 
/**
 * 
 * https://www.hackerrank.com/challenges/arrays-ds/problem
 * 
 * */

	function reverseArray($a) {
	    // Write your code here
	    $cont = count($a)-1;
	    $reverse = [];
	    while($cont>=0){
	        array_push($reverse, $a[$cont]);
	        $cont--;
	    }
	    return $reverse;
	}
 ?>