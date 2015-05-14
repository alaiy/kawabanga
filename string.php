<?php 
header('Content-Type: text/html; charset=utf-8');
mb_internal_encoding('utf-8');



$simple_string = "Простаяяя строка";
$simple_string1= "Простаяяя СТРОКА";
$simple_array_string =  array ("One", "Второй");
$simple_string_en = "Hello man";
$simple_array_string_en =  array ("Zero", "first");

/*
 * strlen
 */
//echo strlen($simple_string)."<br>";
//echo mb_strlen($simple_array_string[count($simple_array_string)-1])."<br>";
//echo strlen($simple_array_string[0]);


/*
 * strpos
 */
//echo strpos($simple_string, 'ст',10);
//$newstring = 'abcdef abcdef';
//echo strpos($newstring, 'a'); // $pos = 7, не 0


/*
 * substr
 */
//echo substr($simple_string,0,6);
//echo substr($simple_array_string_en[0],2,1);


/*
 * strcmp
 */
//echo strcmp($simple_string1,$simple_string);


/*
 * str_replace
 */
//echo  str_replace("\n","<br>\n","");


/*
 * strip_tags 
 */
//$stripped = strip_tags ($str); 
//$stripped = strip_tags($str, "<head><title>");


/*
 * trim
 */
//$trim($simple_array_string);


/*
 * 
 */
echo strtolower($simple_string_en);
?>