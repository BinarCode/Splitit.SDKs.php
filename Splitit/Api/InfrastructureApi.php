<?php
/**
 * InfrastructureApi
 * PHP version 5
 *
 * @category Class
 * @package  SplititSdkClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * splitit-web-api-public-sdk
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.12
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SplititSdkClient\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use SplititSdkClient\ApiException;
use SplititSdkClient\Model\RequestHeader;
use SplititSdkClient\Configuration;
use SplititSdkClient\HeaderSelector;
use SplititSdkClient\ObjectSerializer;

/**
 * InfrastructureApi Class Doc Comment
 *
 * @category Class
 * @package  SplititSdkClient
 * @author   Splitit
 * @link     https://github.com/Splitit/Splitit.SDKs
 */
class InfrastructureApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var string
     */
    protected $sessionId;

    protected $culture;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param Configuration   $config
     * @param string   $sessionId
     * @param HeaderSelector  $selector
     */
    public function __construct(
        Configuration $config = null,
        string $sessionId = null,
        HeaderSelector $selector = null
    ) {
        $this->client = new Client();
        $this->config = $config ?: Configuration::production();
        $this->sessionId = $sessionId;
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    public function setCulture($culture)
    {
        $this->culture = $culture;
    }

    protected function injectSessionRequestHeaders($request)
    {
        if (!is_null($this->sessionId)){
            $requestHeader = new RequestHeader();

            if (!is_null($this->sessionId)){
                $requestHeader->setSessionId($this->sessionId);
            }

            if (!is_null($this->config->getApiKey())){
                $requestHeader->setApiKey($this->config->getApiKey());
            }

            if (!is_null($this->config->getTouchPoint())){
                $requestHeader->setTouchPoint($this->config->getTouchPoint());
            }

            if (!is_null($this->culture)){
                $requestHeader->setCultureName($this->culture);
            }

            $request->offsetSet('request_header', $requestHeader);
        }
    }

    /**
     * Operation infrastructureGetResources
     *
     * @param  \SplititSdkClient\Model\GetResourcesRequest $request request (required)
     *
     * @throws \SplititSdkClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \SplititSdkClient\Model\GetResourcesResponse
     */
    public function infrastructureGetResources($request)
    {
        list($response) = $this->infrastructureGetResourcesWithHttpInfo($request);
        return $response;
    }

    /**
     * Operation infrastructureGetResourcesWithHttpInfo
     *
     * @param  \SplititSdkClient\Model\GetResourcesRequest $request (required)
     *
     * @throws \SplititSdkClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \SplititSdkClient\Model\GetResourcesResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function infrastructureGetResourcesWithHttpInfo($request)
    {
        $returnType = '\SplititSdkClient\Model\GetResourcesResponse';
        $request = $this->infrastructureGetResourcesRequest($request);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            $result = ObjectSerializer::deserialize($content, $returnType, []);

            if (!$result->getResponseHeader()->getSucceeded()){
                throw ApiException::splitit($result->getResponseHeader());
            }

            return [
                $result,
                $response->getStatusCode(),
                $response->getHeaders()
            ];


        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SplititSdkClient\Model\GetResourcesResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation infrastructureGetResourcesAsync
     *
     * 
     *
     * @param  \SplititSdkClient\Model\GetResourcesRequest $request (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function infrastructureGetResourcesAsync($request)
    {
        return $this->infrastructureGetResourcesAsyncWithHttpInfo($request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation infrastructureGetResourcesAsyncWithHttpInfo
     *
     * 
     *
     * @param  \SplititSdkClient\Model\GetResourcesRequest $request (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function infrastructureGetResourcesAsyncWithHttpInfo($request)
    {
        $returnType = '\SplititSdkClient\Model\GetResourcesResponse';
        $request = $this->infrastructureGetResourcesRequest($request);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    $result = ObjectSerializer::deserialize($content, $returnType, []);

                    if (!$result->getResponseHeader()->getSucceeded()){
                        throw ApiException::splitit($result->getResponseHeader());
                    }

                    return [
                        $result,
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];

                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'infrastructureGetResources'
     *
     * @param  \SplititSdkClient\Model\GetResourcesRequest $request (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function infrastructureGetResourcesRequest($request)
    {
        // verify the required parameter 'request' is set
        if ($request === null || (is_array($request) && count($request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $request when calling infrastructureGetResources'
            );
        }

        $resourcePath = '/api/Infrastructure/GetResources';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // body params
        $_tempBody = null;
        if (isset($request)) {
            $this->injectSessionRequestHeaders($request);
            $_tempBody = $request;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['text/plain', 'application/json', 'text/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['text/plain', 'application/json', 'text/json'],
                ['application/json-patch+json', 'application/json', 'text/json', 'application/_*+json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = http_build_query($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = http_build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation infrastructureGetResources2
     *
     * @param  string $api_key api_key (optional)
     * @param  string $session_id session_id (optional)
     * @param  string $merchant_code merchant_code (optional)
     * @param  string $culture_name culture_name (optional)
     * @param  string $touch_point_code touch_point_code (optional)
     * @param  \SplititSdkClient\Model\SystemTextCategory[] $system_text_categories system_text_categories (optional)
     *
     * @throws \SplititSdkClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \SplititSdkClient\Model\GetResourcesResponse
     */
    public function infrastructureGetResources2($api_key = null, $session_id = null, $merchant_code = null, $culture_name = null, $touch_point_code = null, $system_text_categories = null)
    {
        list($response) = $this->infrastructureGetResources2WithHttpInfo($api_key, $session_id, $merchant_code, $culture_name, $touch_point_code, $system_text_categories);
        return $response;
    }

    /**
     * Operation infrastructureGetResources2WithHttpInfo
     *
     * @param  string $api_key (optional)
     * @param  string $session_id (optional)
     * @param  string $merchant_code (optional)
     * @param  string $culture_name (optional)
     * @param  string $touch_point_code (optional)
     * @param  \SplititSdkClient\Model\SystemTextCategory[] $system_text_categories (optional)
     *
     * @throws \SplititSdkClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \SplititSdkClient\Model\GetResourcesResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function infrastructureGetResources2WithHttpInfo($api_key = null, $session_id = null, $merchant_code = null, $culture_name = null, $touch_point_code = null, $system_text_categories = null)
    {
        $returnType = '\SplititSdkClient\Model\GetResourcesResponse';
        $request = $this->infrastructureGetResources2Request($api_key, $session_id, $merchant_code, $culture_name, $touch_point_code, $system_text_categories);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            $result = ObjectSerializer::deserialize($content, $returnType, []);

            if (!$result->getResponseHeader()->getSucceeded()){
                throw ApiException::splitit($result->getResponseHeader());
            }

            return [
                $result,
                $response->getStatusCode(),
                $response->getHeaders()
            ];


        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SplititSdkClient\Model\GetResourcesResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation infrastructureGetResources2Async
     *
     * 
     *
     * @param  string $api_key (optional)
     * @param  string $session_id (optional)
     * @param  string $merchant_code (optional)
     * @param  string $culture_name (optional)
     * @param  string $touch_point_code (optional)
     * @param  \SplititSdkClient\Model\SystemTextCategory[] $system_text_categories (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function infrastructureGetResources2Async($api_key = null, $session_id = null, $merchant_code = null, $culture_name = null, $touch_point_code = null, $system_text_categories = null)
    {
        return $this->infrastructureGetResources2AsyncWithHttpInfo($api_key, $session_id, $merchant_code, $culture_name, $touch_point_code, $system_text_categories)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation infrastructureGetResources2AsyncWithHttpInfo
     *
     * 
     *
     * @param  string $api_key (optional)
     * @param  string $session_id (optional)
     * @param  string $merchant_code (optional)
     * @param  string $culture_name (optional)
     * @param  string $touch_point_code (optional)
     * @param  \SplititSdkClient\Model\SystemTextCategory[] $system_text_categories (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function infrastructureGetResources2AsyncWithHttpInfo($api_key = null, $session_id = null, $merchant_code = null, $culture_name = null, $touch_point_code = null, $system_text_categories = null)
    {
        $returnType = '\SplititSdkClient\Model\GetResourcesResponse';
        $request = $this->infrastructureGetResources2Request($api_key, $session_id, $merchant_code, $culture_name, $touch_point_code, $system_text_categories);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    $result = ObjectSerializer::deserialize($content, $returnType, []);

                    if (!$result->getResponseHeader()->getSucceeded()){
                        throw ApiException::splitit($result->getResponseHeader());
                    }

                    return [
                        $result,
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];

                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'infrastructureGetResources2'
     *
     * @param  string $api_key (optional)
     * @param  string $session_id (optional)
     * @param  string $merchant_code (optional)
     * @param  string $culture_name (optional)
     * @param  string $touch_point_code (optional)
     * @param  \SplititSdkClient\Model\SystemTextCategory[] $system_text_categories (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function infrastructureGetResources2Request($api_key = null, $session_id = null, $merchant_code = null, $culture_name = null, $touch_point_code = null, $system_text_categories = null)
    {

        $resourcePath = '/api/Infrastructure/GetResources';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($api_key !== null) {
            $queryParams['apiKey'] = ObjectSerializer::toQueryValue($api_key);
        }
        // query params
        if ($session_id !== null) {
            $queryParams['sessionId'] = ObjectSerializer::toQueryValue($session_id);
        }
        // query params
        if ($merchant_code !== null) {
            $queryParams['merchantCode'] = ObjectSerializer::toQueryValue($merchant_code);
        }
        // query params
        if ($culture_name !== null) {
            $queryParams['cultureName'] = ObjectSerializer::toQueryValue($culture_name);
        }
        // query params
        if ($touch_point_code !== null) {
            $queryParams['touchPointCode'] = ObjectSerializer::toQueryValue($touch_point_code);
        }
        // query params
        if (is_array($system_text_categories)) {
            $queryParams['systemTextCategories'] = $system_text_categories;
        } else
        if ($system_text_categories !== null) {
            $queryParams['systemTextCategories'] = ObjectSerializer::toQueryValue($system_text_categories);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['text/plain', 'application/json', 'text/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['text/plain', 'application/json', 'text/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = http_build_query($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = http_build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
