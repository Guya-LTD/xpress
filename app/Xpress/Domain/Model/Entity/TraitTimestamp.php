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

/**
 * Class TraitTimestamp
 * @package Xpress\Domain\Model\Entity
 * @see https://github.com/Simonbelete/guya/tree/develop/xpress
 * @author Simon Belete <simonbelete@gmail.com> 
 * @license UNLICENSED
 * @copyright (C) Guya
 * @version  1.0.0
 */
trait TraitTimestamp {
	/**
	 * @var \DateTime
	 */
	protected $created_at;

	/**
	 * @var \DateTime
	 */
	protected $updated_at;

	/**
	 * @param \DateTime created_at
	 * @return $this
	 */
	public function setCreatedAt( \DateTime $created_at ) {
		$this->created_at = $created_at;
		return $this;
	}	

	/**
	 * @param \DateTime updated_at
	 * @return $this
	 */
	public function setUpdatedAt( \DateTime $updated_at ) {
		$this->updated_at = $updated_at;
		return $this;
	}

	/**
	 * @return \DateTime
	 */
	public function getCreatedAt() {
		return $this->created_at;
	}

	/**
	 * @return \DateTime
	 */
	public function getUpdatedAt() {
		return $this->updated_at;
	}
	
}

/** EOF **/