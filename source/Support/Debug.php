<?php

namespace Source\Support;

use DateTimeZone;
use Exception;
use Monolog\Logger;
use Whoops\Handler\PrettyPageHandler;
use Whoops\Run;

/**
 * @author Brendo O 0 Santos <brendo.dev@outlook.com>
 * @package Source\Support
 */
class Debug extends Logger 
{
    /** @var Run */
    protected $whoops;

    public function __construct()
    {
        $this->whoops = new Run();
    }

    public function Logger(string $name = null, array $handlers = [], array $processors = [], ?DateTimeZone $timezone = null)
    {
        parent::__construct($name,$handlers,$processors,$timezone);
    }

    public function display()
    {
        $this->whoops->pushHandler(new PrettyPageHandler);
        $this->whoops->register();  
        try {
            return;
        }catch (Exception $e) {
            echo $e->getMessage();
        }
    }

}