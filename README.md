# Laravel-lang

In this repository, you can find the lang files for the framework PHP, [Laravel 4&5](http://www.laravel.com).

## Install

#### Via Composer
* For Laravel 5.8-6.0 : run `composer require caouecs/laravel-lang:~4.0` in your project folder
* For Laravel 5.1-5.7 : run `composer require caouecs/laravel-lang:~3.0` in your project folder
* For Laravel 5 : run `composer require caouecs/laravel-lang:~2.0` in your project folder
* For Laravel 4 : run `composer require caouecs/laravel-lang:~1.0` in your project folder
* Files of languages are in "vendor/caouecs/laravel-lang" directory
* Copy the folders of languages that you want, in the *resources/lang* folder of your Laravel application (*app/lang* in Laravel 4).

#### Via GitHub

* Clone the [GitHub repository](https://github.com/caouecs/laravel-lang/) : *git clone https://github.com/caouecs/Laravel-lang.git*
* Or download the [zip file](https://github.com/caouecs/laravel-lang/archive/master.zip)
* Choose the branch:
    * `laravel4` for Laravel 4 project
    * `master` for Laravel 5, 6 projects
* Copy the folders of languages that you want, in *resources/lang* folder of your Laravel application (*app/lang* in Laravel 4).

#### Via SVN

Run this in your project directory:

```sh
# Laravel 5:
svn export https://github.com/caouecs/Laravel-lang/trunk/src/[language-code] resources/lang/[language-code]

# Laravel 4:
svn export https://github.com/caouecs/Laravel-lang/branches/laravel4/[language-code] app/lang/[language-code]
```

Replace `[language-code]` by any of the languages listed [here](src).

## Usage [Laravel only]

In the file *config/app.php*, change the value of *locale* by the short name of your language (*app/config/app.php* in Laravel 4).

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email fabiocabralsantos@gmail.com instead of using the issue tracker.

## Credits

- [Fabio Cabral](https://github.com/fc9)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).
