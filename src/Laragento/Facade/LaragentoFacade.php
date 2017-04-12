<?php namespace Laragento\Facade;

use Illuminate\Support\Facades\Facade as BaseFacade;

class LaragentoFacade extends BaseFacade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'magento'; }

}
