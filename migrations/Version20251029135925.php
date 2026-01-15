<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20251029135925 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE archive_images (id INT AUTO_INCREMENT NOT NULL, file_name VARCHAR(255) DEFAULT NULL, title VARCHAR(180) DEFAULT NULL, description LONGTEXT DEFAULT NULL, uploaded_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', updated_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', deleted_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE article ADD cover_image_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE article ADD CONSTRAINT FK_23A0E66E5A0E336 FOREIGN KEY (cover_image_id) REFERENCES archive_images (id) ON DELETE SET NULL');
        $this->addSql('CREATE INDEX IDX_23A0E66E5A0E336 ON article (cover_image_id)');
        $this->addSql('ALTER TABLE article_attachment CHANGE file_name file_name VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE membership_applications ADD provider VARCHAR(30) DEFAULT \'MANUAL\' NOT NULL, ADD provider_payment_id VARCHAR(100) DEFAULT NULL, ADD amount_cents INT UNSIGNED DEFAULT NULL, ADD currency VARCHAR(3) DEFAULT \'EUR\' NOT NULL, ADD raw_payload JSON DEFAULT NULL, ADD received_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\'');
        $this->addSql('CREATE INDEX idx_email_year ON membership_applications (email, target_year)');
        $this->addSql('CREATE UNIQUE INDEX uniq_provider_payment ON membership_applications (provider, provider_payment_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE article DROP FOREIGN KEY FK_23A0E66E5A0E336');
        $this->addSql('DROP TABLE archive_images');
        $this->addSql('DROP INDEX IDX_23A0E66E5A0E336 ON article');
        $this->addSql('ALTER TABLE article DROP cover_image_id');
        $this->addSql('ALTER TABLE article_attachment CHANGE file_name file_name VARCHAR(255) NOT NULL');
        $this->addSql('DROP INDEX idx_email_year ON membership_applications');
        $this->addSql('DROP INDEX uniq_provider_payment ON membership_applications');
        $this->addSql('ALTER TABLE membership_applications DROP provider, DROP provider_payment_id, DROP amount_cents, DROP currency, DROP raw_payload, DROP received_at');
    }
}
