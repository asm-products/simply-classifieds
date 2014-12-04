<?php namespace Stevebauman\Classifieds;

use Illuminate\Support\ServiceProvider;

class ClassifiedsServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;
        
        public function boot() {
            $this->package('stevebauman/classifieds');

            include __DIR__ .'/../../routes.php';
            include __DIR__ .'/../../filters.php';
            include __DIR__ .'/../../validators.php';
        }
        
	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
            
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
            return array('classifieds');
	}

}
