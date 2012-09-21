<?php
/**
 * Коннект к БД
 * User: R2
 * Date: 24.07.12
 * Time: 21:40
 * To change this template use File | Settings | File Templates.
 */
$db=@mysql_connect("localhost","root","") or
    die ("Error connect to database:".mysql_error());
@mysql_select_db("wcphp",$db) or die("Couldn`t select database.");
?>