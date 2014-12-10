<?php

namespace Pinit\PinitBundle\Entity\Listener;

use JMS\DiExtraBundle\Annotation as DI;
use Pinit\PinitBundle\Entity\Event\RegistrationEvent;
use Pinit\PinitBundle\Service\Mailer;

/**
 * @DI\Service
 */
class RegistrationListener
{
    private $mailer;

    private $adminEmail;

    /**
     * @DI\InjectParams({
     *     "mailer" = @DI\Inject("pinit.mailer"),
     *     "adminEmail" = @DI\Inject("%admin_email%")
     * })
     */
    public function __construct(Mailer $mailer, $adminEmail)
    {
        $this->mailer = $mailer;
        $this->adminEmail = $adminEmail;
    }

    /**
     * @DI\Observe(RegistrationEvent::CREATED)
     */
    public function onRegistrationCreated(RegistrationEvent $event)
    {
        $this->mailer->send(
            (new \Swift_Message())->setTo($this->adminEmail),
            'PinitBundle:Registration:notification.html.twig',
            ['registration' => $event->getRegistration()]
        );
    }
}
