<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231212140259 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE analyses_secretaire (analyses_id INT NOT NULL, secretaire_id INT NOT NULL, INDEX IDX_21F12980BCB1ED3E (analyses_id), INDEX IDX_21F12980A90F02B2 (secretaire_id), PRIMARY KEY(analyses_id, secretaire_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE analyses_secretaire ADD CONSTRAINT FK_21F12980BCB1ED3E FOREIGN KEY (analyses_id) REFERENCES analyses (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE analyses_secretaire ADD CONSTRAINT FK_21F12980A90F02B2 FOREIGN KEY (secretaire_id) REFERENCES secretaire (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE analyses_secretaire DROP FOREIGN KEY FK_21F12980BCB1ED3E');
        $this->addSql('ALTER TABLE analyses_secretaire DROP FOREIGN KEY FK_21F12980A90F02B2');
        $this->addSql('DROP TABLE analyses_secretaire');
    }
}
