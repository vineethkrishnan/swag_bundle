<?php


namespace SwagBundleExample\Core\Content\Product;


use Shopware\Core\Content\Product\ProductDefinition;
use Shopware\Core\Framework\DataAbstractionLayer\EntityExtensionInterface;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\Inherited;
use Shopware\Core\Framework\DataAbstractionLayer\Field\ManyToManyAssociationField;
use Shopware\Core\Framework\DataAbstractionLayer\FieldCollection;
use SwagBundleExample\Core\Content\Bundle\Aggregate\BundleProduct\BundleProductDefinition;
use SwagBundleExample\Core\Content\Bundle\BundleDefinition;

class ProductExtension implements EntityExtensionInterface
{

    public function extendFields(FieldCollection $collection): void
    {
        $collection->add(
            (new ManyToManyAssociationField('bundles', BundleDefinition::class, BundleProductDefinition::class,'product_id', 'bundle_id'))->addFlags(new Inherited())
        );
    }

    public function getDefinitionClass(): string
    {
        return ProductDefinition::class;
    }
}
