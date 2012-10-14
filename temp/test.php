<?php
/**
 * Created by JetBrains PhpStorm.
 * User: R2
 * Date: 14.08.12
 * Time: 23:46
 * To change this template use File | Settings | File Templates.
 */
$config = array('answer' => array('class' => 'AnswerFetcher'));
$key="answer";
//$config=new $config["answer"]["class"]();
//$obj=ucfirst($key)."Fetcher";
//$config["answer"]["class"]= new $obj();
//$obj=new $config[$key]["class"]();
//foreach($config as $key=>$vars)
//{
//    echo$key;
//}

//echo $config["answer"];
//echo $config["answer"]["class"];

//Регулярные выражения(проба пера)
//$param="Privet_Kak_Dela ";
//$count=0;
//echo preg_replace ("/_/"," ",$param);
//echo"<br>";
//echo preg_replace ("/_/"," ",$param,1);
//echo"<br>";
//echo"<br>";
//
//$string = "asd ? bcd ? dxza ?";
//$pattern=array();
//$replacement = array("one","two","three");
//$count=substr_count($string, "?");
//for($i=0;$i<$count;$i++)
//{
//    $pattern[]="/\?/";
//}
//var_dump($pattern);
//var_dump($replacement );
//echo"<br>";
//echo preg_replace($pattern,$replacement , $string,1);
//
//echo"<br>";
//echo"<br>";
///*
//$string = "asd ? bcd ? dxza ?";
//$replacement = array("one","two","three");
//$string = str_replace("?", implode(" ", $replacement), $string);
//echo $string;
//*/
////echo preg_replace("\?",array("one","two","three") , $string);
//$string = "SELECT * FROM test WHФERE id = ?";
//$replacement = array();
////var_dump($replacement);echo"<br>";
//if($replacement!=0)
//{
//    foreach($replacement as $val)
//    {
//        $string = preg_replace("/\?/", $val, $string,1);
//    }
//    echo$string;
//}
//    else
//{
//
//    echo$string;
//}

?>