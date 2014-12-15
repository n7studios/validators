Carve Validators
==================

A set of UK-centric validation rules (and maybe more) for Laravel 4.

## Installation

1. Add the following to your composer.json and run `composer update`

    ```json
    {
        "require": {
            "carve/validators": "dev-master"
        }
    }
    ```

2. Add `Carve\Validators\ValidatorsServiceProvider` to your config/app.php

## Available Rules

#### Postcode
```php
'address_postcode' => 'required|postcode'
```

#### Bank Account
```php
'bank_account_number' => 'required|bankaccount'
```

#### Sort Code
```php
'bank_sort_code' => 'required|sortcode'
```

#### National Insurance Number
```php
'ni'=>'required|nationalinsurance'
```