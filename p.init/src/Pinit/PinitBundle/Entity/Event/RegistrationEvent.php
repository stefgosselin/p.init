<?php

namespace Pinit\PinitBundle\Entity\Event;

use Symfony\Component\EventDispatcher\Event;
use Pinit\PinitBundle\Entity\Registration;

class RegistrationEvent extends Event
{
    const CREATED = 'registration.created';

    protected $registration;

    public function __construct(Registration $registration)
    {
        $this->registration = $registration;
    }

    /**
     * @return Registration
     */
    public function getRegistration()
    {
        return $this->registration;
    }
}
