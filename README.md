# DataForSEO

The easiest way for using DataForSEO APIs in PHP

## Installation

This package can be installed via Composer:

```bash
composer require boolxy/dataforseo
```

## Usage

```php
use BoolXY\DataForSEO\DataForSEO;
use BoolXY\DataForSEO\Apis;
use BoolXY\DataForSEO\Api\KeywordsData\Requests\SearchVolumeForKeyword\LiveDataRequest;

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

$result = DataForSEO::create($base_uri, $user, $pass)
    ->setApi(Apis::KEYWORDS_DATA_API)
    ->setRequest(LiveDataRequest::create($data))
    ->get();
```

With reviewing the tests, you can learn more...

API documentation: [https://docs.dataforseo.com/v2/](https://docs.dataforseo.com/v2/)

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