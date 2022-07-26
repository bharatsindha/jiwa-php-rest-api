<?php
/**
 * ReportsApi
 * PHP version 5
 *
 * @category Class
 * @package  Jiwa
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * JiwaAPI
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 1.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.28-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Jiwa\JiwaAPI;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Jiwa\ApiException;
use Jiwa\Configuration;
use Jiwa\HeaderSelector;
use Jiwa\ObjectSerializer;

/**
 * ReportsApi Class Doc Comment
 *
 * @category Class
 * @package  Jiwa
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ReportsApi
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
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation reportsPDFGETRequestReportIDPDFDownloadGet
     *
     * Retrieves PDF of the selected report.
     *
     * @param  string $accept Accept Header (required)
     * @param  string $report_id report_id (required)
     * @param  bool $jiwa_stateful Stateful indicator (optional)
     * @param  string $report_parameters report_parameters (optional)
     * @param  bool $as_attachment as_attachment (optional)
     *
     * @throws \Jiwa\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Jiwa\JiwaModel\IHttpResult
     */
    public function reportsPDFGETRequestReportIDPDFDownloadGet($accept, $report_id, $jiwa_stateful = null, $report_parameters = null, $as_attachment = null)
    {
        list($response) = $this->reportsPDFGETRequestReportIDPDFDownloadGetWithHttpInfo($accept, $report_id, $jiwa_stateful, $report_parameters, $as_attachment);
        return $response;
    }

    /**
     * Operation reportsPDFGETRequestReportIDPDFDownloadGetWithHttpInfo
     *
     * Retrieves PDF of the selected report.
     *
     * @param  string $accept Accept Header (required)
     * @param  string $report_id (required)
     * @param  bool $jiwa_stateful Stateful indicator (optional)
     * @param  string $report_parameters (optional)
     * @param  bool $as_attachment (optional)
     *
     * @throws \Jiwa\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Jiwa\JiwaModel\IHttpResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function reportsPDFGETRequestReportIDPDFDownloadGetWithHttpInfo($accept, $report_id, $jiwa_stateful = null, $report_parameters = null, $as_attachment = null)
    {
        $returnType = '\Jiwa\JiwaModel\IHttpResult';
        $request = $this->reportsPDFGETRequestReportIDPDFDownloadGetRequest($accept, $report_id, $jiwa_stateful, $report_parameters, $as_attachment);

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

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Jiwa\JiwaModel\IHttpResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Jiwa\JiwaModel\IHttpResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Jiwa\JiwaModel\IHttpResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Jiwa\JiwaModel\IHttpResult',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation reportsPDFGETRequestReportIDPDFDownloadGetAsync
     *
     * Retrieves PDF of the selected report.
     *
     * @param  string $accept Accept Header (required)
     * @param  string $report_id (required)
     * @param  bool $jiwa_stateful Stateful indicator (optional)
     * @param  string $report_parameters (optional)
     * @param  bool $as_attachment (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function reportsPDFGETRequestReportIDPDFDownloadGetAsync($accept, $report_id, $jiwa_stateful = null, $report_parameters = null, $as_attachment = null)
    {
        return $this->reportsPDFGETRequestReportIDPDFDownloadGetAsyncWithHttpInfo($accept, $report_id, $jiwa_stateful, $report_parameters, $as_attachment)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation reportsPDFGETRequestReportIDPDFDownloadGetAsyncWithHttpInfo
     *
     * Retrieves PDF of the selected report.
     *
     * @param  string $accept Accept Header (required)
     * @param  string $report_id (required)
     * @param  bool $jiwa_stateful Stateful indicator (optional)
     * @param  string $report_parameters (optional)
     * @param  bool $as_attachment (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function reportsPDFGETRequestReportIDPDFDownloadGetAsyncWithHttpInfo($accept, $report_id, $jiwa_stateful = null, $report_parameters = null, $as_attachment = null)
    {
        $returnType = '\Jiwa\JiwaModel\IHttpResult';
        $request = $this->reportsPDFGETRequestReportIDPDFDownloadGetRequest($accept, $report_id, $jiwa_stateful, $report_parameters, $as_attachment);

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

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
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
     * Create request for operation 'reportsPDFGETRequestReportIDPDFDownloadGet'
     *
     * @param  string $accept Accept Header (required)
     * @param  string $report_id (required)
     * @param  bool $jiwa_stateful Stateful indicator (optional)
     * @param  string $report_parameters (optional)
     * @param  bool $as_attachment (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function reportsPDFGETRequestReportIDPDFDownloadGetRequest($accept, $report_id, $jiwa_stateful = null, $report_parameters = null, $as_attachment = null)
    {
        // verify the required parameter 'accept' is set
        if ($accept === null || (is_array($accept) && count($accept) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $accept when calling reportsPDFGETRequestReportIDPDFDownloadGet'
            );
        }
        // verify the required parameter 'report_id' is set
        if ($report_id === null || (is_array($report_id) && count($report_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $report_id when calling reportsPDFGETRequestReportIDPDFDownloadGet'
            );
        }

        $resourcePath = '/Reports/{ReportID}/PDF/Download';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($report_parameters !== null) {
            $queryParams['ReportParameters'] = ObjectSerializer::toQueryValue($report_parameters);
        }
        // query params
        if ($as_attachment !== null) {
            $queryParams['AsAttachment'] = ObjectSerializer::toQueryValue($as_attachment);
        }
        // header params
        if ($accept !== null) {
            $headerParams['Accept'] = ObjectSerializer::toHeaderValue($accept);
        }
        // header params
        if ($jiwa_stateful !== null) {
            $headerParams['jiwa-stateful'] = ObjectSerializer::toHeaderValue($jiwa_stateful);
        }

        // path params
        if ($report_id !== null) {
            $resourcePath = str_replace(
                '{' . 'ReportID' . '}',
                ObjectSerializer::toPathValue($report_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'application/xml']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'application/xml'],
                ['application/x-www-form-urlencoded', 'application/json', 'application/xml']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
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
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires HTTP basic authentication
        if ($this->config->getUsername() !== null || $this->config->getPassword() !== null) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
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

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
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
