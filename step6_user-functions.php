<?php declare(strict_types=1);//strict with data type
function calculateArea(int $height, int $width){

if( is_numeric($height)  && is_numeric($width)){
    echo "the area is ".($height * $width);
}

}
calculateArea(5,5);
calculateArea(5,3);
?>