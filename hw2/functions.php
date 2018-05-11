<?php
function filterOddNumbers($numbers){
    return array_filter($numbers, function ($num){
        return $num % 2 != 0;
    });
}
function printOddNumbers($numbers){
    foreach (filterOddNumbers($numbers) as $num){
        echo $num.'<br>';
    }
}

function printUntilVowel($friendList){
    global $vowels;
    foreach ($friendList as $friend){
        $firstChar = mb_substr($friend['name'], 0, 1);
        if(!in_array($firstChar, $vowels)){
            echo $friend['name'].'<br>';
        } else {
            break;
        }
    }
}
?>
