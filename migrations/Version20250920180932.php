<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250920180932 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE event (id INT AUTO_INCREMENT NOT NULL, created_by_id INT NOT NULL, title VARCHAR(255) NOT NULL, slug VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, type VARCHAR(32) NOT NULL, registration_open TINYINT(1) DEFAULT 0 NOT NULL, is_members_only TINYINT(1) DEFAULT 0 NOT NULL, start_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', end_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', location_name VARCHAR(255) DEFAULT NULL, lat NUMERIC(9, 6) DEFAULT NULL, lng NUMERIC(9, 6) DEFAULT NULL, max_participants SMALLINT DEFAULT NULL, status VARCHAR(16) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', updated_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', UNIQUE INDEX UNIQ_3BAE0AA7989D9B62 (slug), INDEX IDX_3BAE0AA7B03A8386 (created_by_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE outing_request (id INT AUTO_INCREMENT NOT NULL, event_id INT NOT NULL, user_id INT DEFAULT NULL, seats SMALLINT DEFAULT 1 NOT NULL, contact_name VARCHAR(255) DEFAULT NULL, email VARCHAR(255) DEFAULT NULL, phone VARCHAR(50) DEFAULT NULL, emergency_phone VARCHAR(50) DEFAULT NULL, guest_names LONGTEXT DEFAULT NULL, message LONGTEXT DEFAULT NULL, status VARCHAR(16) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_7D2DF69C71F7E88B (event_id), INDEX IDX_7D2DF69CA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE event ADD CONSTRAINT FK_3BAE0AA7B03A8386 FOREIGN KEY (created_by_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE outing_request ADD CONSTRAINT FK_7D2DF69C71F7E88B FOREIGN KEY (event_id) REFERENCES event (id)');
        $this->addSql('ALTER TABLE outing_request ADD CONSTRAINT FK_7D2DF69CA76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE event DROP FOREIGN KEY FK_3BAE0AA7B03A8386');
        $this->addSql('ALTER TABLE outing_request DROP FOREIGN KEY FK_7D2DF69C71F7E88B');
        $this->addSql('ALTER TABLE outing_request DROP FOREIGN KEY FK_7D2DF69CA76ED395');
        $this->addSql('DROP TABLE event');
        $this->addSql('DROP TABLE outing_request');
    }
}
