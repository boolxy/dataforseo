# DataForSEO

The easiest way for using DataForSEO APIs in PHP

## Installation

This package can be installed via Composer:

```bash
composer require boolxy/dataforseo
```

## Usage

```php
use BoolXY\DataForSEO\Client;
use BoolXY\DataForSEO\DataForSEO;
use BoolXY\DataForSEO\Requests\KeywordsData\SearchVolumeForKeyword\LiveDataRequest;

$data = [
    [
        "language" => "en",
        "loc_name_canonical" => "United States",
        "key" => "average page rpm adsense",
    ],
    [
        "language" => "en",
        "loc_id" => 2840,
        "key" => "adsense blank ads how long",
    ],
    [
        "language" => "en",
        "loc_name_canonical" => "United States",
        "key" => "leads and prospects",
    ],
];

$client = new Client($base_uri, $user, $pass);

$result = DataForSEO::create($client)
    ->setRequest(LiveDataRequest::create($data))
    ->get();
```

With reviewing the tests, you can learn more...

API documentation: [https://docs.dataforseo.com/](https://docs.dataforseo.com/)

## Testing

Copy phpunit.xml.dist as phpunit.xml and update it. After then you can start testing.

```bash
vendor/bin/phpunit
```

or

```bash
composer test
```

## Credits

- [Sezai Ozarslan](https://github.com/sezaiozarslan)
- [All Contributors](https://github.com/boolxy/dateforseo/graphs/contributors)

## License

The MIT License (MIT).
Please see [License File](https://github.com/boolxy/dataforseo/blob/master/LICENSE.md) for more information.
