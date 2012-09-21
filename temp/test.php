<?php
/**
 * Created by JetBrains PhpStorm.
 * User: R2
 * Date: 14.08.12
 * Time: 23:46
 * To change this template use File | Settings | File Templates.
 */
$param="Privet_Kak_Dela ";
$count=0;
echo preg_replace ("/_/"," ",$param);
echo"<br>";
echo preg_replace ("/_/"," ",$param,1);
echo"<br>";
echo"<br>";

$string = "asd ? bcd ? dxza ?";
$pattern=array();
$replacement = array("one","two","three");
$count=substr_count($string, "?");
for($i=0;$i<$count;$i++)
{
    $pattern[]="/\?/";
}
var_dump($pattern);
var_dump($replacement );
echo"<br>";
echo preg_replace($pattern,$replacement , $string,1);

echo"<br>";
echo"<br>";
/*
$string = "asd ? bcd ? dxza ?";
$replacement = array("one","two","three");
$string = str_replace("?", implode(" ", $replacement), $string);
echo $string;
*/
//echo preg_replace("\?",array("one","two","three") , $string);
$string = "SELECT * FROM test WHERE id = ?";
$replacement = array();
//var_dump($replacement);echo"<br>";
if($replacement!=0)
{
    foreach($replacement as $val)
    {
        $string = preg_replace("/\?/", $val, $string,1);
    }
    echo$string;
}
    else
{

    echo$string;
}

?>