<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250921125742 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE albums (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(180) NOT NULL, description LONGTEXT DEFAULT NULL, cover VARCHAR(255) DEFAULT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', updated_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE classified_ads (id INT AUTO_INCREMENT NOT NULL, owner_id INT NOT NULL, title VARCHAR(180) NOT NULL, description LONGTEXT NOT NULL, price NUMERIC(10, 2) DEFAULT NULL, `condition` VARCHAR(80) DEFAULT NULL, location VARCHAR(160) DEFAULT NULL, status VARCHAR(255) NOT NULL, published_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', updated_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_A20072C97E3C61F9 (owner_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE membership_applications (id INT AUTO_INCREMENT NOT NULL, processed_by_id INT DEFAULT NULL, first_name VARCHAR(100) NOT NULL, last_name VARCHAR(100) NOT NULL, email VARCHAR(180) NOT NULL, phone VARCHAR(30) DEFAULT NULL, message LONGTEXT DEFAULT NULL, status VARCHAR(255) NOT NULL, target_year SMALLINT NOT NULL, processing_note LONGTEXT DEFAULT NULL, processed_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', updated_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_5170D3C22FFD4FD3 (processed_by_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE memberships (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, year SMALLINT NOT NULL, status VARCHAR(255) NOT NULL, paid_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', hello_asso_ref VARCHAR(120) DEFAULT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_865A4776A76ED395 (user_id), UNIQUE INDEX UNIQ_membership_user_year (user_id, year), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE photos (id INT AUTO_INCREMENT NOT NULL, owner_id INT DEFAULT NULL, album_id INT DEFAULT NULL, classified_ad_id INT DEFAULT NULL, file_name VARCHAR(255) NOT NULL, title VARCHAR(180) DEFAULT NULL, description LONGTEXT DEFAULT NULL, visibility VARCHAR(255) NOT NULL, taken_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', uploaded_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', updated_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_876E0D97E3C61F9 (owner_id), INDEX IDX_876E0D91137ABCF (album_id), INDEX IDX_876E0D92A5D06C3 (classified_ad_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE classified_ads ADD CONSTRAINT FK_A20072C97E3C61F9 FOREIGN KEY (owner_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE membership_applications ADD CONSTRAINT FK_5170D3C22FFD4FD3 FOREIGN KEY (processed_by_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE memberships ADD CONSTRAINT FK_865A4776A76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE photos ADD CONSTRAINT FK_876E0D97E3C61F9 FOREIGN KEY (owner_id) REFERENCES `user` (id) ON DELETE SET NULL');
        $this->addSql('ALTER TABLE photos ADD CONSTRAINT FK_876E0D91137ABCF FOREIGN KEY (album_id) REFERENCES albums (id) ON DELETE SET NULL');
        $this->addSql('ALTER TABLE photos ADD CONSTRAINT FK_876E0D92A5D06C3 FOREIGN KEY (classified_ad_id) REFERENCES classified_ads (id) ON DELETE SET NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE classified_ads DROP FOREIGN KEY FK_A20072C97E3C61F9');
        $this->addSql('ALTER TABLE membership_applications DROP FOREIGN KEY FK_5170D3C22FFD4FD3');
        $this->addSql('ALTER TABLE memberships DROP FOREIGN KEY FK_865A4776A76ED395');
        $this->addSql('ALTER TABLE photos DROP FOREIGN KEY FK_876E0D97E3C61F9');
        $this->addSql('ALTER TABLE photos DROP FOREIGN KEY FK_876E0D91137ABCF');
        $this->addSql('ALTER TABLE photos DROP FOREIGN KEY FK_876E0D92A5D06C3');
        $this->addSql('DROP TABLE albums');
        $this->addSql('DROP TABLE classified_ads');
        $this->addSql('DROP TABLE membership_applications');
        $this->addSql('DROP TABLE memberships');
        $this->addSql('DROP TABLE photos');
    }
}
