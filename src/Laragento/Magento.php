<?php

namespace Laragento;

use Laragento\Exception\MethodNotFound;
use Smalot\V2\Magento\RemoteAdapter;

class Magento
{
    /**
     * Magento constructor.
     */
    public function __construct()
    {
        $this->methods = config('laragento.methods');
        $this->adapter = new RemoteAdapter(
            config('laragento.connection.path'),
            config('laragento.connection.user'),
            config('laragento.connection.key')
        );
    }

    /**
     * @param $name
     * @param $arguments
     * @return MagentoModule
     * @throws MethodNotFound
     */
    public function __call($name, $arguments)
    {
        $method = $this->methods[$name];
        if(empty($method))
            throw new MethodNotFound();
        return new MagentoModule(new $method($this->adapter));
    }
}