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
    public function render($view,$args=array())
    {
        if(isset($args))
        {
            foreach($args as $key=>$value)
            {
                 ${$key}=$value;
                $view='views/'.${$key}.'/view.php';
            }
        }
        if(file_exists($view)==true)
            return $view;
        else
            throw new Exception('');
    }

}
