<?php

namespace App\Entity;

    class ArticleSearch{
        /**
         * @var int|null
         */
        private $maxPrice;

        /**
         * @return int|null
         */
        private function getMaxPrice(): ?int{
            return $this->maxPrice;
        }

        /**
         * @param int|null $maxPrice
         * @return ArticleSearch
         */
        private function setMaxPrice(int $maxPrice): ArticleSearch{
            $this->maxPrice = $maxPrice;
            return $this;
        }





    }
?>