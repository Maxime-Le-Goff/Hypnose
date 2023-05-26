<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230518091303 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE data_text DROP tarifs_text2, DROP tarifs_text3, DROP tarifs_text4, DROP rdv_text_deux, DROP rdv_text_trois, CHANGE rdv_text_un rdv_text_un VARCHAR(1000) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE data_text ADD tarifs_text2 VARCHAR(255) NOT NULL, ADD tarifs_text3 VARCHAR(255) NOT NULL, ADD tarifs_text4 VARCHAR(255) NOT NULL, ADD rdv_text_deux VARCHAR(255) DEFAULT NULL, ADD rdv_text_trois VARCHAR(255) DEFAULT NULL, CHANGE rdv_text_un rdv_text_un VARCHAR(255) NOT NULL');
    }
}
