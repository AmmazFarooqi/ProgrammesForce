<?php
  
// PHP using 2D  associative array dated 6-12-22

$marks = array(

    0 => array(
        "PF" => 95,
        "WEB" => 60,
        "ENG" => 46,
    ),   
   
    1 => array(
        "PF" => 95,
        "WEB" => 85,
        "ENG" => 90,
    ),
    
    2=> array(
        "PF" => 40,
        "WEB" => 55,
        "ENG" => 64,
    ),
);
// For Array PUSH
echo "Array Push";
array_push($marks, 
 array( 
 "PF" => 95,
 "WEB" => 60,
 "ENG" => 46,)
 );
echo "<pre>";
print_r($marks);
echo "</pre>";


// For Array Unshift
echo "Array Unshift";
 array_unshift($marks, 
 array(
     "PF" => 40,
     "WEB" => 55,
    "ENG" => 64,)
);

echo "<pre>";
print_r($marks);
echo "</pre>";


// For  Array Shift

echo "Array Shift";
array_shift($marks);
echo "<pre>";
print_r($marks);
echo "</pre>";


// For Array POP
echo "Array Pop";
array_pop($marks); 
echo "<pre>";
print_r($marks);
echo "</pre>";

//For Array COUNT

echo "Array Count";
echo count($marks);
echo "<pre>";
print_r($marks);
echo "</pre>";



echo "<pre>";
echo "Display Marks: <br>";

print_r($marks);
echo"<pre>";

?>
