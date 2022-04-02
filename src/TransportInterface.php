<?php

declare(strict_types=1);

namespace Postboy\Contract\Transport;

use Postboy\Contract\Message\MessageInterface;
use Postboy\Contract\Transport\Exception\RecipientsListIsEmptyException;
use Postboy\Contract\Transport\Exception\TransportException;

interface TransportInterface
{
    /**
     * @param MessageInterface $message
     * @return void
     * @throws TransportException
     * @throws RecipientsListIsEmptyException
     */
    public function send(MessageInterface $message): void;
}
