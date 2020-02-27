<?php declare(strict_types=1);

namespace SwagBundleExample;

use Shopware\Core\Framework\DataAbstractionLayer\Indexing\Indexer\InheritanceIndexer;
use Shopware\Core\Framework\DataAbstractionLayer\Indexing\MessageQueue\IndexerMessageSender;
use Shopware\Core\Framework\Plugin;
use Shopware\Core\Framework\Plugin\Context\ActivateContext;

class SwagBundleExample extends Plugin
{
    public function activate(ActivateContext $activateContext): void
    {
        $indexMessageSender = $this->container->get(IndexerMessageSender::class);
        $indexMessageSender->partial(new \DateTimeImmutable(),[InheritanceIndexer::getName()]);
        parent::activate($activateContext);
    }

}
