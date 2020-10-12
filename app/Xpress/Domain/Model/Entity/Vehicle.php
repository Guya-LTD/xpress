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
 * Class VehicleEntity
 * @package Xpress\Domain\Model\Entity
 * @see https://github.com/Simonbelete/guya/tree/develop/xpress
 * @author Simon Belete <simonbelete@gmail.com> 
 * @license UNLICENSED
 * @copyright (C) Guya
 * @version  1.0.0
 */

class Vehicle extends AbstractEntity {
    use TraitTimestamp;
    use TraitUser;

    /**
     * @var string
     */
    protected $make;

    /** 
     * @var string
     */
    protected $model;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var string
     */
    protected $plate_no;

    /**
     * @var object
     */
    protected $vehicleType;

    /**
     * @param string $make
     * @return $this
     */
    public function setMake ( stirng $make ) : self {
        $this->make = $make;
        return $this;
    }

    /**
     * @param string $model
     * @return $this
     */
    public function setModel ( string $model ) : self {
        $this->model = $model;
        return $this;
    }

    /**
     * @param string $description
     * @return $this
     */
    public function setDescription ( string $description ) : self {
        $this->description = $description;
        return $this;
    }

    /**
     * @param string $plate_no
     * @return $this
     */
    public function setPlateNo ( string $plate_no ) : self {
        $this->plate_no = $plate_no;
        return $this;
    }

    /**
     * @param VehicleType $vechicletype
     * @return $this
     */
    public function setVehicleType( ?VehicleType $vehicleType) : self {
        $this->vehicleType = $vehicleType;
        return $this;
    }

    /**
     * @return string
     */
    public function getMake () : string {
        return $this->make;
    }

    /**
     * @return string
     */
    public function getModel () : string {
        return $this->model;
    }

    /**
     * @return string
     */
    public function getDescription () : string {
        return $this->description;
    }

    /**
     * @return string
     */
    public function getPlateNo () : string {
        return $this->plate_no;
    }

    /**
     * @return VehicleType
     */
    public function getVehicleType () : VehicleType {
        return $this->vehicleType;
    }
}

/** EOF */