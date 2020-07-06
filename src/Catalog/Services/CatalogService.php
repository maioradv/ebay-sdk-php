<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace maiorADV\eBaySDK\Catalog\Services;

class CatalogService extends \maiorADV\eBaySDK\Catalog\Services\CatalogBaseService
{
    const API_VERSION = 'v1_beta';

    /**
     * @property array $operations Associative array of operations provided by the service.
     */
    protected static $operations = [
        'GetProduct' => [
            'method' => 'GET',
            'resource' => 'product/{epid}',
            'responseClass' => '\maiorADV\eBaySDK\Catalog\Types\GetProductRestResponse',
            'params' => [
                'epid' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'Search' => [
            'method' => 'GET',
            'resource' => 'product_summary/search',
            'responseClass' => '\maiorADV\eBaySDK\Catalog\Types\SearchRestResponse',
            'params' => [
                'offset' => [
                    'valid' => ['string']
                ],
                'limit' => [
                    'valid' => ['string']
                ],
                'fieldgroups' => [
                    'valid' => ['string']
                ],
                'aspect_filter' => [
                    'valid' => ['string']
                ],
                'category_ids' => [
                    'valid' => ['string']
                ],
                'mpn' => [
                    'valid' => ['string']
                ],
                'gtin' => [
                    'valid' => ['string']
                ],
                'q' => [
                    'valid' => ['string']
                ]
            ]
        ],
        'GetProductMetadata' => [
            'method' => 'GET',
            'resource' => 'get_product_metadata',
            'responseClass' => '\maiorADV\eBaySDK\Catalog\Types\GetProductMetadataRestResponse',
            'params' => [
                'other_applicable_category_ids' => [
                    'valid' => ['string']
                ],
                'primary_category_id' => [
                    'valid' => ['string']
                ],
                'epid' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'GetProductMetadataForCategories' => [
            'method' => 'GET',
            'resource' => 'get_product_metadata_for_categories',
            'responseClass' => '\maiorADV\eBaySDK\Catalog\Types\GetProductMetadataForCategoriesRestResponse',
            'params' => [
                'other_applicable_category_ids' => [
                    'valid' => ['string']
                ],
                'primary_category_id' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'GetChangeRequest' => [
            'method' => 'GET',
            'resource' => 'change_request/{change_request_id}',
            'responseClass' => '\maiorADV\eBaySDK\Catalog\Types\GetChangeRequestRestResponse',
            'params' => [
                'change_request_id' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'GetChangeRequests' => [
            'method' => 'GET',
            'resource' => 'change_request',
            'responseClass' => '\maiorADV\eBaySDK\Catalog\Types\GetChangeRequestsRestResponse',
            'params' => [
                'offset' => [
                    'valid' => ['string']
                ],
                'limit' => [
                    'valid' => ['string']
                ],
                'filter' => [
                    'valid' => ['string']
                ]
            ]
        ],
        'CreateChangeRequest' => [
            'method' => 'PUT',
            'resource' => 'change_request',
            'responseClass' => '\maiorADV\eBaySDK\Catalog\Types\CreateChangeRequestRestResponse',
            'params' => [
            ]
        ]
    ];

    /**
     * @param array $config Configuration option values.
     */
    public function __construct(array $config = [])
    {
        parent::__construct($config);
    }

    /**
     * @param \maiorADV\eBaySDK\Catalog\Types\GetProductRestRequest $request
     * @return \maiorADV\eBaySDK\Catalog\Types\GetProductRestResponse
     */
    public function getProduct(\maiorADV\eBaySDK\Catalog\Types\GetProductRestRequest $request)
    {
        return $this->getProductAsync($request)->wait();
    }

    /**
     * @param \maiorADV\eBaySDK\Catalog\Types\GetProductRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getProductAsync(\maiorADV\eBaySDK\Catalog\Types\GetProductRestRequest $request)
    {
        return $this->callOperationAsync('GetProduct', $request);
    }

    /**
     * @param \maiorADV\eBaySDK\Catalog\Types\SearchRestRequest $request
     * @return \maiorADV\eBaySDK\Catalog\Types\SearchRestResponse
     */
    public function search(\maiorADV\eBaySDK\Catalog\Types\SearchRestRequest $request)
    {
        return $this->searchAsync($request)->wait();
    }

    /**
     * @param \maiorADV\eBaySDK\Catalog\Types\SearchRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function searchAsync(\maiorADV\eBaySDK\Catalog\Types\SearchRestRequest $request)
    {
        return $this->callOperationAsync('Search', $request);
    }

    /**
     * @param \maiorADV\eBaySDK\Catalog\Types\GetProductMetadataRestRequest $request
     * @return \maiorADV\eBaySDK\Catalog\Types\GetProductMetadataRestResponse
     */
    public function getProductMetadata(\maiorADV\eBaySDK\Catalog\Types\GetProductMetadataRestRequest $request)
    {
        return $this->getProductMetadataAsync($request)->wait();
    }

    /**
     * @param \maiorADV\eBaySDK\Catalog\Types\GetProductMetadataRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getProductMetadataAsync(\maiorADV\eBaySDK\Catalog\Types\GetProductMetadataRestRequest $request)
    {
        return $this->callOperationAsync('GetProductMetadata', $request);
    }

    /**
     * @param \maiorADV\eBaySDK\Catalog\Types\GetProductMetadataForCategoriesRestRequest $request
     * @return \maiorADV\eBaySDK\Catalog\Types\GetProductMetadataForCategoriesRestResponse
     */
    public function getProductMetadataForCategories(\maiorADV\eBaySDK\Catalog\Types\GetProductMetadataForCategoriesRestRequest $request)
    {
        return $this->getProductMetadataForCategoriesAsync($request)->wait();
    }

    /**
     * @param \maiorADV\eBaySDK\Catalog\Types\GetProductMetadataForCategoriesRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getProductMetadataForCategoriesAsync(\maiorADV\eBaySDK\Catalog\Types\GetProductMetadataForCategoriesRestRequest $request)
    {
        return $this->callOperationAsync('GetProductMetadataForCategories', $request);
    }

    /**
     * @param \maiorADV\eBaySDK\Catalog\Types\GetChangeRequestRestRequest $request
     * @return \maiorADV\eBaySDK\Catalog\Types\GetChangeRequestRestResponse
     */
    public function getChangeRequest(\maiorADV\eBaySDK\Catalog\Types\GetChangeRequestRestRequest $request)
    {
        return $this->getChangeRequestAsync($request)->wait();
    }

    /**
     * @param \maiorADV\eBaySDK\Catalog\Types\GetChangeRequestRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getChangeRequestAsync(\maiorADV\eBaySDK\Catalog\Types\GetChangeRequestRestRequest $request)
    {
        return $this->callOperationAsync('GetChangeRequest', $request);
    }

    /**
     * @param \maiorADV\eBaySDK\Catalog\Types\GetChangeRequestsRestRequest $request
     * @return \maiorADV\eBaySDK\Catalog\Types\GetChangeRequestsRestResponse
     */
    public function getChangeRequests(\maiorADV\eBaySDK\Catalog\Types\GetChangeRequestsRestRequest $request)
    {
        return $this->getChangeRequestsAsync($request)->wait();
    }

    /**
     * @param \maiorADV\eBaySDK\Catalog\Types\GetChangeRequestsRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getChangeRequestsAsync(\maiorADV\eBaySDK\Catalog\Types\GetChangeRequestsRestRequest $request)
    {
        return $this->callOperationAsync('GetChangeRequests', $request);
    }

    /**
     * @param \maiorADV\eBaySDK\Catalog\Types\CreateChangeRequestRestRequest $request
     * @return \maiorADV\eBaySDK\Catalog\Types\CreateChangeRequestRestResponse
     */
    public function createChangeRequest(\maiorADV\eBaySDK\Catalog\Types\CreateChangeRequestRestRequest $request)
    {
        return $this->createChangeRequestAsync($request)->wait();
    }

    /**
     * @param \maiorADV\eBaySDK\Catalog\Types\CreateChangeRequestRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createChangeRequestAsync(\maiorADV\eBaySDK\Catalog\Types\CreateChangeRequestRestRequest $request)
    {
        return $this->callOperationAsync('CreateChangeRequest', $request);
    }
}
