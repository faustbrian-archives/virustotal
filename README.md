# VirusTotal PHP Client

[![Build Status](https://img.shields.io/travis/faustbrian/VirusTotal-PHP-Client/master.svg?style=flat-square)](https://travis-ci.org/faustbrian/VirusTotal-PHP-Client)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/faustbrian/virustotal-php-client.svg?style=flat-square)]()
[![Latest Version](https://img.shields.io/github/release/faustbrian/VirusTotal-PHP-Client.svg?style=flat-square)](https://github.com/faustbrian/VirusTotal-PHP-Client/releases)
[![License](https://img.shields.io/packagist/l/faustbrian/VirusTotal-PHP-Client.svg?style=flat-square)](https://packagist.org/packages/faustbrian/VirusTotal-PHP-Client)

## Installation

Require this package, with [Composer](https://getcomposer.org/), in the root directory of your project.

```bash
$ composer require faustbrian/virustotal-php-client
```

## Usage

```php
$client = new BrianFaust\VirusTotal\Client();
$client->setConfig(['apiKey' => 'YOUR_API_KEY']);

$response = $client->api('File')->scan('infected.rar');

dump($response);
```

## Testing

``` bash
$ phpunit
```

## Security

If you discover a security vulnerability within this package, please send an e-mail to hello@brianfaust.me. All security vulnerabilities will be promptly addressed.

## Credits

- [Brian Faust](https://github.com/faustbrian)
- [All Contributors](../../contributors)

## License

[MIT](LICENSE) © [Brian Faust](https://brianfaust.me)
