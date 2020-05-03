<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200503142515 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE buyer (id INT AUTO_INCREMENT NOT NULL, company_name VARCHAR(255) NOT NULL, first_name VARCHAR(255) NOT NULL, last_name VARCHAR(255) NOT NULL, street VARCHAR(255) NOT NULL, address_number VARCHAR(255) NOT NULL, post_number VARCHAR(255) NOT NULL, city VARCHAR(255) NOT NULL, nip VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE invoice (id INT AUTO_INCREMENT NOT NULL, seller_id INT DEFAULT NULL, buyer_id INT DEFAULT NULL, invoice_number INT NOT NULL, payment_type VARCHAR(255) NOT NULL, invoice_date DATETIME NOT NULL, payment_date DATETIME NOT NULL, additional_info TEXT NOT NULL, INDEX IDX_906517448DE820D9 (seller_id), INDEX IDX_906517446C755722 (buyer_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE seller (id INT AUTO_INCREMENT NOT NULL, company_name VARCHAR(255) NOT NULL, first_name VARCHAR(255) NOT NULL, last_name VARCHAR(255) NOT NULL, company_street VARCHAR(255) NOT NULL, company_address_number VARCHAR(255) NOT NULL, company_post_number VARCHAR(255) NOT NULL, company_city VARCHAR(255) NOT NULL, company_nip VARCHAR(255) NOT NULL, bank_account_number VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE invoice ADD CONSTRAINT FK_906517448DE820D9 FOREIGN KEY (seller_id) REFERENCES seller (id)');
        $this->addSql('ALTER TABLE invoice ADD CONSTRAINT FK_906517446C755722 FOREIGN KEY (buyer_id) REFERENCES buyer (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE invoice DROP FOREIGN KEY FK_906517446C755722');
        $this->addSql('ALTER TABLE invoice DROP FOREIGN KEY FK_906517448DE820D9');
        $this->addSql('DROP TABLE buyer');
        $this->addSql('DROP TABLE invoice');
        $this->addSql('DROP TABLE seller');
    }
}
