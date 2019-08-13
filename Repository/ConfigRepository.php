<?php

namespace Plugin\OSGHTKDelivery\Repository;

use Eccube\Repository\AbstractRepository;
use Plugin\OSGHTKDelivery\Entity\Config;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * ConfigRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ConfigRepository extends AbstractRepository
{
    /**
     * ConfigRepository constructor.
     *
     * @param RegistryInterface $registry
     */
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Config::class);
    }

    /**
     * @param int $id
     *
     * @return null|Config
     */
    public function get()
    {
        return $this->findOneBy([], ['id' => 'DESC']);
    }
}
