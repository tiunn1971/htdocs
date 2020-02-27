<?php

$var ="abc";

fun();

function fun(){
    global $var;//外面的var才傳的進來
    $var2="123";
    echo $var;

}