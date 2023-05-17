<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230517132411 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE data_text ADD rdv_text_un VARCHAR(255) NOT NULL, ADD rdv_text_deux VARCHAR(255) NOT NULL, ADD rdv_text_trois VARCHAR(255) NOT NULL, DROP rdv_text1, DROP rdv_text2, DROP rdv_text3');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE data_text ADD rdv_text1 VARCHAR(255) NOT NULL, ADD rdv_text2 VARCHAR(255) NOT NULL, ADD rdv_text3 VARCHAR(255) NOT NULL, DROP rdv_text_un, DROP rdv_text_deux, DROP rdv_text_trois');
    }
}
