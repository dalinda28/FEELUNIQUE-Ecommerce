<?php

namespace App\Controller;

use App\Data\SearchData;
use App\Entity\Article;
use App\Form\SearchForm;
use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Knp\Component\Pager\PaginatorInterface;

class ArticlesController extends AbstractController
{
    /**
     * @var ArticleRepository
     */
    private $repository;

    public function __construct(ArticleRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @Route("/articles", name="articles")
     * @return Response
     */

    public function index(Request $request, PaginatorInterface $paginator, ArticleRepository $repository): Response    {
        $data = new SearchData();
        $form = $this->createForm(SearchForm::class, $data);
        $form->handleRequest($request);
        $articles = $repository->findSearch($data);
        $donness = $this->getDoctrine()->getRepository(Article::class)->findAll();
        $articles = $paginator->paginate(
            $donness,
            $request->query->getInt('page', 1),
            12
        );

        return $this->render('articles/index.html.twig', [
            'articles' => $articles,
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/articles/{slug}-{id}", name="article.show", requirements={"slug": "[a-z0-9\-]*"})
     * @return Response
     */
    public function show(Article $article, string $slug): Response
    {
        if ($article->getSlug() !== $slug) {
            return $this->redirectToRoute('article.show', [
                'id' => $article->getId(),
                'slug' => $article->getSlug()
            ], 301);
        }
        $em = $this->getDoctrine()->getManager();
        $article = $em->getRepository(Article::class)->find($article);

        return $this->render('articles/show.html.twig', [
            'article' => $article,
            'current_menu' => $article
        ]);
    }
}
