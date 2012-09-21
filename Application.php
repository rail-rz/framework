<?php
/**
 * Application
 * User: R2
 * Date: 10.09.12
 * Time: 17:22
 * To change this template use File | Settings | File Templates.
 */
require_once("db.php");
class Application
{
    private $config;
    private $db;
    private  static $instance;

    public static function getInstance()
    {
        return self::$instance;
    }

    private function __clone(){}

    public static function init($config)
    {
        self::$instance=new Application($config);
    }

    private function __construct($config)
    {
        $this->config=$config;
    }

    public function getDb()
    {
       if(is_null($this->db))
            $this->db=new db($this->config["db"]["host"],$this->config["db"]["user"],$this->config["db"]["password"],$this->config["db"]["base"]);
       return $this->db;
    }

    public function run()
    {
        $dir="controller/";
        if(isset($_GET['r']))
        {
            $var=$_GET['r'];
            preg_match('/(?P<name>\w+)\/(?P<actionName>\w+)/',$var, $matches);
            $controllerName=ucfirst($matches[1])."Controller";
            $controllerPath=$dir.$controllerName.".php";
            if(file_exists($controllerPath))
            {
                require_once($controllerPath);
                $controller = new $controllerName();
                $action="action".ucfirst($matches[2]);
                if(method_exists($controllerName,$action))
                {
                    $controller->$action();
                }
                else
                {
                    require_once($dir."ErrorController.php");
                    $controller = new ErrorController();
                    $controller->actionIndex();
                }
            }
            else
            {
                require_once($dir."ErrorController.php");
                $controller = new ErrorController();
                $controller->actionIndex();
            }
        }
    }
}