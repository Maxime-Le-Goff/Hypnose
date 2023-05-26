<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230517133635 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE data_text CHANGE rdv_text_deux rdv_text_deux VARCHAR(255) DEFAULT NULL, CHANGE rdv_text_trois rdv_text_trois VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE data_text CHANGE rdv_text_deux rdv_text_deux VARCHAR(255) NOT NULL, CHANGE rdv_text_trois rdv_text_trois VARCHAR(255) NOT NULL');
    }
}
