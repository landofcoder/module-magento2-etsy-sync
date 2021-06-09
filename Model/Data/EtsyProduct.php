<?php
/**
 * Copyright © Landofcoder All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Lof\EtsySync\Model\Data;

use Lof\EtsySync\Api\Data\EtsyProductInterface;

class EtsyProduct extends \Magento\Framework\Api\AbstractExtensibleObject implements EtsyProductInterface
{

    /**
     * Get etsyproduct_id
     * @return string|null
     */
    public function getEtsyproductId()
    {
        return $this->_get(self::ETSYPRODUCT_ID);
    }

    /**
     * Set etsyproduct_id
     * @param string $etsyproductId
     * @return \Lof\EtsySync\Api\Data\EtsyProductInterface
     */
    public function setEtsyproductId($etsyproductId)
    {
        return $this->setData(self::ETSYPRODUCT_ID, $etsyproductId);
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
     * @return \Lof\EtsySync\Api\Data\EtsyProductInterface
     */
    public function setEntityId($entityId)
    {
        return $this->setData(self::ENTITY_ID, $entityId);
    }

    /**
     * Retrieve existing extension attributes object or create a new one.
     * @return \Lof\EtsySync\Api\Data\EtsyProductExtensionInterface|null
     */
    public function getExtensionAttributes()
    {
        return $this->_getExtensionAttributes();
    }

    /**
     * Set an extension attributes object.
     * @param \Lof\EtsySync\Api\Data\EtsyProductExtensionInterface $extensionAttributes
     * @return $this
     */
    public function setExtensionAttributes(
        \Lof\EtsySync\Api\Data\EtsyProductExtensionInterface $extensionAttributes
    ) {
        return $this->_setExtensionAttributes($extensionAttributes);
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
     * @return \Lof\EtsySync\Api\Data\EtsyProductInterface
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
     * @return \Lof\EtsySync\Api\Data\EtsyProductInterface
     */
    public function setUpdatedAt($updatedAt)
    {
        return $this->setData(self::UPDATED_AT, $updatedAt);
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
     * @return \Lof\EtsySync\Api\Data\EtsyProductInterface
     */
    public function setPlatformId($platformId)
    {
        return $this->setData(self::PLATFORM_ID, $platformId);
    }

    /**
     * Get store_id
     * @return string|null
     */
    public function getStoreId()
    {
        return $this->_get(self::STORE_ID);
    }

    /**
     * Set store_id
     * @param string $storeId
     * @return \Lof\EtsySync\Api\Data\EtsyProductInterface
     */
    public function setStoreId($storeId)
    {
        return $this->setData(self::STORE_ID, $storeId);
    }

    /**
     * Get name
     * @return string|null
     */
    public function getName()
    {
        return $this->_get(self::NAME);
    }

    /**
     * Set name
     * @param string $name
     * @return \Lof\EtsySync\Api\Data\EtsyProductInterface
     */
    public function setName($name)
    {
        return $this->setData(self::NAME, $name);
    }

    /**
     * Get slug
     * @return string|null
     */
    public function getSlug()
    {
        return $this->_get(self::SLUG);
    }

    /**
     * Set slug
     * @param string $slug
     * @return \Lof\EtsySync\Api\Data\EtsyProductInterface
     */
    public function setSlug($slug)
    {
        return $this->setData(self::SLUG, $slug);
    }

    /**
     * Get permalink
     * @return string|null
     */
    public function getPermalink()
    {
        return $this->_get(self::PERMALINK);
    }

    /**
     * Set permalink
     * @param string $permalink
     * @return \Lof\EtsySync\Api\Data\EtsyProductInterface
     */
    public function setPermalink($permalink)
    {
        return $this->setData(self::PERMALINK, $permalink);
    }

    /**
     * Get type
     * @return string|null
     */
    public function getType()
    {
        return $this->_get(self::TYPE);
    }

    /**
     * Set type
     * @param string $type
     * @return \Lof\EtsySync\Api\Data\EtsyProductInterface
     */
    public function setType($type)
    {
        return $this->setData(self::TYPE, $type);
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
     * @return \Lof\EtsySync\Api\Data\EtsyProductInterface
     */
    public function setStatus($status)
    {
        return $this->setData(self::STATUS, $status);
    }

    /**
     * Get description
     * @return string|null
     */
    public function getDescription()
    {
        return $this->_get(self::DESCRIPTION);
    }

    /**
     * Set description
     * @param string $description
     * @return \Lof\EtsySync\Api\Data\EtsyProductInterface
     */
    public function setDescription($description)
    {
        return $this->setData(self::DESCRIPTION, $description);
    }

    /**
     * Get price
     * @return string|null
     */
    public function getPrice()
    {
        return $this->_get(self::PRICE);
    }

    /**
     * Set price
     * @param string $price
     * @return \Lof\EtsySync\Api\Data\EtsyProductInterface
     */
    public function setPrice($price)
    {
        return $this->setData(self::PRICE, $price);
    }

    /**
     * Get sale_price
     * @return string|null
     */
    public function getSalePrice()
    {
        return $this->_get(self::SALE_PRICE);
    }

    /**
     * Set sale_price
     * @param string $salePrice
     * @return \Lof\EtsySync\Api\Data\EtsyProductInterface
     */
    public function setSalePrice($salePrice)
    {
        return $this->setData(self::SALE_PRICE, $salePrice);
    }

    /**
     * Get tax
     * @return string|null
     */
    public function getTax()
    {
        return $this->_get(self::TAX);
    }

    /**
     * Set tax
     * @param string $tax
     * @return \Lof\EtsySync\Api\Data\EtsyProductInterface
     */
    public function setTax($tax)
    {
        return $this->setData(self::TAX, $tax);
    }

    /**
     * Get weight
     * @return string|null
     */
    public function getWeight()
    {
        return $this->_get(self::WEIGHT);
    }

    /**
     * Set weight
     * @param string $weight
     * @return \Lof\EtsySync\Api\Data\EtsyProductInterface
     */
    public function setWeight($weight)
    {
        return $this->setData(self::WEIGHT, $weight);
    }

    /**
     * Get shipping_info
     * @return string|null
     */
    public function getShippingInfo()
    {
        return $this->_get(self::SHIPPING_INFO);
    }

    /**
     * Set shipping_info
     * @param string $shippingInfo
     * @return \Lof\EtsySync\Api\Data\EtsyProductInterface
     */
    public function setShippingInfo($shippingInfo)
    {
        return $this->setData(self::SHIPPING_INFO, $shippingInfo);
    }

    /**
     * Get categories
     * @return string|null
     */
    public function getCategories()
    {
        return $this->_get(self::CATEGORIES);
    }

    /**
     * Set categories
     * @param string $categories
     * @return \Lof\EtsySync\Api\Data\EtsyProductInterface
     */
    public function setCategories($categories)
    {
        return $this->setData(self::CATEGORIES, $categories);
    }

    /**
     * Get tags
     * @return string|null
     */
    public function getTags()
    {
        return $this->_get(self::TAGS);
    }

    /**
     * Set tags
     * @param string $tags
     * @return \Lof\EtsySync\Api\Data\EtsyProductInterface
     */
    public function setTags($tags)
    {
        return $this->setData(self::TAGS, $tags);
    }

    /**
     * Get images
     * @return string|null
     */
    public function getImages()
    {
        return $this->_get(self::IMAGES);
    }

    /**
     * Set images
     * @param string $images
     * @return \Lof\EtsySync\Api\Data\EtsyProductInterface
     */
    public function setImages($images)
    {
        return $this->setData(self::IMAGES, $images);
    }

    /**
     * Get attributes
     * @return string|null
     */
    public function getAttributes()
    {
        return $this->_get(self::ATTRIBUTES);
    }

    /**
     * Set attributes
     * @param string $attributes
     * @return \Lof\EtsySync\Api\Data\EtsyProductInterface
     */
    public function setAttributes($attributes)
    {
        return $this->setData(self::ATTRIBUTES, $attributes);
    }

    /**
     * Get variations
     * @return string|null
     */
    public function getVariations()
    {
        return $this->_get(self::VARIATIONS);
    }

    /**
     * Set variations
     * @param string $variations
     * @return \Lof\EtsySync\Api\Data\EtsyProductInterface
     */
    public function setVariations($variations)
    {
        return $this->setData(self::VARIATIONS, $variations);
    }

    /**
     * Get variations_info
     * @return string|null
     */
    public function getVariationsInfo()
    {
        return $this->_get(self::VARIATIONS_INFO);
    }

    /**
     * Set variations_info
     * @param string $variationsInfo
     * @return \Lof\EtsySync\Api\Data\EtsyProductInterface
     */
    public function setVariationsInfo($variationsInfo)
    {
        return $this->setData(self::VARIATIONS_INFO, $variationsInfo);
    }

    /**
     * Get magento_product_id
     * @return string|null
     */
    public function getMagentoProductId()
    {
        return $this->_get(self::MAGENTO_PRODUCT_ID);
    }

    /**
     * Set magento_product_id
     * @param string $magentoProductId
     * @return \Lof\EtsySync\Api\Data\EtsyProductInterface
     */
    public function setMagentoProductId($magentoProductId)
    {
        return $this->setData(self::MAGENTO_PRODUCT_ID, $magentoProductId);
    }

    /**
     * Get product_sku
     * @return string|null
     */
    public function getProductSku()
    {
        return $this->_get(self::PRODUCT_SKU);
    }

    /**
     * Set product_sku
     * @param string $productSku
     * @return \Lof\EtsySync\Api\Data\EtsyProductInterface
     */
    public function setProductSku($productSku)
    {
        return $this->setData(self::PRODUCT_SKU, $productSku);
    }
}

