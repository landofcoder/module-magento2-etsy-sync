<?php
/**
 * Copyright © Landofcoder All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Lof\EtsySync\Model\ResourceModel\EtsyOrder;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{

    /**
     * @var string
     */
    protected $_idFieldName = 'etsyorder_id';

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(
            \Lof\EtsySync\Model\EtsyOrder::class,
            \Lof\EtsySync\Model\ResourceModel\EtsyOrder::class
        );
    }
}

