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

namespace Phalcon\Test\Integration\Validation\Validator\Confirmation;

use Phalcon\Test\Fixtures\Traits\ValidationTrait;
use Phalcon\Validation\Validator\Confirmation;
use IntegrationTester;

/**
 * Class SetOptionCest
 */
class SetOptionCest
{
    use ValidationTrait;

    /**
     * Tests Phalcon\Validation\Validator\Confirmation :: setOption()
     *
     * @param IntegrationTester $I
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2018-11-13
     */
    public function validationValidatorConfirmationSetOption(IntegrationTester $I)
    {
        $I->wantToTest('Validation\Validator\Confirmation - setOption()');
        $validator = new Confirmation();
        $this->checkSetOption($I, $validator);
    }
}
