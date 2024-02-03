<?php 

$percenatge = 73;

if($percenatge >= 80 && $percenatge <= 100)
{
    echo "You Got A+ Grade";
}elseif($percenatge >= 60 && $percenatge < 80)
{
    echo "You Got A Grade";
}elseif($percenatge >= 50 && $percenatge < 60)
{
    echo "You Got B Grade";
}elseif($percenatge >= 33 && $percenatge < 50)
{
    echo "You Got C Grade";
}elseif($percenatge < 33)
{
    echo "You Are Fail";
}else{
   echo "Please Enter the Valid Percentage";
}

