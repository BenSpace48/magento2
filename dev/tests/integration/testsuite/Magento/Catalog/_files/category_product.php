<?php
/**
 * Copyright © 2013-2017 Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

$category = \Magento\TestFramework\Helper\Bootstrap::getObjectManager()->create(\Magento\Catalog\Model\Category::class);
$category->isObjectNew(true);
$category->setId(
    333
)->setCreatedAt(
    '2014-06-23 09:50:07'
)->setName(
    'Category 1'
)->setParentId(
    2
)->setPath(
    '1/2/3'
)->setLevel(
    2
)->setAvailableSortBy(
    'name'
)->setDefaultSortBy(
    'name'
)->setIsActive(
    true
)->setPosition(
    1
)->setAvailableSortBy(
    ['position']
)->save();

/** @var $product \Magento\Catalog\Model\Product */
$product = \Magento\TestFramework\Helper\Bootstrap::getObjectManager()->create(\Magento\Catalog\Model\Product::class);
$product->setTypeId(
    \Magento\Catalog\Model\Product\Type::TYPE_SIMPLE
)->setId(
    333
)->setAttributeSetId(
    4
)->setStoreId(
    1
)->setWebsiteIds(
    [1]
)->setName(
    'Simple Product Three'
)->setSku(
    'simple333'
)->setPrice(
    10
)->setWeight(
    18
)->setStockData(
    ['use_config_manage_stock' => 0]
)->setCategoryIds(
    [333]
)->setVisibility(
    \Magento\Catalog\Model\Product\Visibility::VISIBILITY_BOTH
)->setStatus(
    \Magento\Catalog\Model\Product\Attribute\Source\Status::STATUS_ENABLED
)->save();
