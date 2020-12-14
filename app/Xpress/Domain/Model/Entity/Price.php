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
    protected $name_en;

    /**
     * @var string
     */
    protected $name_am;

    /**
     * @var string
     */
    protected $description_en;

    /**
     * @var string
     */
    protected $description_am;

    /**
     * Holds Max weight
     * 
     * @var float
     */
    protected $weight;

    /**
     * @var float
     */
    protected $length;

    /**
     * @var float
     */
    protected $width;

    /**
     * @var float
     */
    protected $height;

    /**
     * Price per unit
     * 
     * @var float
     */
    protected $price;

    /**
     * @var string
     */
    protected $unit;

    /**
     * @param string $name_en
     * @return $this
     */
    public function setNameEN ( string $name_en ) : self {
        $this->name_en = $name_en;
        return $this;
    }

    /**
     * @param string $name_am
     * @return $this
     */
    public function setNameAM ( string $name_am ) : self {
        $this->name_am = $name_am;
        return $this;
    }

    /**
     * @param string $description_en
     * @return $this
     */
    public function setDescriptionEN ( string $description_en ) : self {
        $this->description_en = $description_en;
        return $this;
    }

    /**
     * @param string $description_am
     * @return $this
     */
    public function setDescriptionAM ( string $description_am ) : self {
        $this->description_am = $description_am;
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
     * @param float $length
     * @return $this
     */
    public function setLength ( float $length ) : self {
        $this->length = $length;
        return $this;
    }

    /**
     * @param float $width
     * @return $this
     */
    public function setWidth ( float $width ) : self {
        $this->width = $widht;
        return $this;
    }

    /**
     * @param float $height
     * @return $this
     */
    public function setHeight ( float $height ) : self {
        $this->height = $height;
        return $this;
    }


    /**
     * @param float $price
     * @return $this
     */
    public function setPrice ( float $price ) : self {
        $this->price = $price;
        return $this;
    }

    /**
     * @param string $unit
     * @return $this
     */
    public function setUnit( string $unit ) : self {
        $this->unit = $unit;
        return $this;
    }

    /**
     * @return string
     */
    public function getNameEN () : string {
        return $this->name_en;
    }

    /**
     * @return string
     */
    public function getNameAM () : string {
        return $this->name_am;
    }

    /**
     * @return string
     */
    public function getDescriptionEN () : string {
        return $this->description_en;
    }

    /**
     * @return string
     */
    public function getDescriptionAM () : string {
        return $this->description_am;
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
    public function getLength () : string {
        return $this->length;
    }

    /**
     * @return float
     */
    public function getWidth () : string {
        return $this->width;
    }

    /**
     * @return float
     */
    public function getHeight () : string {
        return $this->height;
    }

    /**
     * @return float
     */
    public function getPrice () : string {
        return $this->price;
    }

    /**
     * @return string
     */
    public function getUnit () : string {
        return $this->unit;
    }
}


/** EOF **/