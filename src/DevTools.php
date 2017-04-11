<?php

/*
 +------------------------------------------------------------------------+
 | Phalcon Developer Tools                                                |
 +------------------------------------------------------------------------+
 | Copyright (c) 2011-2017 Phalcon Team (https://www.phalconphp.com)      |
 +------------------------------------------------------------------------+
 | This source file is subject to the New BSD License that is bundled     |
 | with this package in the file LICENSE.txt.                             |
 |                                                                        |
 | If you did not receive a copy of the license and are unable to         |
 | obtain it through the world-wide-web, please send an email             |
 | to license@phalconphp.com so we can send you a copy immediately.       |
 +------------------------------------------------------------------------+
*/

namespace Phalcon;

use Phalcon\Di\FactoryDefault;

class DevTools
{
    /**
     * The application mode.
     * @var string
     */
    private $mode;

    /**
     * The Dependency Injection Container
     * @var DiInterface
     */
    private $di;

    /**
     * DevTools constructor.
     *
     * @param string $mode The application mode: "web", "cli".
     */
    public function __construct($mode = 'web')
    {
        $this->mode = $mode;

        $this->di = new FactoryDefault();
        $this->di->setShared('app', $this);

        Di::setDefault($this->di);
    }
}
