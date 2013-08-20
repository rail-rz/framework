<?php
/**
 * Application
 * User: R2
 * Date: 10.09.12
 * Time: 17:22
 * @property db $db
 * @property FetcherManager $fetchers
 */
class Application extends ComponentManager
{
    private  static $instance;

    /**
     * @return Application
     */

    public static function getInstance()
    {
        return self::$instance;
    }

    private function __clone(){}

    public static function init($config)
    {
        self::$instance=new Application($config);
    }

    public function __construct($config)
    {
        parent::__construct($config);
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
                $controller = new $controllerName($matches[1]);
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
        else
        {
            header("Location: /index.php?r=poll/index");
        }
    }
}