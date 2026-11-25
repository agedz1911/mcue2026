<p align="center">MCUE 2026</p>

## Frontend styles

The shared layout loads Tailwind CSS and daisyUI from their CDNs. Legacy pages also use
`public/assets/css/bootstrap-scoped.css`, generated from the local Bootstrap stylesheet
inside `@scope (.legacy-content)` so it does not override the shared navigation or home page.
Regenerate the scoped stylesheet when updating `bootstrap.min.css`.



## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
