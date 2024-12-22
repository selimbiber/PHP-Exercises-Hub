<?php

class Solution {

/**
* @param Integer $rows
*/

    function triangle($rows) {
        $result = '';
        $counter = 1;

        if ($rows < 1) return;

        while ($counter <= $rows) {
            for ($i = 0; $i < $counter; $i++) {
                $result .= 'O';
            }
            $result .= "\n";
            $counter++;
        }

        return $result;
    }
}

$solution = new Solution();
echo $solution->triangle(15);

/*
O
OO
OOO        
OOOO       
OOOOO      
OOOOOO     
OOOOOOO    
OOOOOOOO   
OOOOOOOOO  
OOOOOOOOOO 
OOOOOOOOOOO
OOOOOOOOOOOO
OOOOOOOOOOOOO
OOOOOOOOOOOOOO
OOOOOOOOOOOOOOO
*/