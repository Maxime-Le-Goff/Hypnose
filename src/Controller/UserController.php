<?php

namespace App\Controller;

use App\Entity\User;
use ContainerLYARjkg\getSecurity_UserPasswordHasherService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserController extends AbstractController
{
    
    public function createUser(UserPasswordHasherInterface $PasswordHasher)
    {
        $user = new User();
        $user->setEmail('newemail@gmail.com');
        $user->setpassword($PasswordHasher('mdp'));
    }
}
