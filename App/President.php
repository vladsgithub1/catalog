<?php

namespace App;

/**
 * Class President (pattern Singleton)
 * @package App
 */
class President
{

    /**
     * @var null | President
     */
    private static $instance = null;

    /**
     * @var int
     */
    private $speechNumber = 0;

    /**
     * @return President
     */
    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function speech()
    {
        return 'promise the moon part. ' . ++$this->speechNumber . PHP_EOL;
    }

    private function __clone()
    {
    }

    private function __construct()
    {
    }

    private function __wakeup()
    {
    }
}
