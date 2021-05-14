<?php
    namespace App\Controller;

    use App\Entity\Command;
    use App\Entity\Orders;
    use App\Repository\ArticleRepository;
    use App\Service\Cart\CartService;
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
            $total = 0;
            foreach($panier as $id => $quantity){
                $article = $articleRepository->find($id);
                $panierWithData[] = [
                    'article' => $article,
                    'quantity' => $quantity
                ];
                $total += $article->getPrice() * $quantity;
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
         * @Route("/panier/less/{id}", name="cart_less")
         */
        public function less($id, SessionInterface $session ){

            $panier = $session->get('panier', []);

            if(!empty(($panier[$id]))){
                $panier[$id]--;
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


        /**
         * @Route("/panier/save", name="save_order")
         */
        public function saveOrder(SessionInterface  $session, CartService $cartService) {

            // deny access if not logged in

            $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

            // new order

            $order = new Orders();

            $order->setValid(1);
            $order->setOrderedAt(new \DateTime());
            $order->setUsername($this->getUser());

            $today = date("Ymd");
            $rand = mt_rand(0.00, 99.99);
            $uniqueNumber = $today . $rand;

            $order->setOrderNumber($uniqueNumber);

            $doctrine = $this->getDoctrine();
            $entityManager = $doctrine->getManager();
            $entityManager->persist($order);
            // $entityManager->flush();

            // new commandLine

            $commandline = new Command();

            foreach($cartService->getFullCart() as $item){
                $commandline->setArticleName($item['article']);
                $commandline->setQuantity($item['quantity']);
                $commandline->setOrderNumber($order);
                $entityManager->persist($commandline);
                $entityManager->flush();
            }


            return $this->redirectToRoute('orders',[
                'order' => 'Your orders have been saved',
            ]);
        }
    }
    ?>