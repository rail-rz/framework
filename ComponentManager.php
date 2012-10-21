<?php
/**
 * ComponentManager
 * User: R2
 * Date: 21.09.12
 * Time: 21:58
 *
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
        $component=$this->config[$name]['class'];
        if (!isset($this->components[$name]))
        {
                        $this->components[$name] = new $component();
            return $this->components[$name];
        }
        elseif(isset($this->components[$name]))
        {
            return $component;
        }
        else
        {
            throw new Exception('Не получилось создать объект в ComponentManager.php');
        }

//      $component=$this->config[$name]["class"];
//      $component[]=new $component();
//      return$component;
    }
}