<?php

namespace Source\Support;

/**
 * @author Brendo O 0 Santos <brendo.dev@outlook.com>
 * @package Source\Support
 */
class Debug
{
    public function render()
    {
        ini_set('display_errors', '1');
        ini_set('display_startup_errors', '1');
        error_reporting(E_ALL);
        
        $whoops = new \Whoops\Run;
        $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
        $whoops->register();
        
        try {
        
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}