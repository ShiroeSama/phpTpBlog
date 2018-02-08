<?php

namespace AppBundle\Controller\Admin;

use AppBundle\Entity\Blog\Post;
use AppBundle\Form\Type\PostType;
use AppBundle\Service\Blog\CategoryService;
use AppBundle\Service\Blog\PostService;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/** @Route("/admin/post") */
class PostController extends Controller
{
    /** @var PostService $postService */
    protected $postService;

    /**
     * HomeController constructor.
     *
     * @param PostService $postService
     */
    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }

    /**
     * @Route("/add", name="admin-post-add")
     */
    public function postAddAction(Request $request)
    {
        $errors = [];
        $post = new Post();

        $form = $this->createForm(PostType::class, $post);

        $form->handleRequest($request);
        $formView = $form->createView();

        if ($form->getErrors(true)->valid()) {
            for ($i = 0; $i < $form->getErrors(true)->count(); $i++) {
                array_push($errors, $form->getErrors(true)[$i]->getMessage());
            }
        }

        if ($request->isMethod('POST') && $form->isSubmitted() && $form->isValid()) {
            try {
                $this->postService->add($post);
                return $this->redirectToRoute('admin');
            } catch (\Exception $e) {
                array_push($errors, $e->getMessage());
            }
        }

        $var = compact('formView', 'errors');
        return $this->render('Admin/Post/edit.html.twig', $var);
    }

    /**
     * @Route("/edit/{post}", name="admin-post-edit")
     */
    public function postEditAction(Request $request, Post $post)
    {
        $errors = [];
        $form = $this->createForm(PostType::class, $post);

        $form->handleRequest($request);
        $formView = $form->createView();

        if ($form->getErrors(true)->valid()) {
            for ($i = 0; $i < $form->getErrors(true)->count(); $i++) {
                array_push($errors, $form->getErrors(true)[$i]->getMessage());
            }
        }

        if ($request->isMethod('POST') && $form->isSubmitted() && $form->isValid()) {
            try {
                $this->postService->edit($post);
                return $this->redirectToRoute('admin');
            } catch (\Exception $e) {
                array_push($errors, $e->getMessage());
            }
        }

        $var = compact('formView', 'post', 'errors');

        return $this->render('Admin/Post/edit.html.twig', $var);

    }

    /**
     * @Route("/delete/{post}", name="admin-post-delete")
     */
    public function postDeleteAction(Request $request, Post $post)
    {
        $this->postService->delete($post);
        return $this->redirectToRoute('admin');
    }
}
