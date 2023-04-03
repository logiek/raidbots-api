# raidbots-api

[![Latest Stable Version](https://poser.pugx.org/logiek/raidbots-api/v/stable)](https://packagist.org/packages/logiek/raidbots-api) [![Total Downloads](https://poser.pugx.org/logiek/raidbots-api/downloads)](https://packagist.org/packages/logiek/raidbots-api) [![License](https://poser.pugx.org/logiek/raidbots-api/license)](https://packagist.org/packages/logiek/raidbots-api) [![PHP Version Require](http://poser.pugx.org/logiek/raidbots-api/require/php)](https://packagist.org/packages/logiek/raidbots-api)

Raidbots API wrapper which incorporates existing reports and static data into your project.

## Usage

```php
use Logiek\Raidbots\Client;

$client = new Client();

$report = $client->reports->get('oUPDjYTw26K7vr93m1vFFb');
$report = $client->reports->get('https://www.raidbots.com/simbot/report/oUPDjYTw26K7vr93m1vFFb', true);
$instances = $client->instances->get();
$talents = $client->talents->get('ptr');
```

## License
This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
