<?php

namespace AppBundle\Utils\Services\Mailer;

class ContactMailer
{

     /**
     * @var \Swift_Mailer
     */
    private $swiftMailer;

    private $fromEmail;

    private $fromName;

    private $adminEmail;

    public function __construct(\Swift_Mailer $swiftMailer, $fromEmail, $fromName, $adminEmail)
    {
        $this->swiftMailer = $swiftMailer;
        $this->fromEmail = $fromEmail;
        $this->fromName = $fromName;
        $this->adminEmail = $adminEmail;
    }

    public function send($subject, $htmlBody)
    {
        $message = \Swift_Message::newInstance()
                        ->setSubject($subject)
                        ->setFrom($this->fromEmail, $this->fromName)
                        ->setTo($this->adminEmail)
                        ->setBody($htmlBody, 'text/html');

        $this->swiftMailer->send($message);
    }
}
