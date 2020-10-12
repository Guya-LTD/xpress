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

namespace Xpress\Domain\Model\Entity;

use Xpress\Domain\Model\Entity\AbstractEntity;
use Xpress\Domain\Model\Entity\TraitTimestamp;
use Xpress\Domain\Model\Entity\TraitUser;

/**
 * Class BillingMethodEntity
 * @package Xpress\Domain\Model\Entity
 * @see https://github.com/Simonbelete/guya/tree/develop/xpress
 * @author Simon Belete <simonbelete@gmail.com> 
 * @license UNLICENSED
 * @copyright (C) Guya
 * @version  1.0.0
 */

class BillingMethod extends AbstractEntity {
    use TraitTimestamp;
    use TraitUser;

    /**
     * @var string
     */
    protected $name;

    /**
     * @param string $name
     * @return string
     */
    public function setName ( string $name ) : string {
        $this->name = $name;
        return $name;
    }

    /**
     * @return string
     */
    public function getName () : self {
        return $this->name;
    }
}

/** EOF */