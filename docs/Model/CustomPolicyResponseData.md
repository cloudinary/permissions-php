# # CustomPolicyResponseData

## Properties

| Name        | Type          | Description   | Notes         |
|------------ | ------------- | ------------- | ------------- |
| **id** | **string** | The unique identifier of the policy. | |
| **policyStatement** | **string** | A Cedar policy that permits or forbids a certain action on a certain element to a principal (API key). | |
| **description** | **string** | A short description of the policy. | [optional] |
| **scopeType** | **string** | Specifies where the policy is applied, either at the account level or within product environments.  **Important:** Currently, only &#x60;prodenv&#x60; is available. | |
| **scopeId** | **string** | Returned if the scope type is product environment. Can be \&quot;all\&quot; to represent all product environments or an ID of a specific product environment. | [optional] |
| **name** | **string** | The name of the policy | |
| **enabled** | **bool** | Whether the policy is enabled or not | |
| **createdAt** | **int** | Creation time of the policy in epoch time | |
| **updatedAt** | **int** | Last update time of the policy in epoch time | |

[[Back to Model list]](../../README.md#models)
[[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
