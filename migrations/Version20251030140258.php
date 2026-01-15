<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20251030140258 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE albums ADD parent_id INT DEFAULT NULL, ADD is_private TINYINT(1) DEFAULT 0 NOT NULL');
        $this->addSql('ALTER TABLE albums ADD CONSTRAINT FK_F4E2474F727ACA70 FOREIGN KEY (parent_id) REFERENCES albums (id) ON DELETE SET NULL');
        $this->addSql('CREATE INDEX IDX_F4E2474F727ACA70 ON albums (parent_id)');
        $this->addSql('ALTER TABLE photos DROP FOREIGN KEY FK_876E0D91137ABCF');
        $this->addSql('ALTER TABLE photos CHANGE album_id album_id INT NOT NULL');
        $this->addSql('ALTER TABLE photos ADD CONSTRAINT FK_876E0D91137ABCF FOREIGN KEY (album_id) REFERENCES albums (id) ON DELETE CASCADE');

        $this->addSql("INSERT INTO albums (title, created_at, updated_at) VALUES ('Sans album', NOW(), NOW())");
        $this->addSql("SET @default_album_id = LAST_INSERT_ID()");
        $this->addSql("UPDATE photos SET album_id = @default_album_id WHERE album_id IS NULL");
        $this->addSql("ALTER TABLE photos ADD CONSTRAINT FK_PHOTO_ALBUM FOREIGN KEY (album_id) REFERENCES albums(id) ON DELETE CASCADE");
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE albums DROP FOREIGN KEY FK_F4E2474F727ACA70');
        $this->addSql('DROP INDEX IDX_F4E2474F727ACA70 ON albums');
        $this->addSql('ALTER TABLE albums DROP parent_id, DROP is_private');
        $this->addSql('ALTER TABLE photos DROP FOREIGN KEY FK_876E0D91137ABCF');
        $this->addSql('ALTER TABLE photos CHANGE album_id album_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE photos ADD CONSTRAINT FK_876E0D91137ABCF FOREIGN KEY (album_id) REFERENCES albums (id) ON UPDATE NO ACTION ON DELETE SET NULL');
    }
}
