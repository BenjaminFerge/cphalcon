<?php
declare(strict_types=1);

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalconphp.com>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Phalcon\Test\Unit\Mvc\Router\Annotations;

use UnitTester;

/**
 * Class AddHeadCest
 *
 * @package Phalcon\Test\Unit\Mvc\Router\Annotations
 */
class AddHeadCest
{
    /**
     * Tests Phalcon\Mvc\Router\Annotations :: addHead()
     *
     * @param UnitTester $I
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2018-11-13
     */
    public function mvcRouterAnnotationsAddHead(UnitTester $I)
    {
        $I->wantToTest("Mvc\Router\Annotations - addHead()");
        $I->skipTest("Need implementation");
    }
}