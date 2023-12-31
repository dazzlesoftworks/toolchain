<?php

namespace DazzleSoftware\Toolchain\Event;

use Symfony\Component\EventDispatcher\Event as BaseEvent;
use Symfony\Component\EventDispatcher\EventDispatcher as BaseEventDispatcher;

/**
 * Implements Symfony EventDispatcher interface.
 *
 * @package DazzleSoftware\Toolchain\Event
 * @author Dazzle Software
 * @license MIT
 * @deprecated Event classes will be removed in the future. Use PSR-14 implementation instead.
 */
class EventDispatcher extends BaseEventDispatcher
{
    /**
     * @param string $eventName
     * @param BaseEvent|null $event
     * @return BaseEvent|null
     */
    public function dispatch($eventName, BaseEvent $event = null)
    {
        if (null === $event) {
            $event = new Event();
        }

        return parent::dispatch($eventName, $event);
    }
}
