<?php

namespace AppBundle\Repository\User;

/**
 * UserRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class UserRepository extends \Doctrine\ORM\EntityRepository
{
    public function drop() {
        $query = $this->_em->createQuery('DELETE AppBundle:User\User p');
        $query->execute();
    }
}
