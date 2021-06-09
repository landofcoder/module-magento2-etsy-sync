<?php
/**
 * Copyright © Landofcoder All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Lof\EtsySync\Model;

use Lof\EtsySync\Api\Data\EtsyOrderInterfaceFactory;
use Lof\EtsySync\Api\Data\EtsyOrderSearchResultsInterfaceFactory;
use Lof\EtsySync\Api\EtsyOrderRepositoryInterface;
use Lof\EtsySync\Model\ResourceModel\EtsyOrder as ResourceEtsyOrder;
use Lof\EtsySync\Model\ResourceModel\EtsyOrder\CollectionFactory as EtsyOrderCollectionFactory;
use Magento\Framework\Api\DataObjectHelper;
use Magento\Framework\Api\ExtensibleDataObjectConverter;
use Magento\Framework\Api\ExtensionAttribute\JoinProcessorInterface;
use Magento\Framework\Api\SearchCriteria\CollectionProcessorInterface;
use Magento\Framework\Exception\CouldNotDeleteException;
use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\Reflection\DataObjectProcessor;
use Magento\Store\Model\StoreManagerInterface;

class EtsyOrderRepository implements EtsyOrderRepositoryInterface
{

    protected $extensibleDataObjectConverter;
    protected $dataEtsyOrderFactory;

    protected $resource;

    protected $searchResultsFactory;

    private $storeManager;

    protected $etsyOrderFactory;

    protected $dataObjectHelper;

    protected $etsyOrderCollectionFactory;

    protected $dataObjectProcessor;

    protected $extensionAttributesJoinProcessor;

    private $collectionProcessor;


    /**
     * @param ResourceEtsyOrder $resource
     * @param EtsyOrderFactory $etsyOrderFactory
     * @param EtsyOrderInterfaceFactory $dataEtsyOrderFactory
     * @param EtsyOrderCollectionFactory $etsyOrderCollectionFactory
     * @param EtsyOrderSearchResultsInterfaceFactory $searchResultsFactory
     * @param DataObjectHelper $dataObjectHelper
     * @param DataObjectProcessor $dataObjectProcessor
     * @param StoreManagerInterface $storeManager
     * @param CollectionProcessorInterface $collectionProcessor
     * @param JoinProcessorInterface $extensionAttributesJoinProcessor
     * @param ExtensibleDataObjectConverter $extensibleDataObjectConverter
     */
    public function __construct(
        ResourceEtsyOrder $resource,
        EtsyOrderFactory $etsyOrderFactory,
        EtsyOrderInterfaceFactory $dataEtsyOrderFactory,
        EtsyOrderCollectionFactory $etsyOrderCollectionFactory,
        EtsyOrderSearchResultsInterfaceFactory $searchResultsFactory,
        DataObjectHelper $dataObjectHelper,
        DataObjectProcessor $dataObjectProcessor,
        StoreManagerInterface $storeManager,
        CollectionProcessorInterface $collectionProcessor,
        JoinProcessorInterface $extensionAttributesJoinProcessor,
        ExtensibleDataObjectConverter $extensibleDataObjectConverter
    ) {
        $this->resource = $resource;
        $this->etsyOrderFactory = $etsyOrderFactory;
        $this->etsyOrderCollectionFactory = $etsyOrderCollectionFactory;
        $this->searchResultsFactory = $searchResultsFactory;
        $this->dataObjectHelper = $dataObjectHelper;
        $this->dataEtsyOrderFactory = $dataEtsyOrderFactory;
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
        \Lof\EtsySync\Api\Data\EtsyOrderInterface $etsyOrder
    ) {
        /* if (empty($etsyOrder->getStoreId())) {
            $storeId = $this->storeManager->getStore()->getId();
            $etsyOrder->setStoreId($storeId);
        } */
        
        $etsyOrderData = $this->extensibleDataObjectConverter->toNestedArray(
            $etsyOrder,
            [],
            \Lof\EtsySync\Api\Data\EtsyOrderInterface::class
        );
        
        $etsyOrderModel = $this->etsyOrderFactory->create()->setData($etsyOrderData);
        
        try {
            $this->resource->save($etsyOrderModel);
        } catch (\Exception $exception) {
            throw new CouldNotSaveException(__(
                'Could not save the etsyOrder: %1',
                $exception->getMessage()
            ));
        }
        return $etsyOrderModel->getDataModel();
    }

    /**
     * {@inheritdoc}
     */
    public function get($etsyOrderId)
    {
        $etsyOrder = $this->etsyOrderFactory->create();
        $this->resource->load($etsyOrder, $etsyOrderId);
        if (!$etsyOrder->getId()) {
            throw new NoSuchEntityException(__('EtsyOrder with id "%1" does not exist.', $etsyOrderId));
        }
        return $etsyOrder->getDataModel();
    }

    /**
     * {@inheritdoc}
     */
    public function getList(
        \Magento\Framework\Api\SearchCriteriaInterface $criteria
    ) {
        $collection = $this->etsyOrderCollectionFactory->create();
        
        $this->extensionAttributesJoinProcessor->process(
            $collection,
            \Lof\EtsySync\Api\Data\EtsyOrderInterface::class
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
        \Lof\EtsySync\Api\Data\EtsyOrderInterface $etsyOrder
    ) {
        try {
            $etsyOrderModel = $this->etsyOrderFactory->create();
            $this->resource->load($etsyOrderModel, $etsyOrder->getEtsyorderId());
            $this->resource->delete($etsyOrderModel);
        } catch (\Exception $exception) {
            throw new CouldNotDeleteException(__(
                'Could not delete the EtsyOrder: %1',
                $exception->getMessage()
            ));
        }
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function deleteById($etsyOrderId)
    {
        return $this->delete($this->get($etsyOrderId));
    }
}

