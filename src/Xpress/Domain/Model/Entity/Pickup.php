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
 * Class PickupEntity
 * @package Xpress\Domain\Model\Entity
 * @see https://github.com/Simonbelete/guya/tree/develop/xpress
 * @author Simon Belete <simonbelete@gmail.com> 
 * @license UNLICENSED
 * @copyright (C) Guya
 * @version  1.0.0
 */

class Pickup extends AbstractEntity {
    use TraitTimestamp;
    use TraitUser;

    /**
     * @var string
     */
    protected $customer_id;

    /**
     * @var PickupType
     */
    protected $pickupType;

    /**
     * @var Date
     */
    protected $collection_date;

    /**
     * @var string
     */
    protected $collection_woreda;

    /**
     * @var string
     */
    protected $collection_kebele;

    /**
     * @var string
     */
    protected $collection_house_no;

    /**
     * @var string
     */
    protected $collection_longitude;

    /**
     * @var string
     */
    protected $collection_latitude;

    /**
     * @var string
     */
    protected $collection_notification_pnum;

    /**
     * @var string
     */
    protected $collection_notification_email;

    /**
     * @var float
     */
    protected $size;

    /**
     * @var float
     */
    protected $weight;

    /**
     * @var string
     */
    protected $note;
}

/** EOF */