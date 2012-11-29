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

    public function render($_view_,$_data_=null)
    {
        if(is_array($_data_))
            extract($_data_,EXTR_PREFIX_SAME,'data');
        $_viewFile_="views/".$this->id."/".$_view_.".php";
        if(file_exists($_viewFile_))
            require ($_viewFile_);
        else
            throw new Exception('no require File');
    }
}
