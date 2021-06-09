<?php
/**
 * Copyright © Landofcoder All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Lof\EtsySync\Model;

use Lof\EtsySync\Api\Data\EtsyProductInterface;
use Lof\EtsySync\Api\Data\EtsyProductInterfaceFactory;
use Magento\Framework\Api\DataObjectHelper;

class EtsyProduct extends \Magento\Framework\Model\AbstractModel
{

    protected $_eventPrefix = 'lof_etsysync_etsyproduct';
    protected $dataObjectHelper;

    protected $etsyproductDataFactory;


    /**
     * @param \Magento\Framework\Model\Context $context
     * @param \Magento\Framework\Registry $registry
     * @param EtsyProductInterfaceFactory $etsyproductDataFactory
     * @param DataObjectHelper $dataObjectHelper
     * @param \Lof\EtsySync\Model\ResourceModel\EtsyProduct $resource
     * @param \Lof\EtsySync\Model\ResourceModel\EtsyProduct\Collection $resourceCollection
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\Model\Context $context,
        \Magento\Framework\Registry $registry,
        EtsyProductInterfaceFactory $etsyproductDataFactory,
        DataObjectHelper $dataObjectHelper,
        \Lof\EtsySync\Model\ResourceModel\EtsyProduct $resource,
        \Lof\EtsySync\Model\ResourceModel\EtsyProduct\Collection $resourceCollection,
        array $data = []
    ) {
        $this->etsyproductDataFactory = $etsyproductDataFactory;
        $this->dataObjectHelper = $dataObjectHelper;
        parent::__construct($context, $registry, $resource, $resourceCollection, $data);
    }

    /**
     * Retrieve etsyproduct model with etsyproduct data
     * @return EtsyProductInterface
     */
    public function getDataModel()
    {
        $etsyproductData = $this->getData();
        
        $etsyproductDataObject = $this->etsyproductDataFactory->create();
        $this->dataObjectHelper->populateWithArray(
            $etsyproductDataObject,
            $etsyproductData,
            EtsyProductInterface::class
        );
        
        return $etsyproductDataObject;
    }
}

