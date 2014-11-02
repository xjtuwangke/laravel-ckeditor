<?php namespace Xjtuwangke\LaravelCkeditor;

use Illuminate\Support\ServiceProvider;

class LaravelCkeditorServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('xjtuwangke/laravel-ckeditor');

		\Route::get( 'finder' , [ 'as' => 'finder' , 'uses' => 'Xjtuwangke\LaravelCkeditor\Controller\CKFinderController@finder' ] );
		\Route::get( 'finder/ckfinder.html' , [ 'as' => 'finder.html' , 'uses' => 'Xjtuwangke\LaravelCkeditor\Controller\CKFinderController@finder_html' ] );
		\Route::get( '/finder/connector' , [ 'as' => 'finder.connector' , 'uses' => 'Xjtuwangke\LaravelCkeditor\Controller\CKFinderController@connector' ] );
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}
