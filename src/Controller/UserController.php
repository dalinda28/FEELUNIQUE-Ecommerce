<?php

namespace App\Controller;

use App\Form\EditProfileType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;


class UserController extends AbstractController
{

    /**
     * @Route("/user", name="user")
     * @return Response
     */

    public function index(){
        return $this->render('user/user.html.twig');
    }

    /**
     * @Route("/user/edit", name="user_edit", methods="GET|POST")
     */
    public function editProfile(Request $request)
    {
        $user = $this->getUser();
        $form = $this->createForm( EditProfileType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            $this->addFlash('success', 'Profil mis à jour');
            return $this->redirectToRoute('user');
        }
        return $this->render('user/edit.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    /**
     * @Route("/user/editmdp", name="user_edit_mdp")
     */
    public function editMdp(Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {
        if ($request->isMethod('POST')){
            $em = $this->getDoctrine()->getManager();

            $user = $this->getUser();

            //si les deux mot de passe sont identiques
            if($request->request->get('mdp') == $request->request->get('mdp2')){
                $user->setPassword($passwordEncoder->encodePassword($user, $request->request->get('mdp')));
                $em->flush();
                $this->addFlash('message', 'Mot de passe mis à jour avec succés');

                 return $this->redirectToRoute('user');
            }else {
                $this->addFlash('error', 'Les deux mots de passe ne sont pas identiques');
            }
        }
        $this->addFlash('success', 'Mot de passe mis à jour');
        return $this->render('user/editmdp.html.twig');
    }
}