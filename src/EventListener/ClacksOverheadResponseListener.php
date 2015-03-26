<?php
/**
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 */
namespace BD\GNUTerryPratchettBundle\EventListener;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\FilterResponseEvent;
use Symfony\Component\HttpKernel\KernelEvents;

class ClacksOverheadResponseListener implements EventSubscriberInterface
{
    public static function getSubscribedEvents() {
        return [KernelEvents::RESPONSE => 'onKernelResponse'];
    }

    public function onKernelResponse( FilterResponseEvent $event )
    {
        $event->getResponse()->headers->set( 'X-Clacks-Overhead', 'GNU Terry Pratchett' );
    }
}
