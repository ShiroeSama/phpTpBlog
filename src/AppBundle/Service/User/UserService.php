<?php

namespace AppBundle\Service\User;
use AppBundle\Entity\Blog\Post;
use AppBundle\Entity\User\User;
use AppBundle\Repository\Blog\PostRepository;
use Doctrine\ORM\EntityManagerInterface;

class UserService
{
    /** @var  EntityManagerInterface $em */
    private $em;

    /** @var PostRepository $repository */
    private $repository;

    public function __construct(EntityManagerInterface $manager)
    {
        $this->em = $manager;
        $this->repository = $this->em->getRepository(User::class);
    }

    public function findAll(): array
    {
        return $this->repository->findAll();
    }

    public function add(User $user) {
        $this->em->persist($user);
        $this->em->flush();
    }

    public function drop()
    {
        $this->repository->drop();
    }
}
