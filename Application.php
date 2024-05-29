<?php
class Application
{
    protected $controller = "Home" ;
    protected $action = "displayIntroduction";
    protected $params = [];

    function __construct()
    {
        // Xử lý controller
        $arr = $this -> urlProcess();
        $n = count($arr);

        if (file_exists("./MVC/controllers/" . $arr[$n-2] . " .php")) {
            $this -> controller = $arr[$n-2];
            unset($arr[$n-2]);
        }
        require_once "./MVC/controllers/" . $this -> controller . ".php";
        $this -> controller = new $this -> controller;

        //Xử lý Actions
        if (isset($arr[$n-1]))
        {
            if(method_exists($this -> controller, $arr[$n-1]))
            {
                $this -> action= $arr[$n-1];
            }
            unset($arr[$n-1]);
        }

        //Xử lý params
        $this -> params = $arr ? array_values($arr) : [];
        call_user_func_array([new $this -> controller, $this -> action], $this -> params);        
    }

    function urlProcess()
    {
        if (isset($_SERVER["REQUEST_URI"])) {
            echo $_SERVER["REQUEST_URI"], "<br>"; // để test
            return explode("/", filter_var(trim($_SERVER["REQUEST_URI"], "/")));
        }
    }
}
?>