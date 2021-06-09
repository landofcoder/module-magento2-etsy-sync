<?php
/**
 * Copyright © Landofcoder All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Lof\EtsySync\Model;

use Lof\EtsySync\Api\Data\EtsyOrderInterface;
use Lof\EtsySync\Api\Data\EtsyOrderInterfaceFactory;
use Magento\Framework\Api\DataObjectHelper;

class EtsyOrder extends \Magento\Framework\Model\AbstractModel
{

    protected $etsyorderDataFactory;

    protected $dataObjectHelper;

    protected $_eventPrefix = 'lof_etsysync_etsyorder';

    /**
     * @param \Magento\Framework\Model\Context $context
     * @param \Magento\Framework\Registry $registry
     * @param EtsyOrderInterfaceFactory $etsyorderDataFactory
     * @param DataObjectHelper $dataObjectHelper
     * @param \Lof\EtsySync\Model\ResourceModel\EtsyOrder $resource
     * @param \Lof\EtsySync\Model\ResourceModel\EtsyOrder\Collection $resourceCollection
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\Model\Context $context,
        \Magento\Framework\Registry $registry,
        EtsyOrderInterfaceFactory $etsyorderDataFactory,
        DataObjectHelper $dataObjectHelper,
        \Lof\EtsySync\Model\ResourceModel\EtsyOrder $resource,
        \Lof\EtsySync\Model\ResourceModel\EtsyOrder\Collection $resourceCollection,
        array $data = []
    ) {
        $this->etsyorderDataFactory = $etsyorderDataFactory;
        $this->dataObjectHelper = $dataObjectHelper;
        parent::__construct($context, $registry, $resource, $resourceCollection, $data);
    }

    /**
     * Retrieve etsyorder model with etsyorder data
     * @return EtsyOrderInterface
     */
    public function getDataModel()
    {
        $etsyorderData = $this->getData();
        
        $etsyorderDataObject = $this->etsyorderDataFactory->create();
        $this->dataObjectHelper->populateWithArray(
            $etsyorderDataObject,
            $etsyorderData,
            EtsyOrderInterface::class
        );
        
        return $etsyorderDataObject;
    }
}

