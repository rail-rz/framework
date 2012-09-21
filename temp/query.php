<?php
/**
 * Created by JetBrains PhpStorm.
 * User: R2
 * Date: 23.08.12
 * Time: 21:21
 * To change this template use File | Settings | File Templates.
 */
db::init('localhost', 'root', '', 'poll');
var_dump( db::getInstance()->selectRow('SELECT * FROM test WHERE id = ?', array("1")));
var_dump(db::getInstance()->selectAll('SELECT * FROM test WHERE name LIKE ?',array('foo%')));