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
trait TraitUser {
	/**
	 * @var int
	 */
	protected $created_by;

	/**
	 * @var int
	 */
	protected $updated_by;

	/**
	 * @param int $created_by
	 * @return $this
	 */
	public function setCreatedBy( int $created_by ) {
		$this->created_by = $created_by;
		return $this;
	}

	/**
	 * @param int updated_by
	 * @return $this
	 */
	public function setUpdatedBy( int $updated_by ) {
		$this->updated_by = $updated_by;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getCreatedBy() {
		return $this->created_by;
	}

	/**
	 * @return int
	 */
	protected function getUpdatedBy() {
		return $this->updated_by;
	}
}