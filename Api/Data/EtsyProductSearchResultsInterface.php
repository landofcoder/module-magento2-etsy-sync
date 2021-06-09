<?php
/**
 * Copyright © Landofcoder All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Lof\EtsySync\Api\Data;

interface EtsyProductSearchResultsInterface extends \Magento\Framework\Api\SearchResultsInterface
{

    /**
     * Get EtsyProduct list.
     * @return \Lof\EtsySync\Api\Data\EtsyProductInterface[]
     */
    public function getItems();

    /**
     * Set entity_id list.
     * @param \Lof\EtsySync\Api\Data\EtsyProductInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}

