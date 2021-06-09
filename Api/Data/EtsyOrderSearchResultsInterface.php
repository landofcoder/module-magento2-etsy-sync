<?php
/**
 * Copyright © Landofcoder All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Lof\EtsySync\Api\Data;

interface EtsyOrderSearchResultsInterface extends \Magento\Framework\Api\SearchResultsInterface
{

    /**
     * Get EtsyOrder list.
     * @return \Lof\EtsySync\Api\Data\EtsyOrderInterface[]
     */
    public function getItems();

    /**
     * Set entity_id list.
     * @param \Lof\EtsySync\Api\Data\EtsyOrderInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}

