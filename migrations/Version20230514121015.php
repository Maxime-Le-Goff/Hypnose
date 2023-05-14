<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230514121015 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE avis (id INT AUTO_INCREMENT NOT NULL, message VARCHAR(1000) NOT NULL, user_id INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE categorie (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE data_text (id INT AUTO_INCREMENT NOT NULL, home_pres VARCHAR(255) NOT NULL, text_pres VARCHAR(800) NOT NULL, home_values VARCHAR(255) NOT NULL, tarifs_title VARCHAR(255) NOT NULL, tarifs_text1 VARCHAR(255) NOT NULL, tarifs_text2 VARCHAR(255) NOT NULL, tarifs_text3 VARCHAR(255) NOT NULL, tarifs_text4 VARCHAR(255) NOT NULL, avis_title VARCHAR(255) NOT NULL, avis_text VARCHAR(255) NOT NULL, new_avis_title VARCHAR(255) NOT NULL, new_avis_text VARCHAR(255) NOT NULL, rdv_title VARCHAR(255) NOT NULL, rdv_text1 VARCHAR(255) NOT NULL, rdv_text2 VARCHAR(255) NOT NULL, rdv_text3 VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE skill (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE avis');
        $this->addSql('DROP TABLE categorie');
        $this->addSql('DROP TABLE data_text');
        $this->addSql('DROP TABLE skill');
    }
}
