# Cloudinary\Permissions\CustomPoliciesApi

All URIs are relative to https://api.cloudinary.com/v2/accounts/ACCOUNT_ID/permissions, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCustomPolicy()**](CustomPoliciesApi.md#createCustomPolicy) | **POST** /policies/custom | Create custom policy |
| [**deleteCustomPolicy()**](CustomPoliciesApi.md#deleteCustomPolicy) | **DELETE** /policies/custom/{policy_id} | Delete custom policy |
| [**getCustomPolicies()**](CustomPoliciesApi.md#getCustomPolicies) | **GET** /policies/custom | Get custom policies |
| [**getCustomPolicy()**](CustomPoliciesApi.md#getCustomPolicy) | **GET** /policies/custom/{policy_id} | Get custom policy |
| [**updateCustomPolicy()**](CustomPoliciesApi.md#updateCustomPolicy) | **PUT** /policies/custom/{policy_id} | Update custom policy |


## `createCustomPolicy()`

```php
createCustomPolicy($createCustomPolicy): \Cloudinary\Permissions\Model\CustomPolicyResponse
```

Create custom policy

Create a new custom policy with a statement defined in Cedar. This policy specifies permissions for a principal, allowing a specific action on a designated resource, within a particular scope.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Cloudinary\Permissions\Api\CustomPoliciesApi();

$createCustomPolicy = new \Cloudinary\Permissions\Model\CreateCustomPolicy(); // \Cloudinary\Permissions\Model\CreateCustomPolicy | Policy details.

try {
    $result = $apiInstance->createCustomPolicy($createCustomPolicy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomPoliciesApi->createCustomPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **createCustomPolicy** | [**\Cloudinary\Permissions\Model\CreateCustomPolicy**](../Model/CreateCustomPolicy.md)| Policy details. | |

### Return type

[**\Cloudinary\Permissions\Model\CustomPolicyResponse**](../Model/CustomPolicyResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#)
[[Back to API list]](../../README.md#api-endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCustomPolicy()`

```php
deleteCustomPolicy($policyId)
```

Delete custom policy

Delete a specific custom policy.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Cloudinary\Permissions\Api\CustomPoliciesApi();

$policyId = "12jf789l12hwiuencl7aaqey"; // string | A unique identifier for the custom permission policy.

try {
    $apiInstance->deleteCustomPolicy($policyId);
} catch (Exception $e) {
    echo 'Exception when calling CustomPoliciesApi->deleteCustomPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **policyId** | **string**| A unique identifier for the custom permission policy. | |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#)
[[Back to API list]](../../README.md#api-endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCustomPolicies()`

```php
getCustomPolicies($scopeType, $scopeId, $enabled, $cursor): \Cloudinary\Permissions\Model\CustomPoliciesResponse
```

Get custom policies

Retrieve all custom policies defined for a specific scope. The scope can be at the account level or within a specific product environment.

### Example

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

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **scopeType** | **string**| Specifies the level for retrieving policies, either at the account level or within product environments. | [optional] |
| **scopeId** | **string**| The ID of a specific product environment where the policy is applied. This parameter is only relevant if &#x60;scope_type&#x60; is \&quot;prodenv\&quot;. Find your product environment IDs in the [Product Environments](https://console.cloudinary.com/settings/product-environments) page of the Console Settings. - &lt;product_environment_id&gt; | [optional] |
| **enabled** | **bool**| Filter policies by enabled status (true/false). | [optional] [default to true] |
| **cursor** | **string**| A pagination cursor for fetching subsequent results. | [optional] |

### Return type

[**\Cloudinary\Permissions\Model\CustomPoliciesResponse**](../Model/CustomPoliciesResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#)
[[Back to API list]](../../README.md#api-endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCustomPolicy()`

```php
getCustomPolicy($policyId): \Cloudinary\Permissions\Model\CustomPolicyResponse
```

Get custom policy

Get a specific custom policy.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Cloudinary\Permissions\Api\CustomPoliciesApi();

$policyId = "12jf789l12hwiuencl7aaqey"; // string | A unique identifier for the custom permission policy.

try {
    $result = $apiInstance->getCustomPolicy($policyId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomPoliciesApi->getCustomPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **policyId** | **string**| A unique identifier for the custom permission policy. | |

### Return type

[**\Cloudinary\Permissions\Model\CustomPolicyResponse**](../Model/CustomPolicyResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#)
[[Back to API list]](../../README.md#api-endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCustomPolicy()`

```php
updateCustomPolicy($policyId, $updateCustomPolicy): \Cloudinary\Permissions\Model\CustomPolicyResponse
```

Update custom policy

Update a specific custom policy by providing the entire policy entity in the request body. Ensure the new `policy_statement` includes modifications. Existing permissions will be replaced with the new data.  *Note:* Updating a policy with an identical `policy_statement` will trigger a 409 error.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Cloudinary\Permissions\Api\CustomPoliciesApi();

$policyId = "12jf789l12hwiuencl7aaqey"; // string | A unique identifier for the custom permission policy.
$updateCustomPolicy = new \Cloudinary\Permissions\Model\UpdateCustomPolicy(); // \Cloudinary\Permissions\Model\UpdateCustomPolicy | Policy details

try {
    $result = $apiInstance->updateCustomPolicy($policyId, $updateCustomPolicy);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomPoliciesApi->updateCustomPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **policyId** | **string**| A unique identifier for the custom permission policy. | |
| **updateCustomPolicy** | [**\Cloudinary\Permissions\Model\UpdateCustomPolicy**](../Model/UpdateCustomPolicy.md)| Policy details | |

### Return type

[**\Cloudinary\Permissions\Model\CustomPolicyResponse**](../Model/CustomPolicyResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#)
[[Back to API list]](../../README.md#api-endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
