<?php

namespace SclZfCart\Mapper;

use Doctrine\ORM\EntityManager;
use SclZfUtilities\Doctrine\FlushLock;
use SclZfUtilities\Mapper\GenericDoctrineMapper;

/**
 * Doctrine Mapper for Cart.
 *
 * @author Tom Oram <tom@scl.co.uk>
 */
class DoctrineCartMapper extends GenericDoctrineMapper implements
    CartMapperInterface
{
    /**
     * @param EntityManager $entityManager
     * @param FlushLock     $flushLock
     */
    public function __construct(
        EntityManager $entityManager,
        FlushLock $flushLock
    ) {
        parent::__construct(
            $entityManager,
            $flushLock,
            'SclZfCart\Entity\DoctrineCart'
        );
    }
}
