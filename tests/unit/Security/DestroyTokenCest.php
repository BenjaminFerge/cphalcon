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

namespace Phalcon\Test\Unit\Security;

use UnitTester;

/**
 * Class DestroyTokenCest
 */
class DestroyTokenCest
{
    /**
     * Tests Phalcon\Security :: destroyToken()
     *
     * @param UnitTester $I
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2018-11-13
     */
    public function securityDestroyToken(UnitTester $I)
    {
        $I->wantToTest('Security - destroyToken()');
        $I->skipTest('Need implementation');
    }
}
