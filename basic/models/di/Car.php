<?php
/**
 * User: Klaus
 * Date: 2017.08.09
 * Time: 23:24
 */

namespace app\models\di;

class Car
{
    private $driver = null;

    /**
     * Car constructor.
     */
    public function __construct(Driver $driver)
    {
        $this->driver = $driver;
    }

    public function run()
    {
        $this->driver->drive();
    }

}