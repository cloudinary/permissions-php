# Cloudinary Account Permissions API PHP SDK

Accounts with Permissions API access can manage custom permission policies. These policies assign permissions for a principal, allowing the principal to perform a specific action on a designated resource within a particular scope (your account or a product environment). 

Refer to the [Permissions API guide](permissions_api_guide) for instructions on what to specify in the `policy_statement` to control Cloudinary activities, and to the Cedar schema, which defines the possible values for principals, actions, and resources.

The API uses **Basic Authentication** over HTTPS. Your **Provisioning Key** and **Provisioning Secret** are used for the authentication. These credentials (as well as your ACCOUNT_ID) are located in the [Cloudinary Console](https://console.cloudinary.com/pm) under **Settings > Account > Provisioning API Access**.

The Permissions API has dedicated SDKs for the following languages:

* JavaScript
* PHP
* Java


For more information, please visit [https://support.cloudinary.com](https://support.cloudinary.com).

## Installation & Usage

### Requirements

PHP 8.1 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "require": {
    "cloudinary/permissions": "*"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/permissions/vendor/autoload.php');
```


## Configuration

The API uses **Basic Authentication** over HTTPS.

Your Cloudinary **Account ID**, **Provisioning Key** and **Provisioning Secret** are used for the authentication.

These ID's are located in the Cloudinary Console under **Settings > Account > Provisioning API Access**,
or they can be obtained from the provisioning environment variable available on your Cloudinary Console [Dashboard](https://console.cloudinary.com/pm/developer-dashboard)

(in the form: `CLOUDINARY_ACCOUNT_URL=account://<PROVISIONING_KEY>:<PROVISIONING_SECRET>@<ACCOUNT_ID>`).

You can either pass configuration with each `$apiInstance` initialization:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure Cloudinary Account URL
$config = Cloudinary\Permissions\Configuration::getDefaultConfiguration()
              ->setCloudinaryAccountUrl('account://provisioning_key:provisioning_secret@account_id');

$apiInstance = new Cloudinary\Permissions\Api\CustomPoliciesApi(null, $config);
```

Or set the environment variable globally.

For example, to set a temporary environment variable:

* On Mac or Linux:

    ```
    export CLOUDINARY_ACCOUNT_URL=account://provisioning_key:provisioning_secret@account_id
    ```

* On Windows:

    ```
    set CLOUDINARY_ACCOUNT_URL=account://provisioning_key:provisioning_secret@account_id
    ```

And then you can simply initialize `$apiInstance` as follows:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Cloudinary\Permissions\Api\CustomPoliciesApi();
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Cloudinary\Permissions\Api\CustomPoliciesApi();

$scopeType = "&#39;scopeType_example&#39;"; // string | Specifies the level for retrieving policies, either at the account level or within product environments.
$scopeId = "&#39;scopeId_example&#39;"; // string | The ID of a specific product environment where the policy is applied. This parameter is only relevant if `scope_type` is \"prodenv\". Find your product environment IDs in the [Product Environments](https://console.cloudinary.com/settings/product-environments) page of the Console Settings. - <product_environment_id>
$enabled = true; // bool | Filter policies by enabled status (true/false).
$cursor = "&#39;cursor_example&#39;"; // string | A pagination cursor for fetching subsequent results.

try {
    $result = $apiInstance->getCustomPolicies($scopeType, $scopeId, $enabled, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomPoliciesApi->getCustomPolicies: ', $e->getMessage(), PHP_EOL;
}
```

## API Endpoints

All URIs are relative to https://api.cloudinary.com/v2/accounts/ACCOUNT_ID/permissions, except if the operation defines another base path.

| Class | Method | HTTP request | Description |
| ------------ | ------------- | ------------- | ------------- |
| *CustomPoliciesApi* | [**createCustomPolicy**](docs/Api/CustomPoliciesApi.md#createcustompolicy) | **POST** /policies/custom | Create custom policy |
| *CustomPoliciesApi* | [**deleteCustomPolicy**](docs/Api/CustomPoliciesApi.md#deletecustompolicy) | **DELETE** /policies/custom/{policy_id} | Delete custom policy |
| *CustomPoliciesApi* | [**getCustomPolicies**](docs/Api/CustomPoliciesApi.md#getcustompolicies) | **GET** /policies/custom | Get custom policies |
| *CustomPoliciesApi* | [**getCustomPolicy**](docs/Api/CustomPoliciesApi.md#getcustompolicy) | **GET** /policies/custom/{policy_id} | Get custom policy |
| *CustomPoliciesApi* | [**updateCustomPolicy**](docs/Api/CustomPoliciesApi.md#updatecustompolicy) | **PUT** /policies/custom/{policy_id} | Update custom policy |

## Models

- [CreateCustomPolicy](docs/Model/CreateCustomPolicy.md)
- [CustomPoliciesResponse](docs/Model/CustomPoliciesResponse.md)
- [CustomPolicy](docs/Model/CustomPolicy.md)
- [CustomPolicyResponse](docs/Model/CustomPolicyResponse.md)
- [CustomPolicyResponseData](docs/Model/CustomPolicyResponseData.md)
- [Error](docs/Model/Error.md)
- [ErrorResponse](docs/Model/ErrorResponse.md)
- [UpdateCustomPolicy](docs/Model/UpdateCustomPolicy.md)

## Authorization

### basicAuth

- **Type**: HTTP basic authentication

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

support@cloudinary.com

## About this package

This Cloudinary Account Permissions API PHP package is automatically generated.

- Package version: `1.0.0`
- API version: `1.0.4`
- Build package: `org.openapitools.codegen.languages.PhpNextgenClientCodegen`
