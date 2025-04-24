<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250424165529 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE hero_guild DROP FOREIGN KEY FK_EA7F726C45B0BCD');
        $this->addSql('ALTER TABLE hero_guild DROP FOREIGN KEY FK_EA7F726C5F2131EF');
        $this->addSql('DROP TABLE hero_guild');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE hero_guild (hero_id INT NOT NULL, guild_id INT NOT NULL, INDEX IDX_EA7F726C45B0BCD (hero_id), INDEX IDX_EA7F726C5F2131EF (guild_id), PRIMARY KEY(hero_id, guild_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE hero_guild ADD CONSTRAINT FK_EA7F726C45B0BCD FOREIGN KEY (hero_id) REFERENCES hero (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE hero_guild ADD CONSTRAINT FK_EA7F726C5F2131EF FOREIGN KEY (guild_id) REFERENCES guild (id) ON UPDATE NO ACTION ON DELETE CASCADE');
    }
}
