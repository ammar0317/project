<?php

function getGpa($marks)
{
if ($marks >= 0 && $marks <=32){
    $gpa = 0;
}
else if ($marks >= 33 && $marks <=39){
    $gpa = 1;
}
else if ($marks >= 40 && $marks <=49){
    $gpa = 2;
}
else if ($marks >= 50 && $marks <=59){
    $gpa = 3;
}
else if ($marks >= 60 && $marks <=69){
    $gpa = 3.5;
}
elseif ($marks >= 70 && $marks <=79){
    $gpa = 4;
}
elseif ($marks >= 80 && $marks <=100){
    $gpa = 5;
}
else{
    $gpa = 'invalid';
}
return $gpa;

}

echo getGpa(73);
?>