<?php
/**
 * Copyright © Landofcoder All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Lof\EtsySync\Api;

use Magento\Framework\Api\SearchCriteriaInterface;

interface EtsyProductRepositoryInterface
{

    /**
     * Save EtsyProduct
     * @param \Lof\EtsySync\Api\Data\EtsyProductInterface $etsyProduct
     * @return \Lof\EtsySync\Api\Data\EtsyProductInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function save(
        \Lof\EtsySync\Api\Data\EtsyProductInterface $etsyProduct
    );

    /**
     * Retrieve EtsyProduct
     * @param string $etsyproductId
     * @return \Lof\EtsySync\Api\Data\EtsyProductInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function get($etsyproductId);

    /**
     * Retrieve EtsyProduct matching the specified criteria.
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \Lof\EtsySync\Api\Data\EtsyProductSearchResultsInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getList(
        \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
    );

    /**
     * Delete EtsyProduct
     * @param \Lof\EtsySync\Api\Data\EtsyProductInterface $etsyProduct
     * @return bool true on success
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function delete(
        \Lof\EtsySync\Api\Data\EtsyProductInterface $etsyProduct
    );

    /**
     * Delete EtsyProduct by ID
     * @param string $etsyproductId
     * @return bool true on success
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function deleteById($etsyproductId);
}

