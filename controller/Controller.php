<?php
/**
 * Controller
 * User: R2
 * Date: 21.11.12
 * Time: 16:22
 *
 */
class Controller
{

    private $id;

    public function __construct($id)
    {
        $this->id=$id;
    }

    public function render($view,$args=null,$return=false)
    {
        if(is_array($args))
            extract($args,EXTR_PREFIX_SAME,'data');
        $resultRoot="views/".$this->id."/".$view.".php";
        if(file_exists($resultRoot))
            require ($resultRoot);
        else
            throw new Exception('no require File');
    }
}
