<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210908131021 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE team_supplier (team_id INT NOT NULL, supplier_id INT NOT NULL, INDEX IDX_2368B000296CD8AE (team_id), INDEX IDX_2368B0002ADD6D8C (supplier_id), PRIMARY KEY(team_id, supplier_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE team_product (team_id INT NOT NULL, product_id INT NOT NULL, INDEX IDX_2C33759A296CD8AE (team_id), INDEX IDX_2C33759A4584665A (product_id), PRIMARY KEY(team_id, product_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE team_subcategory (team_id INT NOT NULL, subcategory_id INT NOT NULL, INDEX IDX_E6EC4B05296CD8AE (team_id), INDEX IDX_E6EC4B055DC6FE57 (subcategory_id), PRIMARY KEY(team_id, subcategory_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE team_supplier ADD CONSTRAINT FK_2368B000296CD8AE FOREIGN KEY (team_id) REFERENCES team (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE team_supplier ADD CONSTRAINT FK_2368B0002ADD6D8C FOREIGN KEY (supplier_id) REFERENCES supplier (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE team_product ADD CONSTRAINT FK_2C33759A296CD8AE FOREIGN KEY (team_id) REFERENCES team (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE team_product ADD CONSTRAINT FK_2C33759A4584665A FOREIGN KEY (product_id) REFERENCES product (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE team_subcategory ADD CONSTRAINT FK_E6EC4B05296CD8AE FOREIGN KEY (team_id) REFERENCES team (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE team_subcategory ADD CONSTRAINT FK_E6EC4B055DC6FE57 FOREIGN KEY (subcategory_id) REFERENCES subcategory (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE team_supplier');
        $this->addSql('DROP TABLE team_product');
        $this->addSql('DROP TABLE team_subcategory');
    }
}
