<?php
/**
 * @copyright (C) Guya , PLC - All Rights Reserved (As Of Pending...)
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 *
 * This file is subject to the terms and conditions defined in
 * file 'LICENSE.txt', which is part of this source code package.
 *
 * @author: Simon Belete <simonbelete>
 * @date:   2020-05-13T03:14:09+03:00
 * @email:  simonbelete@gmail.com
 * @project: Guya Express Xpress Service
 * @last modified by:   simonbelete
 * @last modified time: 2020-05-13T04:32:15+03:00
 */

use PHPUnit\Framework\TestCase;

use Xpress\Domain\Model\Entity\BillingMethod;
use Xpress\Domain\Service\Factory\BillingMethodFactory;

class BillingMethodFactoryTest extends TestCase {
    /**
     * @doc Check billing method factory return BillingMethod object 
     * @group billing method factory
     */
    public function testCreateWithCurrentDateTime(){
        $factory = new BillingMethodFactory();
        $billingMethod = $factory->createWithCurrentDateTime();

        $this->assertInstanceOf(BillingMethod::class, $billingMethod);
    }

    /**
     * @doc Check billing method factory return BillingMethod object 
     * @group billing method factory
     */
    public function testCreateWithUpdatedCurrentDateTime() {
        $factory = new BillingMethodFactory();
        $billingMethod = $factory->createWithUpdatedCurrentDateTime();

        $this->assertInstanceOf(BillingMethod::class, $billingMethod);
    }
}

/** EOF */