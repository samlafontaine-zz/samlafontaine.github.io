<?php 
 
$result= $_POST['search'];
$result= strtolower($result);
$result = str_replace(' ', '', $result);

header ('Location: /workanywhere/'.$result.".html");

echo "No results found for this search";
?> 
 
