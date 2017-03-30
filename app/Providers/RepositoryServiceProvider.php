<?php
namespace App\Providers;
 
use Illuminate\Support\ServiceProvider;
 
class RepositoryServiceProvider extends ServiceProvider {
	
	public function register()
	{
		$this->app->bind('App\Interfaces\ApplicantInterface', 'App\Repositories\ApplicantRepository');
		$this->app->bind('App\Interfaces\CourseInterface', 'App\Repositories\CourseRepository');
		$this->app->bind('App\Interfaces\TransactionInterface', 'App\Repositories\TransactionRepository');
	}
}