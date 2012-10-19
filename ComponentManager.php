<?php
/**
 * ComponentManager
 * User: R2
 * Date: 21.09.12
 * Time: 21:58
 * To change this template use File | Settings | File Templates.
 *  @property AnswerFetcher $answer
 */
class ComponentManager
{
    private $components;
    public function __construct($config)
    {
        $this->config=$config;
    }

    public function __get($name)
    {
        if (!isset($this->components[$name]))
        {
            $component=$this->config[$name]['class'];
            $this->components[$name] = new $component();
        }
        else
        {
            throw new Exception('Не получилось создать объект в ComponentManager.php');
        }
        return $this->components[$name];
//                $component=$this->config[$name]["class"];
//        $component[]=new $component();
//        return$component;
    }
}