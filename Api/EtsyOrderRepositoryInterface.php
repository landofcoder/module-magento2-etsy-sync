<?php
/**
 * Copyright © Landofcoder All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Lof\EtsySync\Api;

use Magento\Framework\Api\SearchCriteriaInterface;

interface EtsyOrderRepositoryInterface
{

    /**
     * Save EtsyOrder
     * @param \Lof\EtsySync\Api\Data\EtsyOrderInterface $etsyOrder
     * @return \Lof\EtsySync\Api\Data\EtsyOrderInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function save(
        \Lof\EtsySync\Api\Data\EtsyOrderInterface $etsyOrder
    );

    /**
     * Retrieve EtsyOrder
     * @param string $etsyorderId
     * @return \Lof\EtsySync\Api\Data\EtsyOrderInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function get($etsyorderId);

    /**
     * Retrieve EtsyOrder matching the specified criteria.
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \Lof\EtsySync\Api\Data\EtsyOrderSearchResultsInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getList(
        \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
    );

    /**
     * Delete EtsyOrder
     * @param \Lof\EtsySync\Api\Data\EtsyOrderInterface $etsyOrder
     * @return bool true on success
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function delete(
        \Lof\EtsySync\Api\Data\EtsyOrderInterface $etsyOrder
    );

    /**
     * Delete EtsyOrder by ID
     * @param string $etsyorderId
     * @return bool true on success
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function deleteById($etsyorderId);
}

