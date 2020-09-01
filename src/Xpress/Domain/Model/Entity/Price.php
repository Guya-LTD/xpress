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
 * Class PriceEntity
 * @package Xpress\Domain\Model\Entity
 * @see https://github.com/Simonbelete/guya/tree/develop/xpress
 * @author Simon Belete <simonbelete@gmail.com> 
 * @license UNLICENSED
 * @copyright (C) Guya
 * @version  1.0.0
 */

class Price extends AbstractEntity {
    use TraitTimestamp;
    use TraitUser;
    
    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var float
     */
    protected $weight;

    /**
     * @var float
     */
    protected $size;

    /**
     * @var float
     */
    protected $price;

    /**
     * @param string $name
     * @return $this
     */
    public function setName ( string $name ) : self {
        $this->name = $name;
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
     * @param float $weight
     * @return $this
     */
    public function setWeight ( string $weight ) : self {
        $this->weight = $weight;
        return $this;
    }

    /**
     * @param float $size
     * @return $this
     */
    public function setSize ( string $size ) : self {
        $this->size = $size;
        return $this;
    }

    /**
     * @param float $price
     * @return $this
     */
    public function setPrice ( string $price ) : self {
        $this->price = $price;
        return $this;
    }

    /**
     * @return string
     */
    public function getName () : string {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getDescription () : string {
        return $this->description;
    }

    /**
     * @return float
     */
    public function getWeight () : string {
        return $this->weight; 
    }

    /**
     * @return float
     */
    public function getSize () : string {
        return $this->size;
    }

    /**
     * @return float
     */
    public function getPrice () : string {
        return $this->price;
    }
}


/** EOF **/