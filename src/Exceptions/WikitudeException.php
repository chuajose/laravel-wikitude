<?php
/*
 * This file is part of laravel-wikitude.
 *
 * (c) Jose Suárez <chua.jose@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Jsuarez\Wikitude\Exceptions;

use Exception;

class WikitudeException extends Exception
{
    /**
     * @param  string  $message
     * @param  int  $code
     * @param  \Exception|null  $previous
     *
     * @return void
     */
    public function __construct($message, $code) {
        parent::__construct($message, $code);
    }
    
    public function __toString() {
        return "{$this->code}: {$this->message}";
    }
}
