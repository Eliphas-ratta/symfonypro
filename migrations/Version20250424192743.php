<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250424192743 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE hero_guild (hero_id INT NOT NULL, guild_id INT NOT NULL, INDEX IDX_EA7F726C45B0BCD (hero_id), INDEX IDX_EA7F726C5F2131EF (guild_id), PRIMARY KEY(hero_id, guild_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE world_user (world_id INT NOT NULL, user_id INT NOT NULL, INDEX IDX_5357149D8925311C (world_id), INDEX IDX_5357149DA76ED395 (user_id), PRIMARY KEY(world_id, user_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE hero_guild ADD CONSTRAINT FK_EA7F726C45B0BCD FOREIGN KEY (hero_id) REFERENCES hero (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE hero_guild ADD CONSTRAINT FK_EA7F726C5F2131EF FOREIGN KEY (guild_id) REFERENCES guild (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE world_user ADD CONSTRAINT FK_5357149D8925311C FOREIGN KEY (world_id) REFERENCES world (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE world_user ADD CONSTRAINT FK_5357149DA76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_world DROP FOREIGN KEY FK_D8B5EA1B8925311C');
        $this->addSql('ALTER TABLE user_world DROP FOREIGN KEY FK_D8B5EA1BA76ED395');
        $this->addSql('DROP TABLE user_world');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE user_world (user_id INT NOT NULL, world_id INT NOT NULL, INDEX IDX_D8B5EA1BA76ED395 (user_id), INDEX IDX_D8B5EA1B8925311C (world_id), PRIMARY KEY(user_id, world_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE user_world ADD CONSTRAINT FK_D8B5EA1B8925311C FOREIGN KEY (world_id) REFERENCES world (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_world ADD CONSTRAINT FK_D8B5EA1BA76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE hero_guild DROP FOREIGN KEY FK_EA7F726C45B0BCD');
        $this->addSql('ALTER TABLE hero_guild DROP FOREIGN KEY FK_EA7F726C5F2131EF');
        $this->addSql('ALTER TABLE world_user DROP FOREIGN KEY FK_5357149D8925311C');
        $this->addSql('ALTER TABLE world_user DROP FOREIGN KEY FK_5357149DA76ED395');
        $this->addSql('DROP TABLE hero_guild');
        $this->addSql('DROP TABLE world_user');
    }
}
