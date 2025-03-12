<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250312134703 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE capacity (id INT AUTO_INCREMENT NOT NULL, capacity_world_id INT NOT NULL, name VARCHAR(255) NOT NULL, type VARCHAR(255) DEFAULT NULL, image_capacity VARCHAR(255) DEFAULT NULL, description LONGTEXT DEFAULT NULL, INDEX IDX_B5E8B1746ABE5A2A (capacity_world_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE capacity_domain (capacity_id INT NOT NULL, domain_id INT NOT NULL, INDEX IDX_A523FFD666B6F0BA (capacity_id), INDEX IDX_A523FFD6115F0EE5 (domain_id), PRIMARY KEY(capacity_id, domain_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE city (id INT AUTO_INCREMENT NOT NULL, city_world_id INT NOT NULL, name VARCHAR(255) NOT NULL, image_city VARCHAR(255) DEFAULT NULL, description LONGTEXT DEFAULT NULL, INDEX IDX_2D5B0234CFD497A (city_world_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE continent (id INT AUTO_INCREMENT NOT NULL, continent_world_id INT NOT NULL, name VARCHAR(255) NOT NULL, description LONGTEXT DEFAULT NULL, image_continent VARCHAR(255) DEFAULT NULL, INDEX IDX_6CC70C7C90513FD6 (continent_world_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE domain (id INT AUTO_INCREMENT NOT NULL, domain_world_id INT NOT NULL, name VARCHAR(255) NOT NULL, type VARCHAR(255) DEFAULT NULL, image_domain VARCHAR(255) DEFAULT NULL, description LONGTEXT DEFAULT NULL, INDEX IDX_A7A91E0B9AAB7E53 (domain_world_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE faction (id INT AUTO_INCREMENT NOT NULL, faction_world_id INT NOT NULL, name VARCHAR(255) NOT NULL, type VARCHAR(255) DEFAULT NULL, regime VARCHAR(255) DEFAULT NULL, image_faction VARCHAR(255) DEFAULT NULL, description LONGTEXT DEFAULT NULL, emblem_image VARCHAR(255) DEFAULT NULL, couleur VARCHAR(255) DEFAULT NULL, created_at DATETIME DEFAULT NULL, capital VARCHAR(255) DEFAULT NULL, INDEX IDX_83048B90F4AEDAB (faction_world_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE faction_dirigeant (faction_id INT NOT NULL, hero_id INT NOT NULL, INDEX IDX_EB4457824448F8DA (faction_id), INDEX IDX_EB44578245B0BCD (hero_id), PRIMARY KEY(faction_id, hero_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE faction_hero (faction_id INT NOT NULL, hero_id INT NOT NULL, INDEX IDX_F0126BE34448F8DA (faction_id), INDEX IDX_F0126BE345B0BCD (hero_id), PRIMARY KEY(faction_id, hero_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE faction_city (faction_id INT NOT NULL, city_id INT NOT NULL, INDEX IDX_8C8707514448F8DA (faction_id), INDEX IDX_8C8707518BAC62AF (city_id), PRIMARY KEY(faction_id, city_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE faction_guild (faction_id INT NOT NULL, guild_id INT NOT NULL, INDEX IDX_483934794448F8DA (faction_id), INDEX IDX_483934795F2131EF (guild_id), PRIMARY KEY(faction_id, guild_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE faction_continent (faction_id INT NOT NULL, continent_id INT NOT NULL, INDEX IDX_3944458F4448F8DA (faction_id), INDEX IDX_3944458F921F4C77 (continent_id), PRIMARY KEY(faction_id, continent_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE guild (id INT AUTO_INCREMENT NOT NULL, visibility_id_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, type VARCHAR(255) DEFAULT NULL, image_guild VARCHAR(255) DEFAULT NULL, description VARCHAR(255) DEFAULT NULL, INDEX IDX_75407DAB8AD7D5DD (visibility_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE guild_continent (guild_id INT NOT NULL, continent_id INT NOT NULL, INDEX IDX_E6C245A45F2131EF (guild_id), INDEX IDX_E6C245A4921F4C77 (continent_id), PRIMARY KEY(guild_id, continent_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE hero (id INT AUTO_INCREMENT NOT NULL, hero_world_id INT NOT NULL, name VARCHAR(255) NOT NULL, age VARCHAR(255) DEFAULT NULL, size VARCHAR(255) NOT NULL, image_hero VARCHAR(255) DEFAULT NULL, description LONGTEXT DEFAULT NULL, fonction VARCHAR(255) DEFAULT NULL, INDEX IDX_51CE6E862C3B80B4 (hero_world_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE hero_domain (hero_id INT NOT NULL, domain_id INT NOT NULL, INDEX IDX_A236761745B0BCD (hero_id), INDEX IDX_A2367617115F0EE5 (domain_id), PRIMARY KEY(hero_id, domain_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE hero_faction (hero_id INT NOT NULL, faction_id INT NOT NULL, INDEX IDX_970048B745B0BCD (hero_id), INDEX IDX_970048B74448F8DA (faction_id), PRIMARY KEY(hero_id, faction_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE hero_race (hero_id INT NOT NULL, race_id INT NOT NULL, INDEX IDX_5A84D9E945B0BCD (hero_id), INDEX IDX_5A84D9E96E59D40D (race_id), PRIMARY KEY(hero_id, race_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE hero_city (hero_id INT NOT NULL, city_id INT NOT NULL, INDEX IDX_ADB0607245B0BCD (hero_id), INDEX IDX_ADB060728BAC62AF (city_id), PRIMARY KEY(hero_id, city_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE hero_continent (hero_id INT NOT NULL, continent_id INT NOT NULL, INDEX IDX_B46F391745B0BCD (hero_id), INDEX IDX_B46F3917921F4C77 (continent_id), PRIMARY KEY(hero_id, continent_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE hero_guild (hero_id INT NOT NULL, guild_id INT NOT NULL, INDEX IDX_EA7F726C45B0BCD (hero_id), INDEX IDX_EA7F726C5F2131EF (guild_id), PRIMARY KEY(hero_id, guild_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE race (id INT AUTO_INCREMENT NOT NULL, race_world_id INT NOT NULL, name VARCHAR(255) NOT NULL, image_race VARCHAR(255) DEFAULT NULL, description LONGTEXT DEFAULT NULL, INDEX IDX_DA6FBBAFD93FF0F5 (race_world_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE race_domain (race_id INT NOT NULL, domain_id INT NOT NULL, INDEX IDX_CDFF00D86E59D40D (race_id), INDEX IDX_CDFF00D8115F0EE5 (domain_id), PRIMARY KEY(race_id, domain_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(50) NOT NULL, password VARCHAR(50) NOT NULL, email VARCHAR(255) NOT NULL, roles JSON NOT NULL, profile_image VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_8D93D649F85E0677 (username), UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_world (user_id INT NOT NULL, world_id INT NOT NULL, INDEX IDX_D8B5EA1BA76ED395 (user_id), INDEX IDX_D8B5EA1B8925311C (world_id), PRIMARY KEY(user_id, world_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE visibility (id INT AUTO_INCREMENT NOT NULL, visibility VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE world (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, description LONGTEXT DEFAULT NULL, worldimage VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE world_guild (world_id INT NOT NULL, guild_id INT NOT NULL, INDEX IDX_F420AFA48925311C (world_id), INDEX IDX_F420AFA45F2131EF (guild_id), PRIMARY KEY(world_id, guild_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', available_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', delivered_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE capacity ADD CONSTRAINT FK_B5E8B1746ABE5A2A FOREIGN KEY (capacity_world_id) REFERENCES world (id)');
        $this->addSql('ALTER TABLE capacity_domain ADD CONSTRAINT FK_A523FFD666B6F0BA FOREIGN KEY (capacity_id) REFERENCES capacity (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE capacity_domain ADD CONSTRAINT FK_A523FFD6115F0EE5 FOREIGN KEY (domain_id) REFERENCES domain (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE city ADD CONSTRAINT FK_2D5B0234CFD497A FOREIGN KEY (city_world_id) REFERENCES world (id)');
        $this->addSql('ALTER TABLE continent ADD CONSTRAINT FK_6CC70C7C90513FD6 FOREIGN KEY (continent_world_id) REFERENCES world (id)');
        $this->addSql('ALTER TABLE domain ADD CONSTRAINT FK_A7A91E0B9AAB7E53 FOREIGN KEY (domain_world_id) REFERENCES world (id)');
        $this->addSql('ALTER TABLE faction ADD CONSTRAINT FK_83048B90F4AEDAB FOREIGN KEY (faction_world_id) REFERENCES world (id)');
        $this->addSql('ALTER TABLE faction_dirigeant ADD CONSTRAINT FK_EB4457824448F8DA FOREIGN KEY (faction_id) REFERENCES faction (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE faction_dirigeant ADD CONSTRAINT FK_EB44578245B0BCD FOREIGN KEY (hero_id) REFERENCES hero (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE faction_hero ADD CONSTRAINT FK_F0126BE34448F8DA FOREIGN KEY (faction_id) REFERENCES faction (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE faction_hero ADD CONSTRAINT FK_F0126BE345B0BCD FOREIGN KEY (hero_id) REFERENCES hero (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE faction_city ADD CONSTRAINT FK_8C8707514448F8DA FOREIGN KEY (faction_id) REFERENCES faction (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE faction_city ADD CONSTRAINT FK_8C8707518BAC62AF FOREIGN KEY (city_id) REFERENCES city (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE faction_guild ADD CONSTRAINT FK_483934794448F8DA FOREIGN KEY (faction_id) REFERENCES faction (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE faction_guild ADD CONSTRAINT FK_483934795F2131EF FOREIGN KEY (guild_id) REFERENCES guild (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE faction_continent ADD CONSTRAINT FK_3944458F4448F8DA FOREIGN KEY (faction_id) REFERENCES faction (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE faction_continent ADD CONSTRAINT FK_3944458F921F4C77 FOREIGN KEY (continent_id) REFERENCES continent (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE guild ADD CONSTRAINT FK_75407DAB8AD7D5DD FOREIGN KEY (visibility_id_id) REFERENCES visibility (id)');
        $this->addSql('ALTER TABLE guild_continent ADD CONSTRAINT FK_E6C245A45F2131EF FOREIGN KEY (guild_id) REFERENCES guild (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE guild_continent ADD CONSTRAINT FK_E6C245A4921F4C77 FOREIGN KEY (continent_id) REFERENCES continent (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE hero ADD CONSTRAINT FK_51CE6E862C3B80B4 FOREIGN KEY (hero_world_id) REFERENCES world (id)');
        $this->addSql('ALTER TABLE hero_domain ADD CONSTRAINT FK_A236761745B0BCD FOREIGN KEY (hero_id) REFERENCES hero (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE hero_domain ADD CONSTRAINT FK_A2367617115F0EE5 FOREIGN KEY (domain_id) REFERENCES domain (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE hero_faction ADD CONSTRAINT FK_970048B745B0BCD FOREIGN KEY (hero_id) REFERENCES hero (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE hero_faction ADD CONSTRAINT FK_970048B74448F8DA FOREIGN KEY (faction_id) REFERENCES faction (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE hero_race ADD CONSTRAINT FK_5A84D9E945B0BCD FOREIGN KEY (hero_id) REFERENCES hero (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE hero_race ADD CONSTRAINT FK_5A84D9E96E59D40D FOREIGN KEY (race_id) REFERENCES race (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE hero_city ADD CONSTRAINT FK_ADB0607245B0BCD FOREIGN KEY (hero_id) REFERENCES hero (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE hero_city ADD CONSTRAINT FK_ADB060728BAC62AF FOREIGN KEY (city_id) REFERENCES city (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE hero_continent ADD CONSTRAINT FK_B46F391745B0BCD FOREIGN KEY (hero_id) REFERENCES hero (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE hero_continent ADD CONSTRAINT FK_B46F3917921F4C77 FOREIGN KEY (continent_id) REFERENCES continent (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE hero_guild ADD CONSTRAINT FK_EA7F726C45B0BCD FOREIGN KEY (hero_id) REFERENCES hero (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE hero_guild ADD CONSTRAINT FK_EA7F726C5F2131EF FOREIGN KEY (guild_id) REFERENCES guild (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE race ADD CONSTRAINT FK_DA6FBBAFD93FF0F5 FOREIGN KEY (race_world_id) REFERENCES world (id)');
        $this->addSql('ALTER TABLE race_domain ADD CONSTRAINT FK_CDFF00D86E59D40D FOREIGN KEY (race_id) REFERENCES race (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE race_domain ADD CONSTRAINT FK_CDFF00D8115F0EE5 FOREIGN KEY (domain_id) REFERENCES domain (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_world ADD CONSTRAINT FK_D8B5EA1BA76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_world ADD CONSTRAINT FK_D8B5EA1B8925311C FOREIGN KEY (world_id) REFERENCES world (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE world_guild ADD CONSTRAINT FK_F420AFA48925311C FOREIGN KEY (world_id) REFERENCES world (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE world_guild ADD CONSTRAINT FK_F420AFA45F2131EF FOREIGN KEY (guild_id) REFERENCES guild (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE capacity DROP FOREIGN KEY FK_B5E8B1746ABE5A2A');
        $this->addSql('ALTER TABLE capacity_domain DROP FOREIGN KEY FK_A523FFD666B6F0BA');
        $this->addSql('ALTER TABLE capacity_domain DROP FOREIGN KEY FK_A523FFD6115F0EE5');
        $this->addSql('ALTER TABLE city DROP FOREIGN KEY FK_2D5B0234CFD497A');
        $this->addSql('ALTER TABLE continent DROP FOREIGN KEY FK_6CC70C7C90513FD6');
        $this->addSql('ALTER TABLE domain DROP FOREIGN KEY FK_A7A91E0B9AAB7E53');
        $this->addSql('ALTER TABLE faction DROP FOREIGN KEY FK_83048B90F4AEDAB');
        $this->addSql('ALTER TABLE faction_dirigeant DROP FOREIGN KEY FK_EB4457824448F8DA');
        $this->addSql('ALTER TABLE faction_dirigeant DROP FOREIGN KEY FK_EB44578245B0BCD');
        $this->addSql('ALTER TABLE faction_hero DROP FOREIGN KEY FK_F0126BE34448F8DA');
        $this->addSql('ALTER TABLE faction_hero DROP FOREIGN KEY FK_F0126BE345B0BCD');
        $this->addSql('ALTER TABLE faction_city DROP FOREIGN KEY FK_8C8707514448F8DA');
        $this->addSql('ALTER TABLE faction_city DROP FOREIGN KEY FK_8C8707518BAC62AF');
        $this->addSql('ALTER TABLE faction_guild DROP FOREIGN KEY FK_483934794448F8DA');
        $this->addSql('ALTER TABLE faction_guild DROP FOREIGN KEY FK_483934795F2131EF');
        $this->addSql('ALTER TABLE faction_continent DROP FOREIGN KEY FK_3944458F4448F8DA');
        $this->addSql('ALTER TABLE faction_continent DROP FOREIGN KEY FK_3944458F921F4C77');
        $this->addSql('ALTER TABLE guild DROP FOREIGN KEY FK_75407DAB8AD7D5DD');
        $this->addSql('ALTER TABLE guild_continent DROP FOREIGN KEY FK_E6C245A45F2131EF');
        $this->addSql('ALTER TABLE guild_continent DROP FOREIGN KEY FK_E6C245A4921F4C77');
        $this->addSql('ALTER TABLE hero DROP FOREIGN KEY FK_51CE6E862C3B80B4');
        $this->addSql('ALTER TABLE hero_domain DROP FOREIGN KEY FK_A236761745B0BCD');
        $this->addSql('ALTER TABLE hero_domain DROP FOREIGN KEY FK_A2367617115F0EE5');
        $this->addSql('ALTER TABLE hero_faction DROP FOREIGN KEY FK_970048B745B0BCD');
        $this->addSql('ALTER TABLE hero_faction DROP FOREIGN KEY FK_970048B74448F8DA');
        $this->addSql('ALTER TABLE hero_race DROP FOREIGN KEY FK_5A84D9E945B0BCD');
        $this->addSql('ALTER TABLE hero_race DROP FOREIGN KEY FK_5A84D9E96E59D40D');
        $this->addSql('ALTER TABLE hero_city DROP FOREIGN KEY FK_ADB0607245B0BCD');
        $this->addSql('ALTER TABLE hero_city DROP FOREIGN KEY FK_ADB060728BAC62AF');
        $this->addSql('ALTER TABLE hero_continent DROP FOREIGN KEY FK_B46F391745B0BCD');
        $this->addSql('ALTER TABLE hero_continent DROP FOREIGN KEY FK_B46F3917921F4C77');
        $this->addSql('ALTER TABLE hero_guild DROP FOREIGN KEY FK_EA7F726C45B0BCD');
        $this->addSql('ALTER TABLE hero_guild DROP FOREIGN KEY FK_EA7F726C5F2131EF');
        $this->addSql('ALTER TABLE race DROP FOREIGN KEY FK_DA6FBBAFD93FF0F5');
        $this->addSql('ALTER TABLE race_domain DROP FOREIGN KEY FK_CDFF00D86E59D40D');
        $this->addSql('ALTER TABLE race_domain DROP FOREIGN KEY FK_CDFF00D8115F0EE5');
        $this->addSql('ALTER TABLE user_world DROP FOREIGN KEY FK_D8B5EA1BA76ED395');
        $this->addSql('ALTER TABLE user_world DROP FOREIGN KEY FK_D8B5EA1B8925311C');
        $this->addSql('ALTER TABLE world_guild DROP FOREIGN KEY FK_F420AFA48925311C');
        $this->addSql('ALTER TABLE world_guild DROP FOREIGN KEY FK_F420AFA45F2131EF');
        $this->addSql('DROP TABLE capacity');
        $this->addSql('DROP TABLE capacity_domain');
        $this->addSql('DROP TABLE city');
        $this->addSql('DROP TABLE continent');
        $this->addSql('DROP TABLE domain');
        $this->addSql('DROP TABLE faction');
        $this->addSql('DROP TABLE faction_dirigeant');
        $this->addSql('DROP TABLE faction_hero');
        $this->addSql('DROP TABLE faction_city');
        $this->addSql('DROP TABLE faction_guild');
        $this->addSql('DROP TABLE faction_continent');
        $this->addSql('DROP TABLE guild');
        $this->addSql('DROP TABLE guild_continent');
        $this->addSql('DROP TABLE hero');
        $this->addSql('DROP TABLE hero_domain');
        $this->addSql('DROP TABLE hero_faction');
        $this->addSql('DROP TABLE hero_race');
        $this->addSql('DROP TABLE hero_city');
        $this->addSql('DROP TABLE hero_continent');
        $this->addSql('DROP TABLE hero_guild');
        $this->addSql('DROP TABLE race');
        $this->addSql('DROP TABLE race_domain');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE user_world');
        $this->addSql('DROP TABLE visibility');
        $this->addSql('DROP TABLE world');
        $this->addSql('DROP TABLE world_guild');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
