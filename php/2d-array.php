<?php 
/**
 * https://www.hackerrank.com/challenges/2d-array/problem 
 * 
 * */

	function hourglassSum($arr) {
	    $sum = 0;
	    
	    for($i=0; $i < 4; $i++){
	        for($j=0; $j< 4;$j++){
	            $sum += $arr[$i][$j] + $arr[$i][$j+1] + $arr[$i][$j+2];
	            $sum += $arr[$i+1][$j+1];
	            $sum += $arr[$i+2][$j] + $arr[$i+2][$j+1] + $arr[$i+2][$j+2];
	            if($sum > $bigger){
	                $bigger = $sum;
	            }
	            $sum = 0;
	        }
	    }
	    return $bigger;
	}

 ?>