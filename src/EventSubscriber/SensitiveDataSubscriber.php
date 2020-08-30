<?php

declare(strict_types=1);

namespace Endroid\Anonymizer\EventSubscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class SensitiveDataSubscriber implements EventSubscriberInterface
{
    public static function getSubscribedEvents(): array
    {
        return [];
    }
}
