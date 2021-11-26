<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Conge;
use App\Entity\Upload;
use App\Form\UploadType;
use App\Entity\Actualite;
use App\Form\ActualiteType;
use App\Form\CongeTypePhpType;
use App\Form\RegistrationType;
use App\Repository\UserRepository;
use App\Repository\CongeRepository;
use App\Repository\ActualiteRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use ContainerF6n0khT\PaginatorInterface_82dac15;
use Doctrine\DBAL\Types\JsonType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserController extends AbstractController
{
    /**
     * @Route("/connexion", name="security_login")
     */
    public function connecter()
    {
        return $this->render('login.html.twig');
    }

    /**
     * @Route("/logout", name="security_logout")
     */
    public function logout()
    {
    }

    /**
     * @Route("/admin", name="security_logout")
     */
    public function create()
    {
    }

       /**
     * @Route("/profile", name="profile_page")
     */
    public function profile()
    {
        return $this->render('profile.html.twig');
    }
}
