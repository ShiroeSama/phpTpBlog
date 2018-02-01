<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Blog\Category;
use AppBundle\Service\Blog\CategoryService;
use AppBundle\Service\Blog\PostService;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CategoryController extends Controller
{
    /** @var CategoryService $categoryService */
    protected $categoryService;

    /**
     * HomeController constructor.
     * @param CategoryService $categoryService
     */
    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    /**
     * @Route("/category/{category}", name="category")
     */
    public function indexAction(Request $request, String $category)
    {
        $category = $this->categoryService->findByName($category);

        $categoryName = $category->getName();
        $postList = $category->getPosts();

        $var = compact('categoryName', 'postList');
        return $this->render('Blog/category.html.twig', $var);
    }
}
