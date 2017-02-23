<?php

/*
 * This file is part of jwt-auth.
 *
 * (c) Sean Tymon <tymon148@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Jsuarez\Wikitude\Exceptions;

use Jsuarez\Wikitude\Exceptions\WikitudeException;

class WikitudeServiceException extends WikitudeException
{
    private $reason = null;
    public function __construct($message, $code, $reason) {
        parent::__construct($message, $code);
        $this->reason = $reason;
    }
    public function __toString() {
        return "{$this->reason} ({$this->code}): {$this->message}";
    }
}
