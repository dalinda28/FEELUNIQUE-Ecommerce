<?php
    namespace App\Controller;

    use App\Repository\ArticleRepository;
    use Symfony\Component\HttpFoundation\Request;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\HttpFoundation\Session\SessionInterface;
    use Symfony\Component\Routing\Annotation\Route;


    class CartController extends AbstractController{

        /**
         * @Route("/panier", name="cart_index")
         */
        public function index(SessionInterface $session, ArticleRepository $articleRepository){
            $panier = $session->get('panier', []);

            $panierWithData = [] ;

            foreach($panier as $id => $quantity){
                $panierWithData[] = [
                    'article' => $articleRepository->find($id),
                    'quantity' => $quantity
                ];
            }

            $total = 0;
            foreach ($panierWithData as $item){
                $totalItem = $item['article']->getPrice() * $item['quantity'];
                $total += $totalItem;
            }

            return $this->render('cart/index.html.twig', [
                'items' =>$panierWithData,
                'total' =>$total
            ]);
        }

        /**
         * @Route("/panier/add/{id}", name="cart_add")
         */
        public function add($id, SessionInterface $session ){

            $panier = $session->get('panier', []);

            if(!empty(($panier[$id]))){
                $panier[$id]++;
            }else{
                $panier[$id] = 1;
            }

            $session->set('panier', $panier);
            
            return $this->redirectToRoute("cart_index");
        }

        /**
         * @Route("panier/remove/{id}", name="cart_remove")
         */
        public function remove($id, SessionInterface $session){
            $panier = $session->get('panier', []);
            if(!empty($panier[$id])){
                unset($panier[$id]);
            }
            $session->set('panier', $panier);

            return $this->redirectToRoute("cart_index");

        }
    }
    ?>