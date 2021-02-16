<?php
function rect_area($length = 5, $width = 6) 
{
    $area = $length * $width;
    echo "The area Of Rectangle = " . $area ;
}
rect_area(); 

  echo "\n";

function rect_perimeter($length = 5, $width = 6) 
{
    $perimeter = 2*($length * $width);
    echo "The perimeter Of Rectangle = " . $perimeter ;
}
rect_perimeter(); 

 

?>