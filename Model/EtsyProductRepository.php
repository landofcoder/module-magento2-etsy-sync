<?php
/**
 * Copyright © Landofcoder All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Lof\EtsySync\Model;

use Lof\EtsySync\Api\Data\EtsyProductInterfaceFactory;
use Lof\EtsySync\Api\Data\EtsyProductSearchResultsInterfaceFactory;
use Lof\EtsySync\Api\EtsyProductRepositoryInterface;
use Lof\EtsySync\Model\ResourceModel\EtsyProduct as ResourceEtsyProduct;
use Lof\EtsySync\Model\ResourceModel\EtsyProduct\CollectionFactory as EtsyProductCollectionFactory;
use Magento\Framework\Api\DataObjectHelper;
use Magento\Framework\Api\ExtensibleDataObjectConverter;
use Magento\Framework\Api\ExtensionAttribute\JoinProcessorInterface;
use Magento\Framework\Api\SearchCriteria\CollectionProcessorInterface;
use Magento\Framework\Exception\CouldNotDeleteException;
use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\Reflection\DataObjectProcessor;
use Magento\Store\Model\StoreManagerInterface;

class EtsyProductRepository implements EtsyProductRepositoryInterface
{

    protected $etsyProductFactory;

    protected $resource;

    protected $extensibleDataObjectConverter;
    protected $searchResultsFactory;

    protected $etsyProductCollectionFactory;

    protected $dataEtsyProductFactory;

    private $storeManager;

    protected $dataObjectHelper;

    protected $dataObjectProcessor;

    protected $extensionAttributesJoinProcessor;

    private $collectionProcessor;


    /**
     * @param ResourceEtsyProduct $resource
     * @param EtsyProductFactory $etsyProductFactory
     * @param EtsyProductInterfaceFactory $dataEtsyProductFactory
     * @param EtsyProductCollectionFactory $etsyProductCollectionFactory
     * @param EtsyProductSearchResultsInterfaceFactory $searchResultsFactory
     * @param DataObjectHelper $dataObjectHelper
     * @param DataObjectProcessor $dataObjectProcessor
     * @param StoreManagerInterface $storeManager
     * @param CollectionProcessorInterface $collectionProcessor
     * @param JoinProcessorInterface $extensionAttributesJoinProcessor
     * @param ExtensibleDataObjectConverter $extensibleDataObjectConverter
     */
    public function __construct(
        ResourceEtsyProduct $resource,
        EtsyProductFactory $etsyProductFactory,
        EtsyProductInterfaceFactory $dataEtsyProductFactory,
        EtsyProductCollectionFactory $etsyProductCollectionFactory,
        EtsyProductSearchResultsInterfaceFactory $searchResultsFactory,
        DataObjectHelper $dataObjectHelper,
        DataObjectProcessor $dataObjectProcessor,
        StoreManagerInterface $storeManager,
        CollectionProcessorInterface $collectionProcessor,
        JoinProcessorInterface $extensionAttributesJoinProcessor,
        ExtensibleDataObjectConverter $extensibleDataObjectConverter
    ) {
        $this->resource = $resource;
        $this->etsyProductFactory = $etsyProductFactory;
        $this->etsyProductCollectionFactory = $etsyProductCollectionFactory;
        $this->searchResultsFactory = $searchResultsFactory;
        $this->dataObjectHelper = $dataObjectHelper;
        $this->dataEtsyProductFactory = $dataEtsyProductFactory;
        $this->dataObjectProcessor = $dataObjectProcessor;
        $this->storeManager = $storeManager;
        $this->collectionProcessor = $collectionProcessor;
        $this->extensionAttributesJoinProcessor = $extensionAttributesJoinProcessor;
        $this->extensibleDataObjectConverter = $extensibleDataObjectConverter;
    }

    /**
     * {@inheritdoc}
     */
    public function save(
        \Lof\EtsySync\Api\Data\EtsyProductInterface $etsyProduct
    ) {
        /* if (empty($etsyProduct->getStoreId())) {
            $storeId = $this->storeManager->getStore()->getId();
            $etsyProduct->setStoreId($storeId);
        } */
        
        $etsyProductData = $this->extensibleDataObjectConverter->toNestedArray(
            $etsyProduct,
            [],
            \Lof\EtsySync\Api\Data\EtsyProductInterface::class
        );
        
        $etsyProductModel = $this->etsyProductFactory->create()->setData($etsyProductData);
        
        try {
            $this->resource->save($etsyProductModel);
        } catch (\Exception $exception) {
            throw new CouldNotSaveException(__(
                'Could not save the etsyProduct: %1',
                $exception->getMessage()
            ));
        }
        return $etsyProductModel->getDataModel();
    }

    /**
     * {@inheritdoc}
     */
    public function get($etsyProductId)
    {
        $etsyProduct = $this->etsyProductFactory->create();
        $this->resource->load($etsyProduct, $etsyProductId);
        if (!$etsyProduct->getId()) {
            throw new NoSuchEntityException(__('EtsyProduct with id "%1" does not exist.', $etsyProductId));
        }
        return $etsyProduct->getDataModel();
    }

    /**
     * {@inheritdoc}
     */
    public function getList(
        \Magento\Framework\Api\SearchCriteriaInterface $criteria
    ) {
        $collection = $this->etsyProductCollectionFactory->create();
        
        $this->extensionAttributesJoinProcessor->process(
            $collection,
            \Lof\EtsySync\Api\Data\EtsyProductInterface::class
        );
        
        $this->collectionProcessor->process($criteria, $collection);
        
        $searchResults = $this->searchResultsFactory->create();
        $searchResults->setSearchCriteria($criteria);
        
        $items = [];
        foreach ($collection as $model) {
            $items[] = $model->getDataModel();
        }
        
        $searchResults->setItems($items);
        $searchResults->setTotalCount($collection->getSize());
        return $searchResults;
    }

    /**
     * {@inheritdoc}
     */
    public function delete(
        \Lof\EtsySync\Api\Data\EtsyProductInterface $etsyProduct
    ) {
        try {
            $etsyProductModel = $this->etsyProductFactory->create();
            $this->resource->load($etsyProductModel, $etsyProduct->getEtsyproductId());
            $this->resource->delete($etsyProductModel);
        } catch (\Exception $exception) {
            throw new CouldNotDeleteException(__(
                'Could not delete the EtsyProduct: %1',
                $exception->getMessage()
            ));
        }
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function deleteById($etsyProductId)
    {
        return $this->delete($this->get($etsyProductId));
    }
}

