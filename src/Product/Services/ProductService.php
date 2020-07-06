<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace maiorADV\eBaySDK\Product\Services;

class ProductService extends \maiorADV\eBaySDK\Product\Services\ProductBaseService
{
    const API_VERSION = '1.4.0';

    /**
     * @param array $config Configuration option values.
     */
    public function __construct(array $config = [])
    {
        parent::__construct($config);
    }

    /**
     * @param \maiorADV\eBaySDK\Product\Types\FindProductsRequest $request
     * @return \maiorADV\eBaySDK\Product\Types\FindProductsResponse
     */
    public function findProducts(\maiorADV\eBaySDK\Product\Types\FindProductsRequest $request)
    {
        return $this->findProductsAsync($request)->wait();
    }

    /**
     * @param \maiorADV\eBaySDK\Product\Types\FindProductsRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function findProductsAsync(\maiorADV\eBaySDK\Product\Types\FindProductsRequest $request)
    {
        return $this->callOperationAsync(
            'findProducts',
            $request,
            '\maiorADV\eBaySDK\Product\Types\FindProductsResponse'
        );
    }

    /**
     * @param \maiorADV\eBaySDK\Product\Types\FindProductsByCompatibilityRequest $request
     * @return \maiorADV\eBaySDK\Product\Types\FindProductsResponse
     */
    public function findProductsByCompatibility(\maiorADV\eBaySDK\Product\Types\FindProductsByCompatibilityRequest $request)
    {
        return $this->findProductsByCompatibilityAsync($request)->wait();
    }

    /**
     * @param \maiorADV\eBaySDK\Product\Types\FindProductsByCompatibilityRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function findProductsByCompatibilityAsync(\maiorADV\eBaySDK\Product\Types\FindProductsByCompatibilityRequest $request)
    {
        return $this->callOperationAsync(
            'findProductsByCompatibility',
            $request,
            '\maiorADV\eBaySDK\Product\Types\FindProductsResponse'
        );
    }

    /**
     * @param \maiorADV\eBaySDK\Product\Types\GetProductDetailsRequest $request
     * @return \maiorADV\eBaySDK\Product\Types\GetProductDetailsResponse
     */
    public function getProductDetails(\maiorADV\eBaySDK\Product\Types\GetProductDetailsRequest $request)
    {
        return $this->getProductDetailsAsync($request)->wait();
    }

    /**
     * @param \maiorADV\eBaySDK\Product\Types\GetProductDetailsRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getProductDetailsAsync(\maiorADV\eBaySDK\Product\Types\GetProductDetailsRequest $request)
    {
        return $this->callOperationAsync(
            'getProductDetails',
            $request,
            '\maiorADV\eBaySDK\Product\Types\GetProductDetailsResponse'
        );
    }

    /**
     * @param \maiorADV\eBaySDK\Product\Types\GetProductCompatibilitiesRequest $request
     * @return \maiorADV\eBaySDK\Product\Types\GetProductCompatiblitiesResponse
     */
    public function getProductCompatibilities(\maiorADV\eBaySDK\Product\Types\GetProductCompatibilitiesRequest $request)
    {
        return $this->getProductCompatibilitiesAsync($request)->wait();
    }

    /**
     * @param \maiorADV\eBaySDK\Product\Types\GetProductCompatibilitiesRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getProductCompatibilitiesAsync(\maiorADV\eBaySDK\Product\Types\GetProductCompatibilitiesRequest $request)
    {
        return $this->callOperationAsync(
            'getProductCompatibilities',
            $request,
            '\maiorADV\eBaySDK\Product\Types\GetProductCompatiblitiesResponse'
        );
    }

    /**
     * @param \maiorADV\eBaySDK\Product\Types\FindCompatibilitiesBySpecificationRequest $request
     * @return \maiorADV\eBaySDK\Product\Types\FindCompatibilitiesBySpecificationResponse
     */
    public function findCompatibilitiesBySpecification(\maiorADV\eBaySDK\Product\Types\FindCompatibilitiesBySpecificationRequest $request)
    {
        return $this->findCompatibilitiesBySpecificationAsync($request)->wait();
    }

    /**
     * @param \maiorADV\eBaySDK\Product\Types\FindCompatibilitiesBySpecificationRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function findCompatibilitiesBySpecificationAsync(\maiorADV\eBaySDK\Product\Types\FindCompatibilitiesBySpecificationRequest $request)
    {
        return $this->callOperationAsync(
            'findCompatibilitiesBySpecification',
            $request,
            '\maiorADV\eBaySDK\Product\Types\FindCompatibilitiesBySpecificationResponse'
        );
    }

    /**
     * @param \maiorADV\eBaySDK\Product\Types\AddProductsRequest $request
     * @return \maiorADV\eBaySDK\Product\Types\AddProductsResponse
     */
    public function addProducts(\maiorADV\eBaySDK\Product\Types\AddProductsRequest $request)
    {
        return $this->addProductsAsync($request)->wait();
    }

    /**
     * @param \maiorADV\eBaySDK\Product\Types\AddProductsRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addProductsAsync(\maiorADV\eBaySDK\Product\Types\AddProductsRequest $request)
    {
        return $this->callOperationAsync(
            'addProducts',
            $request,
            '\maiorADV\eBaySDK\Product\Types\AddProductsResponse'
        );
    }

    /**
     * @param \maiorADV\eBaySDK\Product\Types\GetProductSubmissionsRequest $request
     * @return \maiorADV\eBaySDK\Product\Types\GetProductSubmissionsResponse
     */
    public function getProductSubmissions(\maiorADV\eBaySDK\Product\Types\GetProductSubmissionsRequest $request)
    {
        return $this->getProductSubmissionsAsync($request)->wait();
    }

    /**
     * @param \maiorADV\eBaySDK\Product\Types\GetProductSubmissionsRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getProductSubmissionsAsync(\maiorADV\eBaySDK\Product\Types\GetProductSubmissionsRequest $request)
    {
        return $this->callOperationAsync(
            'getProductSubmissions',
            $request,
            '\maiorADV\eBaySDK\Product\Types\GetProductSubmissionsResponse'
        );
    }
}
