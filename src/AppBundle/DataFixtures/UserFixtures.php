<?php
namespace AppBundle\DataFixtures;

use AppBundle\Entity\User\User;
use AppBundle\Service\User\UserService;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class UserFixtures extends Fixture
{
    /** @var UserService $userService */
    protected $userService;

    /**
     * HomeController constructor.
     * @param UserService $userService
     */
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function load(ObjectManager $manager)
    {
        // ----------------------------------
        // Drop Database
        $this->userService->drop();

        // ----------------------------------
        // Create Users
        $admin = new User();
        $admin->addRole('ROLE_ADMIN');
        $admin->setEmail('admin@shiros.fr');
        $admin->setUsername('admin');
        $admin->setPlainPassword('admin');

        $user = new User();
        $user->addRole('ROLE_USER');
        $user->setEmail('shiroe.sama@shiros.fr');
        $user->setUsername('shiroe_sama');
        $user->setPlainPassword('shiroes');

        // ----------------------------------
        // Persist Datas
        $this->userService->add($admin);
        $this->userService->add($user);
    }
}