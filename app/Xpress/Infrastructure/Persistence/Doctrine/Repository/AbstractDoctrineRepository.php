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

namespace Xpress\Infrastructure\Persistence\Doctrine\Repository;

use Xpress\Domain\Service\Repository\RepositoryInterface;
use Doctrine\ORM\EntityManager;

/**
 * Abstract AbstractDoctrineRepository
 * @package Xpress\Domain\Service\Repository
 * @see https://github.com/Simonbelete/guya/tree/develop/xpress
 * @author Simon Belete <simonbelete@gmail.com> 
 * @license UNLICENSED
 * @copyright (C) Guya
 * @version  1.0.0
 */

abstract class AbstractDoctrineRepository implements RepositoryInterface {
    /**
     * @var EntityManager
     */
    protected $entityManager;

    /**
     * @var Object
     */
    protected $entityClass;

    /**
     * @param EntityManager $em
     * @return $this
     */
    public function __construct(EntityManager $em) {
        if (empty($this->entityClass)) {
            throw new \RuntimeException(
                get_class($this) . '::$entityClass is not defined'
            );
        }

        $this->entityManager = $em;
    }

    /**
     * @param int $id
     * @return Object
     */
    public function getById($id) {
        return $this->entityManager
                    ->find($this->entityClass, $id);
    }

    /**
     * @return Object
     */
    public function getAll() {
        return $this->entityManager->getRepository($this->entityClass)
                    ->findAll();
    }

    /**
     * 
     */
    public function getBy(
        $conditions = [],
        $order = [],
        $limit = null,
        $offset = null
        ) {
        $repository = $this->entityManager->getRepository(
            $this->entityClass
        );

        $results = $repository->findBy(
            $conditions,
            $order,
            $limit,
            $offset
            );

        return $results;
    }

    /**
     * @return $this
     */
    public function begin() {
        $this->entityManager->beginTransaction();
        return $this;
    }

    /**
     * @return $this
     */
    public function commit() {
        $this->entityManager->flush();
        $this->entityManager->commit();
        return $this;
    }
}