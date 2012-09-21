<?php
//db::init('localhost', 'root', '123', 'poll');
$name=array(
    'a' => array(
        'b' => 1
    )
);
echo$name["a"]["b"];

// ответ, у которого id = 1
//$answer = db::getInstance()->selectRow('SELECT * FROM answer WHERE id = ?', array(0));
/**
 * array(
 *     'id' => '1',
 *     'answer' => 'foo 1',
 * )
 */
//print_r($answer);
// ответы, которые начинаются с "foo"
//$answers = db::getInstance()->selectAll('SELECT * FROM answer WHERE answer LIKE ?', array('foo%'));
/**
 * array(
 *     array(
 *         'id' => '1',
 *         'answer' => 'foo 1',
 *     ),
 *     array(
 *         'id' => '5',
 *         'answer' => 'foo 5',
 *     ),
 * )
 */
//print_r($answers);
