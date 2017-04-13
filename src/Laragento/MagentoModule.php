<?php

namespace Laragento;


use Laragento\Exception\MethodNotFound;
use Smalot\V2\Magento\MagentoModuleAbstract;

class MagentoModule
{
    /**
     * @var MagentoModuleAbstract
     */
    private $magentoModule;

    private $make = false;
    /**
     * MagentoModule constructor.
     * @param MagentoModuleAbstract $magentoModule
     */
    public function __construct(MagentoModuleAbstract $magentoModule)
    {
        $this->magentoModule = $magentoModule;
    }

    /**
     * @param $name
     * @param $arguments
     * @return mixed
     * @throws MethodNotFound
     */
    public function __call($name, $arguments)
    {
        if(!method_exists($this->magentoModule, $name))
            throw new MethodNotFound();
        $method = call_user_func_array([ $this->magentoModule, $name ], $arguments);
        if($this->make)
            return $method;
        return $method->execute();
    }

    /**
     * @return MagentoModule
     */
    public function make()
    {
        $that = $this;
        $that->setMake(true);
        return $that;
    }

    /**
     * @param $make
     */
    public function setMake($make)
    {
        $this->make = $make;
    }
}