<?php
    namespace App\Controller\Admin;

    use App\Entity\Article;
    use App\Form\ArticleType;
    use App\Repository\ArticleRepository;
    use Doctrine\ORM\EntityManagerInterface;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\HttpFoundation\Request;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;

    class AdminArticlesController extends AbstractController
    {
        /**
         * @var ObjectManager
         */
        private $em;
        public function __construct(ArticleRepository $repository, EntityManagerInterface $em)
        {
            $this->repository = $repository;
            $this->em = $em;
        }

        /**
         * @Route("/admin", name="admin.articles.index")
         * @return \Symfony\Component\HttpFoundation\Response
         */
        public function index() : Response
        {
            $em = $this->getDoctrine()->getManager();
            $repository = $em->getRepository(Article::class);
            $articles = $repository->findAll();

            return $this->render('admin\index.html.twig', [
                'articles' => $articles,
            ]);
        }

        /**
         * @Route("admin/article/create", name="admin.article.new")
         */
        public function new (Request $request)
        {
            $article = new Article();
            $form = $this->createForm(ArticleType::class, $article);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid())
            {
                $this->em->persist($article);
                $this->em->flush();
                $this->addFlash('success', 'Bien créé avec succés');
                return $this->redirectToRoute('admin.article.index');
            }
            return $this->render('admin/new.html.twig', [
                'article' => $article,
                'form' => $form->createView(),
                'current_menu' =>$article
            ]);
        }

        /**
         * @Route("/admin/article/{id}", name="admin.article.edit", methods="GET|POST")
         * @param Article $article
         * @return \Symfony\Component\HttpFoundation\Response
         */
        public function edit(Article $article, Request $request)
        {
            $form = $this->createForm(ArticleType::class, $article);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid())
            {
                $this->em->flush();
                $this->addFlash('success', 'Bien modifié avec succés');
                return $this->redirectToRoute('admin.article.index');
            }
            return $this->render('admin/edit.html.twig', [
                'article' => $article,
                'form' => $form->createView(),
                'current_menu' =>$article
            ]);
        }

        /**
         * @Route("/admin/article/{id}", name="admin.article.delete", methods="DELETE")
         * @param Article $article
         * @return \Symfony\Component\HttpFoundation\Response
         */
        public function delete(Article $article, Request $request)
        {
            $this->em->remove($article);
            $this->em->flush();
            $this->addFlash('success', 'Bien supprimé avec succés');
            return $this->redirectToRoute('admin.article.index');
        }
    }
?>