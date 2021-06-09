<?php
/**
 * Copyright © Landofcoder All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Lof\EtsySync\Api\Data;

interface EtsyProductInterface extends \Magento\Framework\Api\ExtensibleDataInterface
{

    const UPDATED_AT = 'updated_at';
    const ENTITY_ID = 'entity_id';
    const VARIATIONS_INFO = 'variations_info';
    const CREATED_AT = 'created_at';
    const PRODUCT_SKU = 'product_sku';
    const SALE_PRICE = 'sale_price';
    const VARIATIONS = 'variations';
    const ETSYPRODUCT_ID = 'etsyproduct_id';
    const TAGS = 'tags';
    const STORE_ID = 'store_id';
    const PLATFORM_ID = 'platform_id';
    const WEIGHT = 'weight';
    const TAX = 'tax';
    const PRICE = 'price';
    const PERMALINK = 'permalink';
    const IMAGES = 'images';
    const NAME = 'name';
    const SLUG = 'slug';
    const CATEGORIES = 'categories';
    const TYPE = 'type';
    const ATTRIBUTES = 'attributes';
    const DESCRIPTION = 'description';
    const STATUS = 'status';
    const SHIPPING_INFO = 'shipping_info';
    const MAGENTO_PRODUCT_ID = 'magento_product_id';

    /**
     * Get etsyproduct_id
     * @return string|null
     */
    public function getEtsyproductId();

    /**
     * Set etsyproduct_id
     * @param string $etsyproductId
     * @return \Lof\EtsySync\Api\Data\EtsyProductInterface
     */
    public function setEtsyproductId($etsyproductId);

    /**
     * Get entity_id
     * @return string|null
     */
    public function getEntityId();

    /**
     * Set entity_id
     * @param string $entityId
     * @return \Lof\EtsySync\Api\Data\EtsyProductInterface
     */
    public function setEntityId($entityId);

    /**
     * Retrieve existing extension attributes object or create a new one.
     * @return \Lof\EtsySync\Api\Data\EtsyProductExtensionInterface|null
     */
    public function getExtensionAttributes();

    /**
     * Set an extension attributes object.
     * @param \Lof\EtsySync\Api\Data\EtsyProductExtensionInterface $extensionAttributes
     * @return $this
     */
    public function setExtensionAttributes(
        \Lof\EtsySync\Api\Data\EtsyProductExtensionInterface $extensionAttributes
    );

    /**
     * Get created_at
     * @return string|null
     */
    public function getCreatedAt();

    /**
     * Set created_at
     * @param string $createdAt
     * @return \Lof\EtsySync\Api\Data\EtsyProductInterface
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
     * @return \Lof\EtsySync\Api\Data\EtsyProductInterface
     */
    public function setUpdatedAt($updatedAt);

    /**
     * Get platform_id
     * @return string|null
     */
    public function getPlatformId();

    /**
     * Set platform_id
     * @param string $platformId
     * @return \Lof\EtsySync\Api\Data\EtsyProductInterface
     */
    public function setPlatformId($platformId);

    /**
     * Get store_id
     * @return string|null
     */
    public function getStoreId();

    /**
     * Set store_id
     * @param string $storeId
     * @return \Lof\EtsySync\Api\Data\EtsyProductInterface
     */
    public function setStoreId($storeId);

    /**
     * Get name
     * @return string|null
     */
    public function getName();

    /**
     * Set name
     * @param string $name
     * @return \Lof\EtsySync\Api\Data\EtsyProductInterface
     */
    public function setName($name);

    /**
     * Get slug
     * @return string|null
     */
    public function getSlug();

    /**
     * Set slug
     * @param string $slug
     * @return \Lof\EtsySync\Api\Data\EtsyProductInterface
     */
    public function setSlug($slug);

    /**
     * Get permalink
     * @return string|null
     */
    public function getPermalink();

    /**
     * Set permalink
     * @param string $permalink
     * @return \Lof\EtsySync\Api\Data\EtsyProductInterface
     */
    public function setPermalink($permalink);

    /**
     * Get type
     * @return string|null
     */
    public function getType();

    /**
     * Set type
     * @param string $type
     * @return \Lof\EtsySync\Api\Data\EtsyProductInterface
     */
    public function setType($type);

    /**
     * Get status
     * @return string|null
     */
    public function getStatus();

    /**
     * Set status
     * @param string $status
     * @return \Lof\EtsySync\Api\Data\EtsyProductInterface
     */
    public function setStatus($status);

    /**
     * Get description
     * @return string|null
     */
    public function getDescription();

    /**
     * Set description
     * @param string $description
     * @return \Lof\EtsySync\Api\Data\EtsyProductInterface
     */
    public function setDescription($description);

    /**
     * Get price
     * @return string|null
     */
    public function getPrice();

    /**
     * Set price
     * @param string $price
     * @return \Lof\EtsySync\Api\Data\EtsyProductInterface
     */
    public function setPrice($price);

    /**
     * Get sale_price
     * @return string|null
     */
    public function getSalePrice();

    /**
     * Set sale_price
     * @param string $salePrice
     * @return \Lof\EtsySync\Api\Data\EtsyProductInterface
     */
    public function setSalePrice($salePrice);

    /**
     * Get tax
     * @return string|null
     */
    public function getTax();

    /**
     * Set tax
     * @param string $tax
     * @return \Lof\EtsySync\Api\Data\EtsyProductInterface
     */
    public function setTax($tax);

    /**
     * Get weight
     * @return string|null
     */
    public function getWeight();

    /**
     * Set weight
     * @param string $weight
     * @return \Lof\EtsySync\Api\Data\EtsyProductInterface
     */
    public function setWeight($weight);

    /**
     * Get shipping_info
     * @return string|null
     */
    public function getShippingInfo();

    /**
     * Set shipping_info
     * @param string $shippingInfo
     * @return \Lof\EtsySync\Api\Data\EtsyProductInterface
     */
    public function setShippingInfo($shippingInfo);

    /**
     * Get categories
     * @return string|null
     */
    public function getCategories();

    /**
     * Set categories
     * @param string $categories
     * @return \Lof\EtsySync\Api\Data\EtsyProductInterface
     */
    public function setCategories($categories);

    /**
     * Get tags
     * @return string|null
     */
    public function getTags();

    /**
     * Set tags
     * @param string $tags
     * @return \Lof\EtsySync\Api\Data\EtsyProductInterface
     */
    public function setTags($tags);

    /**
     * Get images
     * @return string|null
     */
    public function getImages();

    /**
     * Set images
     * @param string $images
     * @return \Lof\EtsySync\Api\Data\EtsyProductInterface
     */
    public function setImages($images);

    /**
     * Get attributes
     * @return string|null
     */
    public function getAttributes();

    /**
     * Set attributes
     * @param string $attributes
     * @return \Lof\EtsySync\Api\Data\EtsyProductInterface
     */
    public function setAttributes($attributes);

    /**
     * Get variations
     * @return string|null
     */
    public function getVariations();

    /**
     * Set variations
     * @param string $variations
     * @return \Lof\EtsySync\Api\Data\EtsyProductInterface
     */
    public function setVariations($variations);

    /**
     * Get variations_info
     * @return string|null
     */
    public function getVariationsInfo();

    /**
     * Set variations_info
     * @param string $variationsInfo
     * @return \Lof\EtsySync\Api\Data\EtsyProductInterface
     */
    public function setVariationsInfo($variationsInfo);

    /**
     * Get magento_product_id
     * @return string|null
     */
    public function getMagentoProductId();

    /**
     * Set magento_product_id
     * @param string $magentoProductId
     * @return \Lof\EtsySync\Api\Data\EtsyProductInterface
     */
    public function setMagentoProductId($magentoProductId);

    /**
     * Get product_sku
     * @return string|null
     */
    public function getProductSku();

    /**
     * Set product_sku
     * @param string $productSku
     * @return \Lof\EtsySync\Api\Data\EtsyProductInterface
     */
    public function setProductSku($productSku);
}

