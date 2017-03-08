<?php
/**
 * EnginesApi
 * PHP version 5
 *
 * @category Class
 * @package  AutodeskForge\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Forge SDK
 *
 * The Forge Platform contains an expanding collection of web service components that can be used with Autodesk cloud-based products or your own technologies. Take advantage of Autodesk’s expertise in design and engineering.
 *
 * OpenAPI spec version: 0.1.0
 * Contact: forge.help@autodesk.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace AutodeskForge\Client\Api;

use \AutodeskForge\Client\ApiException;

/**
 * EnginesApi Class Doc Comment
 *
 * @category Class
 * @package  AutodeskForge\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EnginesApi extends AbstractApi
{
    /**
     * Operation getAllEngines
     *
     * Returns the details of all available AutoCAD core engines.
     *
     * @throws \AutodeskForge\Client\ApiException on non-2xx response
     * @return \AutodeskForge\Client\Model\DesignAutomationEngines
     */
    public function getAllEngines()
    {
        list($response) = $this->getAllEnginesWithHttpInfo();
        return $response;
    }

    /**
     * Operation getAllEnginesWithHttpInfo
     *
     * Returns the details of all available AutoCAD core engines.
     *
     * @throws \AutodeskForge\Client\ApiException on non-2xx response
     * @return array of \AutodeskForge\Client\Model\DesignAutomationEngines, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAllEnginesWithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/autocad.io/us-east/v2/Engines";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/vnd.api+json', 'application/json']);
        if ( ! is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\AutodeskForge\Client\Model\DesignAutomationEngines',
                '/autocad.io/us-east/v2/Engines'
            );

            return [
                $this->apiClient->getSerializer()->deserialize($response, '\AutodeskForge\Client\Model\DesignAutomationEngines', $httpHeader),
                $statusCode,
                $httpHeader,
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\AutodeskForge\Client\Model\DesignAutomationEngines', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getEngine
     *
     * Returns the details of a specific AutoCAD core engine.
     *
     * @param string $id (required)
     * @throws \AutodeskForge\Client\ApiException on non-2xx response
     * @return \AutodeskForge\Client\Model\Engine
     */
    public function getEngine($id)
    {
        list($response) = $this->getEngineWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation getEngineWithHttpInfo
     *
     * Returns the details of a specific AutoCAD core engine.
     *
     * @param string $id (required)
     * @throws \AutodeskForge\Client\ApiException on non-2xx response
     * @return array of \AutodeskForge\Client\Model\Engine, HTTP status code, HTTP response headers (array of strings)
     */
    public function getEngineWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling getEngine');
        }
        // parse inputs
        $resourcePath = "/autocad.io/us-east/v2/Engines(&#39;{id}&#39;)";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/vnd.api+json', 'application/json']);
        if ( ! is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\AutodeskForge\Client\Model\Engine',
                '/autocad.io/us-east/v2/Engines(&#39;{id}&#39;)'
            );

            return [
                $this->apiClient->getSerializer()->deserialize($response, '\AutodeskForge\Client\Model\Engine', $httpHeader),
                $statusCode,
                $httpHeader,
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\AutodeskForge\Client\Model\Engine', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

}
