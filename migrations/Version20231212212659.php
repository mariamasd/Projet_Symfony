<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231212212659 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE rendez_vous ADD creneau_id INT DEFAULT NULL, ADD analyses_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE rendez_vous ADD CONSTRAINT FK_65E8AA0A7D0729A9 FOREIGN KEY (creneau_id) REFERENCES creneau (id)');
        $this->addSql('ALTER TABLE rendez_vous ADD CONSTRAINT FK_65E8AA0ABCB1ED3E FOREIGN KEY (analyses_id) REFERENCES analyses (id)');
        $this->addSql('CREATE INDEX IDX_65E8AA0A7D0729A9 ON rendez_vous (creneau_id)');
        $this->addSql('CREATE INDEX IDX_65E8AA0ABCB1ED3E ON rendez_vous (analyses_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE rendez_vous DROP FOREIGN KEY FK_65E8AA0A7D0729A9');
        $this->addSql('ALTER TABLE rendez_vous DROP FOREIGN KEY FK_65E8AA0ABCB1ED3E');
        $this->addSql('DROP INDEX IDX_65E8AA0A7D0729A9 ON rendez_vous');
        $this->addSql('DROP INDEX IDX_65E8AA0ABCB1ED3E ON rendez_vous');
        $this->addSql('ALTER TABLE rendez_vous DROP creneau_id, DROP analyses_id');
    }
}
