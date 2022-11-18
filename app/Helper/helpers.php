<?php

function sohan_custom_string_charecter_or_word_count($source, $subject)
{
    //todo - here first checking subject length is bellow 2 than avobe 1 code
    $count = 0;
    if(strlen($subject) < 2){
        for ($i = 0; $i <strlen($source); $i++){
            if($source[$i] == $subject){
                $count += 1;
            }
        }
    }else{
        $count = substr_count($source,$subject);
    }

    return $count;
}
