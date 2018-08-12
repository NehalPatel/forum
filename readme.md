
[![GitHub issues](https://img.shields.io/github/issues/NehalPatel/forum.svg)](https://github.com/NehalPatel/forum/issues)
[![GitHub license](https://img.shields.io/github/license/NehalPatel/forum.svg)](https://github.com/NehalPatel/forum/blob/master/LICENSE)


## Laravel Forum

Learning Laravel from Laracasts, and build a forum where any user can create account, create threads, and reply on any forum thread.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of any modern web application framework, making it a breeze to get started learning the framework.

If you're not in the mood to read, [Laracasts](https://laracasts.com) contains over 1100 video tutorials on a range of topics including Laravel, modern PHP, unit testing, JavaScript, and more. Boost the skill level of yourself and your entire team by digging into our comprehensive video library.

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

##Installation
1. clone the repository in your local machine
2. setup database
3. migrate database from following commands

	$ php artisan tinker

	$threads = factory('App\Thread',50)->create();

	$threads->each(function($thread){ factory('App\Reply',10)->create(['thread_id' => $thread->id]); });
