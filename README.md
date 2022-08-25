Criptogrecko - Getting Started

## Keep in mind installed:
- PHP "^7.3|^8.0"
- Composer 2
- Npm 6.14.12 or better
- Node v14.16.1 or better
- Mysql Workbench 8.0 CE or equivalent

## To install run:

composer install

## Copy the .env example and rename it to just .env

## Set .env the name and password of the created database

DB_DATABASE=put_here_database_created_name
DB_USERNAME=put_here_username_workbench_or_equivalent

## Generate the key for the env in your punctuated terminal in the project

php artisan key:generate

## Database

php artisan migrate

## Access

Send POST to /register

'name' max:150 characters,
'email' max:90 characters,
'password' min:8 characters,
'password_confirm' min:8 characters

And store Bearer Token to access "/coin_name" route
Example: /bitcoin

will return coin name and value in usd

Please, to contribute BUGS fixes send Pull Request or email to sergiobentesadm@gmail.com

## LARAVEL

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
