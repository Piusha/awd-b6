## Laravel Repository Pattern


Repository pattern is use for separate business logics based on the domain logics


Configurations

1. Create Directory named Repository under app folder
2. Create a Directory for each Domains
3. Create Service Provider under Service provider directory

	php artisan make:provider RepositoryServiceProvider

4. Add Service provider to the provider array in app.php. This file is in config folder.

	[
		....
		App\Providers\RepositoryServiceProvider::class,
		....
	]
	

5. Do composer auto load

	$ composer auto-load