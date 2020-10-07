<?php

function amarhead ($head_txt,$tag,$align,$color)
{
    switch($color){
        case 'lal';
        $rong = 'red';
        break;
        case  'soboj';
        $rong = 'green';
        break;
        case  'nil';
        $rong = 'blue';
        break;
        case 'golapi';
        $rong = 'red';
        break;
        case 'komola';
        $rong = 'orange';
        default:
        $rong = 'black';
    break;
    
}
    return "<$tag style = \"text-align:$align; color:$rong;\">". $head_txt."</$tag>";
    

}



 echo amarhead('We are Family','h1','center','lal');


?>