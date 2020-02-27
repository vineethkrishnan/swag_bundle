<?php declare(strict_types=1);


namespace SwagBundleExample\Core\Content\Bundle\Aggregate\BundleProduct;


use Shopware\Core\Content\Product\ProductDefinition;
use Shopware\Core\Framework\DataAbstractionLayer\Field\CreatedAtField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\FkField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\PrimaryKey;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\Required;
use Shopware\Core\Framework\DataAbstractionLayer\Field\ManyToOneAssociationField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\ReferenceVersionField;
use Shopware\Core\Framework\DataAbstractionLayer\FieldCollection;
use Shopware\Core\Framework\DataAbstractionLayer\MappingEntityDefinition;
use SwagBundleExample\Core\Content\Bundle\BundleDefinition;

class BundleProductDefinition extends  MappingEntityDefinition
{

    public const ENTITY_NAME = 'swag_bundle_product';

    public function getEntityName(): string
    {
        return self::ENTITY_NAME;
    }

    protected function defineFields(): FieldCollection
    {
        return new FieldCollection([
            (new FkField('bundle_id', 'bundleId', BundleDefinition::class))->addFlags(new Required(), new PrimaryKey()),
            (new FkField('product_id', 'productId', ProductDefinition::class))->addFlags(new PrimaryKey(), new Required()),
            (new ReferenceVersionField(ProductDefinition::class))->addFlags(new PrimaryKey(), new Required()),
            (new ManyToOneAssociationField('bundle', 'bundle_id', BundleDefinition::class)),
            (new ManyToOneAssociationField('product', 'product_id', ProductDefinition::class)),
            new CreatedAtField()
        ]);
    }
}
