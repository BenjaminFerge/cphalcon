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

namespace Phalcon\Test\Unit\Image\Adapter\Gd;

use UnitTester;

/**
 * Class TextCest
 */
class TextCest
{
    /**
     * Tests Phalcon\Image\Adapter\Gd :: text()
     *
     * @param UnitTester $I
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2018-11-13
     */
    public function imageAdapterGdText(UnitTester $I)
    {
        $I->wantToTest('Image\Adapter\Gd - text()');
        $I->skipTest('Need implementation');
    }
}
