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
     * @throws MethodNotFound
     */
    public function __call($name, $arguments)
    {
        if(!method_exists($this->magentoModule,$name))
            throw new MethodNotFound();
        if($this->make)
            return $this->magentoModule->{$name}($arguments);
        return $this->magentoModule->{$name}($arguments)->execute();
    }

    public function make()
    {
        $that = $this;
        $that->setMake(true);
        return $that;
    }
    public function setMake($make)
    {
        $this->make = $make;
    }
}