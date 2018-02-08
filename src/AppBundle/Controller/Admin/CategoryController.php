<?php

namespace AppBundle\Controller\Admin;

use AppBundle\Entity\Blog\Category;
use AppBundle\Entity\Blog\Post;
use AppBundle\Form\Type\CategoryType;
use AppBundle\Form\Type\PostType;
use AppBundle\Service\Blog\CategoryService;
use AppBundle\Service\Blog\PostService;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/** @Route("/admin/category") */
class CategoryController extends Controller
{
    /** @var CategoryService $categoryService */
    protected $categoryService;

    /**
     * HomeController constructor.
     *
     * @param CategoryService $categoryService
     */
    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    /**
     * @Route("/add", name="admin-category-add")
     */
    public function postAddAction(Request $request)
    {
        $errors = [];
        $category = new Category();

        $form = $this->createForm(CategoryType::class, $category);

        $form->handleRequest($request);
        $formView = $form->createView();

        if ($form->getErrors(true)->valid()) {
            for ($i = 0; $i < $form->getErrors(true)->count(); $i++) {
                array_push($errors, $form->getErrors(true)[$i]->getMessage());
            }
        }

        if ($request->isMethod('POST') && $form->isSubmitted() && $form->isValid()) {
            try {
                $this->categoryService->add($category);
                return $this->redirectToRoute('admin');
            } catch (\Exception $e) {
                array_push($errors, $e->getMessage());
            }
        }

        $var = compact('formView', 'errors');
        return $this->render('Admin/Category/edit.html.twig', $var);
    }

    /**
     * @Route("/edit/{category}", name="admin-category-edit")
     */
    public function postEditAction(Request $request, Category $category)
    {
        $errors = [];
        $form = $this->createForm(CategoryType::class, $category);

        $form->handleRequest($request);
        $formView = $form->createView();

        if ($form->getErrors(true)->valid()) {
            for ($i = 0; $i < $form->getErrors(true)->count(); $i++) {
                array_push($errors, $form->getErrors(true)[$i]->getMessage());
            }
        }

        if ($request->isMethod('POST') && $form->isSubmitted() && $form->isValid()) {
            try {
                $this->categoryService->edit($category);
                return $this->redirectToRoute('admin');
            } catch (\Exception $e) {
                array_push($errors, $e->getMessage());
            }
        }

        $var = compact('formView', 'category', 'errors');
        return $this->render('Admin/Category/edit.html.twig', $var);

    }

    /**
     * @Route("/delete/{category}", name="admin-category-delete")
     */
    public function postDeleteAction(Request $request, Category $category)
    {
        $this->categoryService->delete($category);
        return $this->redirectToRoute('admin');
    }
}
