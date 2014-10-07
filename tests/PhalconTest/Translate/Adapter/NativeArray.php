<?php
/**
 * Adapter.php
 * \PhalconTest\Translate\Adapter\NativeArray
 *
 * Translate Adapter NativeArray proxy class
 *
 * PhalconPHP Framework
 *
 * @copyright (c) 2011-2014 Phalcon Team
 * @link      http://www.phalconphp.com
 * @author    Andres Gutierrez <andres@phalconphp.com>
 * @author    Nikolaos Dimopoulos <nikos@phalconphp.com>
 *
 * The contents of this file are subject to the New BSD License that is
 * bundled with this package in the file docs/LICENSE.txt
 *
 * If you did not receive a copy of the license and are unable to obtain it
 * through the world-wide-web, please send an email to license@phalconphp.com
 * so that we can send you a copy immediately.
 */

namespace PhalconTest\Translate\Adapter;

use \PhalconTest\Translate\Adapter as PhAdapter;
use \PhalconTest\Translate\AdapterInterface as PhAdapterInterface;
use \Phalcon\Translate\Adapter\NativeArray as PhNativeArray;

class NativeArray extends PhAdapter implements PhAdapterInterface, \ArrayAccess
{
    public function __construct($options)
    {
        $this->adapter = new PhNativeArray($options);
    }

	public function query($index, $placeholders = null)
	{
        return $this->adapter->query($index, $placeholders);
	}

	public function exists($index)
	{
        return $this->adapter->exists($index);
	}


}