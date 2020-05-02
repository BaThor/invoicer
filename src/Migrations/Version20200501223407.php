<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200501223407 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE invoice ADD seller_id INT DEFAULT NULL, ADD invoice_date DATETIME NOT NULL, ADD payment_date DATETIME NOT NULL');
        $this->addSql('ALTER TABLE invoice ADD CONSTRAINT FK_906517448DE820D9 FOREIGN KEY (seller_id) REFERENCES seller (id)');
        $this->addSql('CREATE INDEX IDX_906517448DE820D9 ON invoice (seller_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE invoice DROP FOREIGN KEY FK_906517448DE820D9');
        $this->addSql('DROP INDEX IDX_906517448DE820D9 ON invoice');
        $this->addSql('ALTER TABLE invoice DROP seller_id, DROP invoice_date, DROP payment_date');
    }
}
