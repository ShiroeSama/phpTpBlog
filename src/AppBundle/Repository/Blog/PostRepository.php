<?php

namespace AppBundle\Repository\Blog;

/**
 * PostRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class PostRepository extends \Doctrine\ORM\EntityRepository
{
    public function drop() {
        $query = $this->_em->createQuery('DELETE AppBundle:Blog\Post p');
        $query->execute();
    }
}
