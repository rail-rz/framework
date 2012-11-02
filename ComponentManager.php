<?php
/**
 * ComponentManager
 * User: R2
 * Date: 21.09.12
 * Time: 21:58
 * @property db $db
 * @property FetcherManager $fetcher
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
        if(isset($this->config['components'][$name]['class']))
        {
            $component=$this->config['components'][$name]['class'];
            if (!isset($this->components[$name]))
            {
                if(isset($this->config['components'][$name]['__construct']))
                {
                    $class=new ReflectionClass($component);
                    $this->components[$name]=call_user_func_array(array($class,'newInstance'),
                                                                  $this->config['components'][$name]['__construct']);
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