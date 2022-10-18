<?php
// echo '<pre>';
// print_r($_GET);
// echo '</pre>';
function calc (int|float $x ,int|float $y ,string $op) :int|float
{
    switch($op)
    {
        case 'add': 
            return $x + $y;
        case 'sub': 
            return $x - $y;
        case 'mul': 
            return $x * $y;
        case 'div': 
            return $x / $y;
    }
}
if(isset($_GET['submit']))
{
    $x =$_GET['x'];
    $y =$_GET['y'];
    $op =$_GET['op'];

    //calculation
    $result =calc($x,$y,$op);
    header("location:calculate.php?result=$result");
  
    // echo $result;
}
else
{
    header("location:calculate.php");
}