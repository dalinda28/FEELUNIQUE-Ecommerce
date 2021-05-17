<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210510080848 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE command (id INT AUTO_INCREMENT NOT NULL, article_name_id INT DEFAULT NULL, order_number_id INT NOT NULL, quantity INT NOT NULL, INDEX IDX_8ECAEAD49CC5D861 (article_name_id), INDEX IDX_8ECAEAD48C26A5E8 (order_number_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE orders (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, valid TINYINT(1) NOT NULL, ordered_at DATETIME NOT NULL, order_number INT NOT NULL, INDEX IDX_E52FFDEEA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE command ADD CONSTRAINT FK_8ECAEAD49CC5D861 FOREIGN KEY (article_name_id) REFERENCES article (id)');
        $this->addSql('ALTER TABLE command ADD CONSTRAINT FK_8ECAEAD48C26A5E8 FOREIGN KEY (order_number_id) REFERENCES orders (id)');
        $this->addSql('ALTER TABLE orders ADD CONSTRAINT FK_E52FFDEEA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE command DROP FOREIGN KEY FK_8ECAEAD48C26A5E8');
        $this->addSql('DROP TABLE command');
        $this->addSql('DROP TABLE orders');
    }
}
