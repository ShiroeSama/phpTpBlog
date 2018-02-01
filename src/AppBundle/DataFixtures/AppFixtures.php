<?php
    namespace AppBundle\DataFixtures;

    use AppBundle\Entity\Blog\Category;
    use AppBundle\Entity\Blog\Post;
    use AppBundle\Service\Blog\CategoryService;
    use AppBundle\Service\Blog\PostService;
    use Doctrine\Bundle\FixturesBundle\Fixture;
    use Doctrine\Common\Persistence\ObjectManager;
    use Faker\Factory;

    class AppFixtures extends Fixture
    {
        /** @var PostService $postService */
        protected $postService;

        /** @var CategoryService $categoryService */
        protected $categoryService;

        /**
         * HomeController constructor.
         * @param PostService $postService
         */
        public function __construct(PostService $postService, CategoryService $categoryService)
        {
            $this->postService = $postService;
            $this->categoryService = $categoryService;
        }

        public function load(ObjectManager $manager)
        {
            // ----------------------------------
            // Create Fake Factory
            $faker = Factory::create();


            // ----------------------------------
            // Drop Database
            $this->postService->drop();
            $this->categoryService->drop();



            // ----------------------------------
            // Create Categories
            $category1 = new Category();
            $category1->setName("Sport");

            $category2 = new Category();
            $category2->setName("Developpement");

            $category3 = new Category();
            $category3->setName("Divertissement");

            $category4 = new Category();
            $category4->setName("Yolo");


            for ($i = 0; $i < 20; $i++) {
                // ----------------------------------
                // Create Post
                $post = new Post();
                $post->setTitle($faker->text(20));
                $post->setDescription($faker->text());
                $post->setCreatedAt($faker->dateTime());
                $post->setActive($faker->boolean());

                $rand = $faker->numberBetween(0, 4);

                switch ($rand) {
                    case 0 :
                        $post->addCategory($category1);
                        break;
                    case 1 :
                        $post->addCategory($category1);
                        $post->addCategory($category2);
                        break;
                    case 2 :
                        $post->addCategory($category3);
                        $post->addCategory($category4);
                        break;
                    case 3 :
                        $post->addCategory($category1);
                        $post->addCategory($category3);
                        $post->addCategory($category4);
                        break;
                    case 4 :
                        $post->addCategory($category1);
                        $post->addCategory($category2);
                        $post->addCategory($category3);
                        $post->addCategory($category4);
                        break;
                    default:
                        break;
                }

                // ----------------------------------
                // Persist Datas
                $this->postService->add($post);
            }
        }
    }