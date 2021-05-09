<?php

namespace App\Repository;

use App\Entity\Article;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\Query;
use Doctrine\Persistence\ManagerRegistry;
use App\Data\SearchData;
<<<<<<< Updated upstream

=======
>>>>>>> Stashed changes
/**
 * @method Article|null find($id, $lockMode = null, $lockVersion = null)
 * @method Article|null findOneBy(array $criteria, array $orderBy = null)
 * @method Article[]    findAll()
 * @method Article[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ArticleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Article::class);
    }

    /**
<<<<<<< Updated upstream
     *  Cette fonction récupere les produits en lien avec une recherche
     * @return Article[]
     */
    public function findSearch(SearchData $search): array
    {

        $query = $this
            ->createQueryBuilder('p')
            ->select('c', 'p')
            ->join('p.categories', 'c');

        if (!empty($search->q)) {
            $query = $query
                ->andWhere()('p.name LIKE :q')
                    ->setParameter('q', "% { $search->q }%");
            }

        if (!empty($search->min)) {
            $query = $query
                ->andWhere()('p.price LIKE :min')
                    ->setParameter('min', "% { $search->min }%");
            }
        if (!empty($search->max)) {
            $query = $query
                ->andWhere()('p.price LIKE :max')
                    ->setParameter('max', "% { $search->max }%");
            }
        if (!empty($search->categories)) {
            $query = $query
                ->andWhere()('p.id IN (:categories)')
                    ->setParameter('categories', $search->categories);
            }

        return $query->getQuery()->getResult();
    }

    /**
     * @return Article[]
     */
    public function findquantity(): array
    {
        return $this->createQueryBuilder('p')
            ->where('p.quantity >= 0')
            ->getQuery()
            ->getResult();
    }
=======
     * Cette fonction récupere les produits en lien avec une recherche
     * @return Article[]
     */

    public function findSearch(SearchData $search): array
    {
        $query = $this 
            ->createQueryBuilder('p')
            ->select('c', 'p')
            ->join('p.categories', 'c');
        
            if (!empty($search->q))
            {
                $query = $query
                    ->andWhere()('p.name LIKE :q')
                    ->setParameter('q', "% { $search->q }%");
            }

            if (!empty($search->min))
            {
                $query = $query
                    ->andWhere()('p.price LIKE :min')
                    ->setParameter('min', "% { $search->min }%");
            }

            if (!empty($search->max))
            {
                $query = $query
                    ->andWhere()('p.price LIKE :max')
                    ->setParameter('max', "% { $search->max }%");
            }

            if (!empty($search->categories))
            {
                $query = $query
                    ->andWhere()('p.id IN (:categories)')
                    ->setParameter('categories', $search->categories);
            }

            return $query->getQuery()->getResult();
    }

    /**
     * @return Article[]
     */
    public function findquantity() : array
    {
        return $this->createQueryBuilder('p')
            ->where('p.quantity >= 0')
            ->getQuery()
            ->getResult();
    }

>>>>>>> Stashed changes
}

