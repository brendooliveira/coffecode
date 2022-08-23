<?php

namespace Source\Support;

use DateTimeZone;
use Monolog\Logger;
use Whoops\Run;

/**
 * @author Brendo O 0 Santos <brendo.dev@outlook.com>
 * @package Source\Support
 */
class Debug extends Logger
{
    /** @var Run */
    protected $whoops;

    public function __construct(string $name = null, array $handlers = [], array $processors = [], ?DateTimeZone $timezone = null)
    {
        parent::__construct($name,$handlers,$processors,$timezone);
    }

    public function display()
    {
        ini_set('display_errors', '1');
        ini_set('display_startup_errors', '1');
        error_reporting(E_ALL);

        $this->whoops = new Run();

        $this->whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
        $this->whoops->register();  
        try {
        
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

}