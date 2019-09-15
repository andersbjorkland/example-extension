<?php

declare(strict_types=1);

namespace AcmeCorp\ReferenceExtension;

use Symfony\Component\HttpKernel\Event\ResponseEvent;

class EventListener
{
    public function handleEvent(ResponseEvent $event): void
    {
        $content = $event->getResponse()->getContent();
        $content .= "\n<!-- It works! -->\n";

        $event->getResponse()->setContent($content);
    }
}
