<?php 
/**
 * https://www.hackerrank.com/challenges/balanced-brackets/problem
 * 
 * */

    function isBalanced($s) {
        $chaves = str_split($s);
        $isBalanced = 'YES';
        $openings = ['{','[','('];
        $closing = ['}',']',')'];
        $breakFor = false;
        $aberturas = [];
        $cont1 = count($chaves);
        //{[()]}
        for($i=0; $i<count($chaves); $i++){
            if(in_array($chaves[$i], $openings)){
                array_push($aberturas, $chaves[$i]);
                continue;
            }else if(in_array($chaves[$i], $closing)){
                switch($chaves[$i]){
                    case "}":
                        if($aberturas[count($aberturas)-1] == "{"){
                            array_splice($aberturas, (count($aberturas)-1),1);
                            break;
                        }
                        $breakFor = true;
                        break;
                    case "]":
                        if($aberturas[count($aberturas)-1] == "["){
                            array_splice($aberturas, (count($aberturas)-1),1);
                            break;
                        }
                        $breakFor = true;
                        break;
                    case ")": 
                        if($aberturas[count($aberturas)-1] == "("){
                            array_splice($aberturas, (count($aberturas)-1),1);
                            break;
                        }
                        $breakFor = true;
                        break;
                }
                if ($breakFor === true) break;  
            }
        }
        
        return (count($aberturas) > 0 || $breakFor) ? 'NO' : 'YES'; 
    }


 ?>