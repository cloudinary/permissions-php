# # UpdateCustomPolicy

## Properties

| Name        | Type          | Description   | Notes         |
|------------ | ------------- | ------------- | ------------- |
| **policyStatement** | **string** | A Cedar statement that permits or forbids a principal to perform an action on a resource. Refer to the [Permissions API guide](permissions_api_guide) for more information. | |
| **description** | **string** | A short description of the policy. | [optional] |
| **scopeType** | **string** | Specifies where the policy is applied, either at the account level or within product environments.  **Important:** Currently, only &#x60;prodenv&#x60; is available. | |
| **scopeId** | **string** | The ID of a specific product environment, or \&quot;all\&quot; product environments, where the policy is applied. Required and only relevant if scope_type is \&quot;prodenv\&quot;. Find your product environment IDs in the [Product Environments](https://console.cloudinary.com/settings/product-environments) page of the Console Settings.  **Important:** The Permissions API is enabled per product environment. Make sure the ID you provide belongs a product environment that has the Permissions API enabled.  - &lt;product_environment_id&gt;  - all  *Note:* The \&quot;all\&quot; specification is relevant only when creating or updating a policy. | [optional] |
| **name** | **string** | The name assigned to the policy. | |
| **enabled** | **bool** | Indicates whether the policy is currently active. Can be \&quot;true\&quot; (enabled) or \&quot;false\&quot; (disabled). | [default to true] |

[[Back to Model list]](../../README.md#models)
[[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
