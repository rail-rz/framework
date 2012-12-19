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
    public $layout;

    public function __construct($id)
    {
        $this->id=$id;
        $this->layout='main';
    }

    public function getLayout()
    {
        $layout = 'views/layout/'.$this->layout.".php";
        return $layout;
    }

    public function render($view,$data=null,$return=false)
    {
        $output=$this->renderPartial($view,$data,true);
        if(($layoutFile=$this->getLayout($this->layout))!==false)
        {
            $output=$this->renderFile($layoutFile,array('content'=>$output),true);

        }
//        return $output;
        if($return)
            return $output;
        else
            echo $output;
    }

    public function renderPartial($_viewFile_,$data=null,$return=false)
    {
        $_viewFile_="views/".$this->id."/".$_viewFile_.".php";
        $content=$this->renderFile($_viewFile_,$data,$return);
        return $content;
    }

    public function renderFile($_viewFile_,$_data_=null,$_return_=false)
    {
        if(is_array($_data_))
            extract($_data_,EXTR_PREFIX_SAME,'data');
        if($_return_)
        {
            ob_start();
            ob_implicit_flush(false);
            require($_viewFile_);
            return ob_get_clean();

        }
        else
            require($_viewFile_);
    }
}
