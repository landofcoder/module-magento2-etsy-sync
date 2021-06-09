<?php
/**
 * Copyright © Landofcoder All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Lof\EtsySync\Api\Data;

interface EtsyOrderInterface extends \Magento\Framework\Api\ExtensibleDataInterface
{

    const ENTITY_ID = 'entity_id';
    const CREATED_AT = 'created_at';
    const IMPORTED_AT = 'imported_at';
    const CUSTOMER_NOTE = 'customer_note';
    const TRACKING = 'tracking';
    const CURRENCY = 'currency';
    const PAYMENT_METHOD = 'payment_method';
    const BUYER_ID = 'buyer_id';
    const SHIPPING_TOTAL = 'shipping_total';
    const TOTAL = 'total';
    const DISCOUNT_TOTAL = 'discount_total';
    const BILLING = 'billing';
    const TOTAL_WITH_TAX = 'total_with_tax';
    const PLATFORM_ID = 'platform_id';
    const MAGENTO_ORDER_ID = 'magento_order_id';
    const ETSYORDER_ID = 'etsyorder_id';
    const LINE_ITEMS = 'line_items';
    const PLATFORM_CUSTOMER_ID = 'platform_customer_id';
    const MAGENTO_CUSTOMER_ID = 'magento_customer_id';
    const SHIPPING = 'shipping';
    const STATUS = 'status';
    const UPDATED_AT = 'updated_at';

    /**
     * Get etsyorder_id
     * @return string|null
     */
    public function getEtsyorderId();

    /**
     * Set etsyorder_id
     * @param string $etsyorderId
     * @return \Lof\EtsySync\Api\Data\EtsyOrderInterface
     */
    public function setEtsyorderId($etsyorderId);

    /**
     * Get entity_id
     * @return string|null
     */
    public function getEntityId();

    /**
     * Set entity_id
     * @param string $entityId
     * @return \Lof\EtsySync\Api\Data\EtsyOrderInterface
     */
    public function setEntityId($entityId);

    /**
     * Retrieve existing extension attributes object or create a new one.
     * @return \Lof\EtsySync\Api\Data\EtsyOrderExtensionInterface|null
     */
    public function getExtensionAttributes();

    /**
     * Set an extension attributes object.
     * @param \Lof\EtsySync\Api\Data\EtsyOrderExtensionInterface $extensionAttributes
     * @return $this
     */
    public function setExtensionAttributes(
        \Lof\EtsySync\Api\Data\EtsyOrderExtensionInterface $extensionAttributes
    );

    /**
     * Get platform_id
     * @return string|null
     */
    public function getPlatformId();

    /**
     * Set platform_id
     * @param string $platformId
     * @return \Lof\EtsySync\Api\Data\EtsyOrderInterface
     */
    public function setPlatformId($platformId);

    /**
     * Get created_at
     * @return string|null
     */
    public function getCreatedAt();

    /**
     * Set created_at
     * @param string $createdAt
     * @return \Lof\EtsySync\Api\Data\EtsyOrderInterface
     */
    public function setCreatedAt($createdAt);

    /**
     * Get updated_at
     * @return string|null
     */
    public function getUpdatedAt();

    /**
     * Set updated_at
     * @param string $updatedAt
     * @return \Lof\EtsySync\Api\Data\EtsyOrderInterface
     */
    public function setUpdatedAt($updatedAt);

    /**
     * Get imported_at
     * @return string|null
     */
    public function getImportedAt();

    /**
     * Set imported_at
     * @param string $importedAt
     * @return \Lof\EtsySync\Api\Data\EtsyOrderInterface
     */
    public function setImportedAt($importedAt);

    /**
     * Get currency
     * @return string|null
     */
    public function getCurrency();

    /**
     * Set currency
     * @param string $currency
     * @return \Lof\EtsySync\Api\Data\EtsyOrderInterface
     */
    public function setCurrency($currency);

    /**
     * Get status
     * @return string|null
     */
    public function getStatus();

    /**
     * Set status
     * @param string $status
     * @return \Lof\EtsySync\Api\Data\EtsyOrderInterface
     */
    public function setStatus($status);

    /**
     * Get shipping_total
     * @return string|null
     */
    public function getShippingTotal();

    /**
     * Set shipping_total
     * @param string $shippingTotal
     * @return \Lof\EtsySync\Api\Data\EtsyOrderInterface
     */
    public function setShippingTotal($shippingTotal);

    /**
     * Get discount_total
     * @return string|null
     */
    public function getDiscountTotal();

    /**
     * Set discount_total
     * @param string $discountTotal
     * @return \Lof\EtsySync\Api\Data\EtsyOrderInterface
     */
    public function setDiscountTotal($discountTotal);

    /**
     * Get total
     * @return string|null
     */
    public function getTotal();

    /**
     * Set total
     * @param string $total
     * @return \Lof\EtsySync\Api\Data\EtsyOrderInterface
     */
    public function setTotal($total);

    /**
     * Get total_with_tax
     * @return string|null
     */
    public function getTotalWithTax();

    /**
     * Set total_with_tax
     * @param string $totalWithTax
     * @return \Lof\EtsySync\Api\Data\EtsyOrderInterface
     */
    public function setTotalWithTax($totalWithTax);

    /**
     * Get customer_note
     * @return string|null
     */
    public function getCustomerNote();

    /**
     * Set customer_note
     * @param string $customerNote
     * @return \Lof\EtsySync\Api\Data\EtsyOrderInterface
     */
    public function setCustomerNote($customerNote);

    /**
     * Get buyer_id
     * @return string|null
     */
    public function getBuyerId();

    /**
     * Set buyer_id
     * @param string $buyerId
     * @return \Lof\EtsySync\Api\Data\EtsyOrderInterface
     */
    public function setBuyerId($buyerId);

    /**
     * Get platform_customer_id
     * @return string|null
     */
    public function getPlatformCustomerId();

    /**
     * Set platform_customer_id
     * @param string $platformCustomerId
     * @return \Lof\EtsySync\Api\Data\EtsyOrderInterface
     */
    public function setPlatformCustomerId($platformCustomerId);

    /**
     * Get payment_method
     * @return string|null
     */
    public function getPaymentMethod();

    /**
     * Set payment_method
     * @param string $paymentMethod
     * @return \Lof\EtsySync\Api\Data\EtsyOrderInterface
     */
    public function setPaymentMethod($paymentMethod);

    /**
     * Get line_items
     * @return string|null
     */
    public function getLineItems();

    /**
     * Set line_items
     * @param string $lineItems
     * @return \Lof\EtsySync\Api\Data\EtsyOrderInterface
     */
    public function setLineItems($lineItems);

    /**
     * Get shipping
     * @return string|null
     */
    public function getShipping();

    /**
     * Set shipping
     * @param string $shipping
     * @return \Lof\EtsySync\Api\Data\EtsyOrderInterface
     */
    public function setShipping($shipping);

    /**
     * Get billing
     * @return string|null
     */
    public function getBilling();

    /**
     * Set billing
     * @param string $billing
     * @return \Lof\EtsySync\Api\Data\EtsyOrderInterface
     */
    public function setBilling($billing);

    /**
     * Get tracking
     * @return string|null
     */
    public function getTracking();

    /**
     * Set tracking
     * @param string $tracking
     * @return \Lof\EtsySync\Api\Data\EtsyOrderInterface
     */
    public function setTracking($tracking);

    /**
     * Get magento_order_id
     * @return string|null
     */
    public function getMagentoOrderId();

    /**
     * Set magento_order_id
     * @param string $magentoOrderId
     * @return \Lof\EtsySync\Api\Data\EtsyOrderInterface
     */
    public function setMagentoOrderId($magentoOrderId);

    /**
     * Get magento_customer_id
     * @return string|null
     */
    public function getMagentoCustomerId();

    /**
     * Set magento_customer_id
     * @param string $magentoCustomerId
     * @return \Lof\EtsySync\Api\Data\EtsyOrderInterface
     */
    public function setMagentoCustomerId($magentoCustomerId);
}

