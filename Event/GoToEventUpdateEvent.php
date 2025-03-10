<?php

/*
 * @copyright   2016 Mautic Contributors. All rights reserved
 * @author      Mautic
 *
 * @link        http://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

namespace MauticPlugin\MauticGoToBundle\Event;

use Mautic\CoreBundle\Event\CommonEvent;
use Mautic\LeadBundle\Entity\Lead;

/**
 * Class GoToEventUpdateEvent.
 */
class GoToEventUpdateEvent extends CommonEvent
{
    /**
     * @var
     */
    private $product;
    /**
     * @var
     */
    private $eventName;
    /**
     * @var
     */
    private $eventType;
    /**
     * @var
     */
    private $email;

    /**
     * @var
     */
    private $eventDesc;

    /**
     * @var Lead
     */
    private $lead;

    /**
     * GoToEventUpdateEvent constructor.
     *
     * @param $product
     * @param $eventName
     * @param $eventDesc
     * @param $eventType
     */
    public function __construct($product, $eventName, $eventDesc, $eventType, Lead $lead)
    {
        $this->product   = $product;
        $this->eventName = $eventName;
        $this->eventType = $eventType;
        $this->lead      = $lead;
        $this->email     = $lead->getEmail();
        $this->eventDesc = $eventDesc;
    }

    /**
     * @return mixed
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @return mixed
     */
    public function getEventName()
    {
        return $this->eventName;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return mixed
     */
    public function getEventType()
    {
        return $this->eventType;
    }

    /**
     * @return mixed
     */
    public function getEventDesc()
    {
        return $this->eventDesc;
    }

    /**
     * @return Lead
     */
    public function getLead()
    {
        return $this->lead;
    }
}
