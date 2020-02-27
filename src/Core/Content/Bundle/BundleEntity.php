<?php


namespace SwagBundleExample\Core\Content\Bundle;


use Shopware\Core\Content\Product\ProductCollection;
use Shopware\Core\Framework\DataAbstractionLayer\Entity;
use Shopware\Core\Framework\DataAbstractionLayer\EntityIdTrait;

/**
 * Class BundleEntity
 * @package SwagBundleExample\Core\Content\Bundle
 */
class BundleEntity extends  Entity
{

    use EntityIdTrait;

    /**
     * @var
     */
    protected $discountType;

    /**
     * @var
     */
    protected $discount;

    /**
     * @var
     */
    protected $products;

    /**
     * @return ProductCollection
     */
    public function getProducts() : ProductCollection
    {
        return $this->products;
    }

    /**
     * @param ProductCollection $products
     */
    public function setProducts(ProductCollection $products): void
    {
        $this->products = $products;
    }

    /**
     * @return mixed
     */
    public function getDiscountType()
    {
        return $this->discountType;
    }

    /**
     * @param mixed $discountType
     */
    public function setDiscountType($discountType): void
    {
        $this->discountType = $discountType;
    }

    /**
     * @return mixed
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * @param mixed $discount
     */
    public function setDiscount($discount): void
    {
        $this->discount = $discount;
    }

}
