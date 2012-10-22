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
        if(isset($this->config[$name]['class']))
        {
            $component=$this->config[$name]['class'];
            //echo $component;
            if (!isset($this->components[$name]))
            {
                if(!is_null($this->config[$name]['__construct']))
                {
                    $class=new ReflectionClass($component);
                    $this->components[$name]=call_user_func_array(array($class,'newInstance'),
                                                                  array($this->config[$name]['__construct'][0],
                                                                        $this->config[$name]['__construct'][1],
                                                                        $this->config[$name]['__construct'][2],
                                                                        $this->config[$name]['__construct'][3]));
                }
                else
                {
                    $this->components[$name] = new $component();
                }
                return $this->components[$name];
            }
            elseif(isset($this->components[$name]))
            {
                return $this->components[$name];
            }
            else
            {
                throw new Exception('Не получилось создать объект в ComponentManager.php');
            }
        }
        else
        {
            throw new Exception('Не получилось создать объект в ComponentManager.php');
        }
    }
}