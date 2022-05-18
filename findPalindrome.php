<?php
palimdromeStrCount('abcdefAnnaRacecarMom');

function palimdromeStrCount($strr) { 
    $data = strtolower(str_replace(' ', '', str_replace(',', '', $strr)));
    $count = 1;
    $palindromes = [];
    $arr = [];
    for ($i = 0;$i < strlen($data);$i++) {
        for ($j = 3;$j <= (strlen($data) - $i);$j++) {
            $word = substr($data, $i, $j);
            $reverse_word = strrev($word);
            if ($word == $reverse_word) {
            	array_push($palindromes,$word);
            }
        }
    }

    for($k=0;$k<count($palindromes);$k++) {
       $ex = strlen($palindromes[$k]);
    	array_push($arr,$ex);

    }  

    $arr = array_unique($arr);
    rsort($arr);
    
	if(!empty($arr) && count($arr) >=2) {
		$product = $arr[0]*$arr[1];
	} else {
		$product = 0;
	}
    
    echo $product; 
}
