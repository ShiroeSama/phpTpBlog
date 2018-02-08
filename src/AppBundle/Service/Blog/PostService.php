<?php

namespace AppBundle\Service\Blog;
use AppBundle\Entity\Blog\Post;
use AppBundle\Repository\Blog\PostRepository;
use Doctrine\ORM\EntityManagerInterface;

class PostService
{
    /** @var  EntityManagerInterface $em */
    private $em;

    /** @var PostRepository $repository */
    private $repository;

    public function __construct(EntityManagerInterface $manager)
    {
        $this->em = $manager;
        $this->repository = $this->em->getRepository(Post::class);
    }

    public function findAll(): array
    {
        return $this->repository->findBy(array(), array('createdAt' => 'DESC'));
    }

    public function add(Post $post) {
        if (is_null($post->getCreatedAt())) {
            $post->setCreatedAt(new \DateTime());
        }

        $this->em->persist($post);
        $this->em->flush();
    }

    public function edit(Post $post): Post {
        $this->em->flush();
        return $post;
    }

    public function delete(Post $post) {
        $this->em->remove($post);
        $this->em->flush();
    }

    public function drop()
    {
        $this->repository->drop();
    }
}
