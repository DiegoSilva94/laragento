<?php namespace Laragento\ServiceProvider;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use Laragento\Magento;

class LaragentoServiceProvider extends BaseServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = true;

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		 
		 $this->app->singleton('magento', function($app) {
		 	return new Magento();
		 });            
	}

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->publishes([
        	__DIR__ . '/../../resources/config/laragento.php' => config_path('laragento.php')
		]);
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('magento');
	}

}
