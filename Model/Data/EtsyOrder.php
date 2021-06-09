<?php
/**
 * Copyright © Landofcoder All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Lof\EtsySync\Model\Data;

use Lof\EtsySync\Api\Data\EtsyOrderInterface;

class EtsyOrder extends \Magento\Framework\Api\AbstractExtensibleObject implements EtsyOrderInterface
{

    /**
     * Get etsyorder_id
     * @return string|null
     */
    public function getEtsyorderId()
    {
        return $this->_get(self::ETSYORDER_ID);
    }

    /**
     * Set etsyorder_id
     * @param string $etsyorderId
     * @return \Lof\EtsySync\Api\Data\EtsyOrderInterface
     */
    public function setEtsyorderId($etsyorderId)
    {
        return $this->setData(self::ETSYORDER_ID, $etsyorderId);
    }

    /**
     * Get entity_id
     * @return string|null
     */
    public function getEntityId()
    {
        return $this->_get(self::ENTITY_ID);
    }

    /**
     * Set entity_id
     * @param string $entityId
     * @return \Lof\EtsySync\Api\Data\EtsyOrderInterface
     */
    public function setEntityId($entityId)
    {
        return $this->setData(self::ENTITY_ID, $entityId);
    }

    /**
     * Retrieve existing extension attributes object or create a new one.
     * @return \Lof\EtsySync\Api\Data\EtsyOrderExtensionInterface|null
     */
    public function getExtensionAttributes()
    {
        return $this->_getExtensionAttributes();
    }

    /**
     * Set an extension attributes object.
     * @param \Lof\EtsySync\Api\Data\EtsyOrderExtensionInterface $extensionAttributes
     * @return $this
     */
    public function setExtensionAttributes(
        \Lof\EtsySync\Api\Data\EtsyOrderExtensionInterface $extensionAttributes
    ) {
        return $this->_setExtensionAttributes($extensionAttributes);
    }

    /**
     * Get platform_id
     * @return string|null
     */
    public function getPlatformId()
    {
        return $this->_get(self::PLATFORM_ID);
    }

    /**
     * Set platform_id
     * @param string $platformId
     * @return \Lof\EtsySync\Api\Data\EtsyOrderInterface
     */
    public function setPlatformId($platformId)
    {
        return $this->setData(self::PLATFORM_ID, $platformId);
    }

    /**
     * Get created_at
     * @return string|null
     */
    public function getCreatedAt()
    {
        return $this->_get(self::CREATED_AT);
    }

    /**
     * Set created_at
     * @param string $createdAt
     * @return \Lof\EtsySync\Api\Data\EtsyOrderInterface
     */
    public function setCreatedAt($createdAt)
    {
        return $this->setData(self::CREATED_AT, $createdAt);
    }

    /**
     * Get updated_at
     * @return string|null
     */
    public function getUpdatedAt()
    {
        return $this->_get(self::UPDATED_AT);
    }

    /**
     * Set updated_at
     * @param string $updatedAt
     * @return \Lof\EtsySync\Api\Data\EtsyOrderInterface
     */
    public function setUpdatedAt($updatedAt)
    {
        return $this->setData(self::UPDATED_AT, $updatedAt);
    }

    /**
     * Get imported_at
     * @return string|null
     */
    public function getImportedAt()
    {
        return $this->_get(self::IMPORTED_AT);
    }

    /**
     * Set imported_at
     * @param string $importedAt
     * @return \Lof\EtsySync\Api\Data\EtsyOrderInterface
     */
    public function setImportedAt($importedAt)
    {
        return $this->setData(self::IMPORTED_AT, $importedAt);
    }

    /**
     * Get currency
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->_get(self::CURRENCY);
    }

    /**
     * Set currency
     * @param string $currency
     * @return \Lof\EtsySync\Api\Data\EtsyOrderInterface
     */
    public function setCurrency($currency)
    {
        return $this->setData(self::CURRENCY, $currency);
    }

    /**
     * Get status
     * @return string|null
     */
    public function getStatus()
    {
        return $this->_get(self::STATUS);
    }

    /**
     * Set status
     * @param string $status
     * @return \Lof\EtsySync\Api\Data\EtsyOrderInterface
     */
    public function setStatus($status)
    {
        return $this->setData(self::STATUS, $status);
    }

    /**
     * Get shipping_total
     * @return string|null
     */
    public function getShippingTotal()
    {
        return $this->_get(self::SHIPPING_TOTAL);
    }

    /**
     * Set shipping_total
     * @param string $shippingTotal
     * @return \Lof\EtsySync\Api\Data\EtsyOrderInterface
     */
    public function setShippingTotal($shippingTotal)
    {
        return $this->setData(self::SHIPPING_TOTAL, $shippingTotal);
    }

    /**
     * Get discount_total
     * @return string|null
     */
    public function getDiscountTotal()
    {
        return $this->_get(self::DISCOUNT_TOTAL);
    }

    /**
     * Set discount_total
     * @param string $discountTotal
     * @return \Lof\EtsySync\Api\Data\EtsyOrderInterface
     */
    public function setDiscountTotal($discountTotal)
    {
        return $this->setData(self::DISCOUNT_TOTAL, $discountTotal);
    }

    /**
     * Get total
     * @return string|null
     */
    public function getTotal()
    {
        return $this->_get(self::TOTAL);
    }

    /**
     * Set total
     * @param string $total
     * @return \Lof\EtsySync\Api\Data\EtsyOrderInterface
     */
    public function setTotal($total)
    {
        return $this->setData(self::TOTAL, $total);
    }

    /**
     * Get total_with_tax
     * @return string|null
     */
    public function getTotalWithTax()
    {
        return $this->_get(self::TOTAL_WITH_TAX);
    }

    /**
     * Set total_with_tax
     * @param string $totalWithTax
     * @return \Lof\EtsySync\Api\Data\EtsyOrderInterface
     */
    public function setTotalWithTax($totalWithTax)
    {
        return $this->setData(self::TOTAL_WITH_TAX, $totalWithTax);
    }

    /**
     * Get customer_note
     * @return string|null
     */
    public function getCustomerNote()
    {
        return $this->_get(self::CUSTOMER_NOTE);
    }

    /**
     * Set customer_note
     * @param string $customerNote
     * @return \Lof\EtsySync\Api\Data\EtsyOrderInterface
     */
    public function setCustomerNote($customerNote)
    {
        return $this->setData(self::CUSTOMER_NOTE, $customerNote);
    }

    /**
     * Get buyer_id
     * @return string|null
     */
    public function getBuyerId()
    {
        return $this->_get(self::BUYER_ID);
    }

    /**
     * Set buyer_id
     * @param string $buyerId
     * @return \Lof\EtsySync\Api\Data\EtsyOrderInterface
     */
    public function setBuyerId($buyerId)
    {
        return $this->setData(self::BUYER_ID, $buyerId);
    }

    /**
     * Get platform_customer_id
     * @return string|null
     */
    public function getPlatformCustomerId()
    {
        return $this->_get(self::PLATFORM_CUSTOMER_ID);
    }

    /**
     * Set platform_customer_id
     * @param string $platformCustomerId
     * @return \Lof\EtsySync\Api\Data\EtsyOrderInterface
     */
    public function setPlatformCustomerId($platformCustomerId)
    {
        return $this->setData(self::PLATFORM_CUSTOMER_ID, $platformCustomerId);
    }

    /**
     * Get payment_method
     * @return string|null
     */
    public function getPaymentMethod()
    {
        return $this->_get(self::PAYMENT_METHOD);
    }

    /**
     * Set payment_method
     * @param string $paymentMethod
     * @return \Lof\EtsySync\Api\Data\EtsyOrderInterface
     */
    public function setPaymentMethod($paymentMethod)
    {
        return $this->setData(self::PAYMENT_METHOD, $paymentMethod);
    }

    /**
     * Get line_items
     * @return string|null
     */
    public function getLineItems()
    {
        return $this->_get(self::LINE_ITEMS);
    }

    /**
     * Set line_items
     * @param string $lineItems
     * @return \Lof\EtsySync\Api\Data\EtsyOrderInterface
     */
    public function setLineItems($lineItems)
    {
        return $this->setData(self::LINE_ITEMS, $lineItems);
    }

    /**
     * Get shipping
     * @return string|null
     */
    public function getShipping()
    {
        return $this->_get(self::SHIPPING);
    }

    /**
     * Set shipping
     * @param string $shipping
     * @return \Lof\EtsySync\Api\Data\EtsyOrderInterface
     */
    public function setShipping($shipping)
    {
        return $this->setData(self::SHIPPING, $shipping);
    }

    /**
     * Get billing
     * @return string|null
     */
    public function getBilling()
    {
        return $this->_get(self::BILLING);
    }

    /**
     * Set billing
     * @param string $billing
     * @return \Lof\EtsySync\Api\Data\EtsyOrderInterface
     */
    public function setBilling($billing)
    {
        return $this->setData(self::BILLING, $billing);
    }

    /**
     * Get tracking
     * @return string|null
     */
    public function getTracking()
    {
        return $this->_get(self::TRACKING);
    }

    /**
     * Set tracking
     * @param string $tracking
     * @return \Lof\EtsySync\Api\Data\EtsyOrderInterface
     */
    public function setTracking($tracking)
    {
        return $this->setData(self::TRACKING, $tracking);
    }

    /**
     * Get magento_order_id
     * @return string|null
     */
    public function getMagentoOrderId()
    {
        return $this->_get(self::MAGENTO_ORDER_ID);
    }

    /**
     * Set magento_order_id
     * @param string $magentoOrderId
     * @return \Lof\EtsySync\Api\Data\EtsyOrderInterface
     */
    public function setMagentoOrderId($magentoOrderId)
    {
        return $this->setData(self::MAGENTO_ORDER_ID, $magentoOrderId);
    }

    /**
     * Get magento_customer_id
     * @return string|null
     */
    public function getMagentoCustomerId()
    {
        return $this->_get(self::MAGENTO_CUSTOMER_ID);
    }

    /**
     * Set magento_customer_id
     * @param string $magentoCustomerId
     * @return \Lof\EtsySync\Api\Data\EtsyOrderInterface
     */
    public function setMagentoCustomerId($magentoCustomerId)
    {
        return $this->setData(self::MAGENTO_CUSTOMER_ID, $magentoCustomerId);
    }
}

