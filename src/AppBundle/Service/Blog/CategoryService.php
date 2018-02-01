<?php

namespace AppBundle\Service\Blog;
use AppBundle\Entity\Blog\Category;
use AppBundle\Entity\Blog\Post;
use AppBundle\Repository\Blog\PostRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class CategoryService
{
    /** @var  EntityManagerInterface $em */
    private $em;

    /** @var PostRepository $repository */
    private $repository;

    public function __construct(EntityManagerInterface $manager)
    {
        $this->em = $manager;
        $this->repository = $this->em->getRepository(Category::class);
    }

    public function findAll(): array
    {
        return $this->repository->findAll();
    }

    public function findByName(String $name): Category
    {
        $category = $this->repository->findBy(['name' => $name]);

        if (is_null($category)) {
            throw new NotFoundHttpException();
        } else {
            return array_shift($category);
        }
    }

    public function add(Category $category) {
        $this->em->persist($category);
        $this->em->flush();
    }

    public function drop()
    {
        $this->repository->drop();
    }
}
