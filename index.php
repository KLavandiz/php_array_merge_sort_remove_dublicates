<?php

function array_merge_sort_and_remove_dublicates(array $arrayOne, array $arrayTwo){

    $loopCount = (count($arrayOne)>=count($arrayTwo)) ? count($arrayOne) : count($arrayTwo);

    $walkArray = [];

    $resultArray = [];

    $biggest = 0;


    for($i=0;$i<$loopCount;$i++){

        $firstValue = isset($arrayOne[$i])?$arrayOne[$i]:null;

        $secondValue = isset($arrayTwo[$i])?$arrayTwo[$i]:null;

        $walkArray[$firstValue]=$firstValue;

        $walkArray[$secondValue]=$secondValue;


        $biggest = ($firstValue)>$biggest?$firstValue:$biggest;

        $biggest = ($secondValue)>$biggest?$secondValue:$biggest;

    }


    $j=0;

    for($i=0;$i<=$biggest;$i++){

        if(isset($walkArray[$i])){

            $resultArray[$j]=$walkArray[$i];

            $j++;
        }
    }





    return $resultArray;
}



$arrayOne = [1,56,6,3,4,5,233,55,87,566363];

$arrayTwo = [4,4,9,14,7,8,5];

echo"<pre>";

print_r(array_merge_sort_and_remove_dublicates($arrayOne,$arrayTwo));

echo"</pre>";