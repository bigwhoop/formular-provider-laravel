# Laravel Service Provider and Facade for [Formular](https://github.com/bigwhoop/formular)

## Service Provider

Add the following line to your `app.php`'s `providers` array.

    'bigwhoop\Formular\Provider\Laravel\ServiceProvider',

Currently the [Bootstrap 3 form](https://github.com/bigwhoop/formular-form-bootstrap3) is automatically loaded.
Further a CSRF element is added that uses the `Session::token()` method to get the current token.

## Facade

To enable a `Formular` facade just add the following to your `app.php`'s `aliases` array.

    'Formular' => 'bigwhoop\Formular\Provider\Laravel\Facade',

