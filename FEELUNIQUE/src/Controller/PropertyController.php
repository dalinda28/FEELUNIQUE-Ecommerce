<?php
    namespace App\Controller;

    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;

    class PropertyController extends AbstractController 
    {
        /**
         * @Route("/articles", name="property.index")
         * @return Response
         */

        public function index():Response 
        {
        return $this->render('articles/articles.html.twig', [
            'current_menu' => 'properties'
        ]);
        }
    }
?>