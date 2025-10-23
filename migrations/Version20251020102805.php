<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20251020102805 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE albums (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(180) NOT NULL, description LONGTEXT DEFAULT NULL, cover VARCHAR(255) DEFAULT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', updated_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE article (id INT AUTO_INCREMENT NOT NULL, author_id INT NOT NULL, title VARCHAR(255) NOT NULL, slug VARCHAR(255) NOT NULL, content LONGTEXT NOT NULL, cover VARCHAR(255) DEFAULT NULL, is_published TINYINT(1) DEFAULT 0 NOT NULL, is_members_only TINYINT(1) DEFAULT 0 NOT NULL, pinned TINYINT(1) DEFAULT 0 NOT NULL, published_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', updated_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', UNIQUE INDEX UNIQ_23A0E66989D9B62 (slug), INDEX IDX_23A0E66F675F31B (author_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE article_attachment (id INT AUTO_INCREMENT NOT NULL, article_id INT NOT NULL, title VARCHAR(255) DEFAULT NULL, file_name VARCHAR(255) NOT NULL, original_name VARCHAR(255) DEFAULT NULL, mime_type VARCHAR(255) DEFAULT NULL, size INT DEFAULT NULL, position SMALLINT DEFAULT 0 NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', updated_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_4586083A7294869C (article_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE board_member (id INT AUTO_INCREMENT NOT NULL, surname VARCHAR(255) NOT NULL, name VARCHAR(255) NOT NULL, role VARCHAR(255) NOT NULL, photo_name VARCHAR(255) DEFAULT NULL, updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE classified_ads (id INT AUTO_INCREMENT NOT NULL, owner_id INT NOT NULL, title VARCHAR(180) NOT NULL, description LONGTEXT NOT NULL, price NUMERIC(10, 2) DEFAULT NULL, item_condition VARCHAR(80) DEFAULT NULL, location VARCHAR(160) DEFAULT NULL, status VARCHAR(255) NOT NULL, published_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', updated_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_A20072C97E3C61F9 (owner_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE event (id INT AUTO_INCREMENT NOT NULL, created_by_id INT NOT NULL, title VARCHAR(255) NOT NULL, slug VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, type VARCHAR(32) NOT NULL, registration_open TINYINT(1) DEFAULT 0 NOT NULL, is_members_only TINYINT(1) DEFAULT 0 NOT NULL, start_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', end_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', location_name VARCHAR(255) DEFAULT NULL, lat NUMERIC(9, 6) DEFAULT NULL, lng NUMERIC(9, 6) DEFAULT NULL, max_participants SMALLINT DEFAULT NULL, status VARCHAR(16) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', updated_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', UNIQUE INDEX UNIQ_3BAE0AA7989D9B62 (slug), INDEX IDX_3BAE0AA7B03A8386 (created_by_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE membership_applications (id INT AUTO_INCREMENT NOT NULL, processed_by_id INT DEFAULT NULL, first_name VARCHAR(100) NOT NULL, last_name VARCHAR(100) NOT NULL, email VARCHAR(180) NOT NULL, phone VARCHAR(30) DEFAULT NULL, message LONGTEXT DEFAULT NULL, status VARCHAR(255) NOT NULL, target_year SMALLINT NOT NULL, processing_note LONGTEXT DEFAULT NULL, processed_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', provider VARCHAR(30) DEFAULT \'MANUAL\' NOT NULL, provider_payment_id VARCHAR(100) DEFAULT NULL, amount_cents INT UNSIGNED DEFAULT NULL, currency VARCHAR(3) DEFAULT \'EUR\' NOT NULL, raw_payload JSON DEFAULT NULL, received_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', updated_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_5170D3C22FFD4FD3 (processed_by_id), INDEX idx_email_year (email, target_year), UNIQUE INDEX uniq_provider_payment (provider, provider_payment_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE memberships (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, year SMALLINT NOT NULL, status VARCHAR(255) NOT NULL, paid_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', hello_asso_ref VARCHAR(120) DEFAULT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_865A4776A76ED395 (user_id), UNIQUE INDEX UNIQ_membership_user_year (user_id, year), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE outing_request (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, event_id INT NOT NULL, seats SMALLINT DEFAULT 1 NOT NULL, contact_name VARCHAR(255) DEFAULT NULL, email VARCHAR(255) DEFAULT NULL, phone VARCHAR(50) DEFAULT NULL, emergency_phone VARCHAR(50) DEFAULT NULL, guest_names LONGTEXT DEFAULT NULL, message LONGTEXT DEFAULT NULL, status VARCHAR(16) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_7D2DF69CA76ED395 (user_id), INDEX IDX_7D2DF69C71F7E88B (event_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE pages (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(180) NOT NULL, slug VARCHAR(200) NOT NULL, body LONGTEXT NOT NULL, is_published TINYINT(1) DEFAULT 0 NOT NULL, is_members_only TINYINT(1) DEFAULT 0 NOT NULL, meta_title VARCHAR(180) DEFAULT NULL, meta_description VARCHAR(255) DEFAULT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', updated_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', UNIQUE INDEX UNIQ_page_slug (slug), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE partner_links (id INT AUTO_INCREMENT NOT NULL, label VARCHAR(160) NOT NULL, url VARCHAR(255) NOT NULL, type VARCHAR(60) DEFAULT NULL, logo VARCHAR(255) DEFAULT NULL, position SMALLINT DEFAULT 0 NOT NULL, is_active TINYINT(1) DEFAULT 1 NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', updated_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', UNIQUE INDEX UNIQ_partner_link_url (url), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE photos (id INT AUTO_INCREMENT NOT NULL, owner_id INT DEFAULT NULL, album_id INT DEFAULT NULL, classified_ad_id INT DEFAULT NULL, file_name VARCHAR(255) NOT NULL, title VARCHAR(180) DEFAULT NULL, description LONGTEXT DEFAULT NULL, visibility VARCHAR(255) NOT NULL, taken_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', uploaded_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', updated_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_876E0D97E3C61F9 (owner_id), INDEX IDX_876E0D91137ABCF (album_id), INDEX IDX_876E0D92A5D06C3 (classified_ad_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE `user` (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, first_name VARCHAR(255) NOT NULL, last_name VARCHAR(255) NOT NULL, phone VARCHAR(50) DEFAULT NULL, avatar VARCHAR(255) DEFAULT NULL, newsletter_opt_in TINYINT(1) DEFAULT 0 NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', updated_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', is_approved TINYINT(1) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', available_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', delivered_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE article ADD CONSTRAINT FK_23A0E66F675F31B FOREIGN KEY (author_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE article_attachment ADD CONSTRAINT FK_4586083A7294869C FOREIGN KEY (article_id) REFERENCES article (id)');
        $this->addSql('ALTER TABLE classified_ads ADD CONSTRAINT FK_A20072C97E3C61F9 FOREIGN KEY (owner_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE event ADD CONSTRAINT FK_3BAE0AA7B03A8386 FOREIGN KEY (created_by_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE membership_applications ADD CONSTRAINT FK_5170D3C22FFD4FD3 FOREIGN KEY (processed_by_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE memberships ADD CONSTRAINT FK_865A4776A76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE outing_request ADD CONSTRAINT FK_7D2DF69CA76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id) ON DELETE SET NULL');
        $this->addSql('ALTER TABLE outing_request ADD CONSTRAINT FK_7D2DF69C71F7E88B FOREIGN KEY (event_id) REFERENCES event (id)');
        $this->addSql('ALTER TABLE photos ADD CONSTRAINT FK_876E0D97E3C61F9 FOREIGN KEY (owner_id) REFERENCES `user` (id) ON DELETE SET NULL');
        $this->addSql('ALTER TABLE photos ADD CONSTRAINT FK_876E0D91137ABCF FOREIGN KEY (album_id) REFERENCES albums (id) ON DELETE SET NULL');
        $this->addSql('ALTER TABLE photos ADD CONSTRAINT FK_876E0D92A5D06C3 FOREIGN KEY (classified_ad_id) REFERENCES classified_ads (id) ON DELETE SET NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE article DROP FOREIGN KEY FK_23A0E66F675F31B');
        $this->addSql('ALTER TABLE article_attachment DROP FOREIGN KEY FK_4586083A7294869C');
        $this->addSql('ALTER TABLE classified_ads DROP FOREIGN KEY FK_A20072C97E3C61F9');
        $this->addSql('ALTER TABLE event DROP FOREIGN KEY FK_3BAE0AA7B03A8386');
        $this->addSql('ALTER TABLE membership_applications DROP FOREIGN KEY FK_5170D3C22FFD4FD3');
        $this->addSql('ALTER TABLE memberships DROP FOREIGN KEY FK_865A4776A76ED395');
        $this->addSql('ALTER TABLE outing_request DROP FOREIGN KEY FK_7D2DF69CA76ED395');
        $this->addSql('ALTER TABLE outing_request DROP FOREIGN KEY FK_7D2DF69C71F7E88B');
        $this->addSql('ALTER TABLE photos DROP FOREIGN KEY FK_876E0D97E3C61F9');
        $this->addSql('ALTER TABLE photos DROP FOREIGN KEY FK_876E0D91137ABCF');
        $this->addSql('ALTER TABLE photos DROP FOREIGN KEY FK_876E0D92A5D06C3');
        $this->addSql('DROP TABLE albums');
        $this->addSql('DROP TABLE article');
        $this->addSql('DROP TABLE article_attachment');
        $this->addSql('DROP TABLE board_member');
        $this->addSql('DROP TABLE classified_ads');
        $this->addSql('DROP TABLE event');
        $this->addSql('DROP TABLE membership_applications');
        $this->addSql('DROP TABLE memberships');
        $this->addSql('DROP TABLE outing_request');
        $this->addSql('DROP TABLE pages');
        $this->addSql('DROP TABLE partner_links');
        $this->addSql('DROP TABLE photos');
        $this->addSql('DROP TABLE `user`');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
