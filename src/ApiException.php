<?php
/**
 * ApiException
 * PHP version 8.1
 *
 * @package  Cloudinary\Permissions
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Cloudinary Account Permissions API
 *
 * Accounts with Permissions API access can manage custom permission policies. These policies assign permissions for a principal, allowing the principal to perform a specific action on a designated resource within a particular scope (your account or a product environment).   Refer to the [Permissions API guide](permissions_api_guide) for instructions on what to specify in the `policy_statement` to control Cloudinary activities, and to the Cedar schema, which defines the possible values for principals, actions, and resources.  The API uses **Basic Authentication** over HTTPS. Your **Provisioning Key** and **Provisioning Secret** are used for the authentication. These credentials (as well as your ACCOUNT_ID) are located in the [Cloudinary Console](https://console.cloudinary.com/pm) under **Settings > Account > Provisioning API Access**.  The Permissions API has dedicated SDKs for the following languages:  * JavaScript * PHP * Java
 *
 * The version of the OpenAPI document: 1.0.4
 * Contact: support@cloudinary.com
 * @generated Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.2.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Cloudinary\Permissions;

use Exception;
use stdClass;

/**
 * ApiException Class Doc Comment
 *
 * @package  Cloudinary\Permissions
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ApiException extends Exception
{
    /**
     * The HTTP body of the server response either as Json or string.
     *
     * @var stdClass|string|null
     */
    protected stdClass|string|null $responseBody;

    /**
     * The HTTP header of the server response.
     *
     * @var string[]|null
     */
    protected ?array $responseHeaders;

    /**
     * The deserialized response object
     *
     * @var mixed
     */
    protected mixed $responseObject = null;

    /**
     * Constructor
     *
     * @param string                $message         Error message
     * @param int                   $code            HTTP status code
     * @param string[]|null         $responseHeaders HTTP response header
     * @param mixed $responseBody    HTTP decoded body of the server response either as stdClass or string
     */
    public function __construct(string $message = "", int $code = 0, ?array $responseHeaders = [], mixed $responseBody = null)
    {
        parent::__construct($message, $code);
        $this->responseHeaders = $responseHeaders;
        $this->responseBody = $responseBody;
    }

    /**
     * Gets the HTTP response header
     *
     * @return string[]|null HTTP response header
     */
    public function getResponseHeaders(): ?array
    {
        return $this->responseHeaders;
    }

    /**
     * Gets the HTTP body of the server response either as Json or string
     *
     * @return stdClass|string|null HTTP body of the server response either as \stdClass or string
     */
    public function getResponseBody(): stdClass|string|null
    {
        return $this->responseBody;
    }

    /**
     * Sets the deserialized response object (during deserialization)
     *
     * @param mixed $obj Deserialized response object
     *
     * @return void
     */
    public function setResponseObject(mixed $obj): void
    {
        $this->responseObject = $obj;
    }

    /**
     * Gets the deserialized response object (during deserialization)
     *
     * @return mixed the deserialized response object
     */
    public function getResponseObject(): mixed
    {
        return $this->responseObject;
    }
}
