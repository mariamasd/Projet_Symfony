<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231220102303 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE analyses (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, type VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE analyses_patient (analyses_id INT NOT NULL, patient_id INT NOT NULL, INDEX IDX_7A375163BCB1ED3E (analyses_id), INDEX IDX_7A3751636B899279 (patient_id), PRIMARY KEY(analyses_id, patient_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE analyses_secretaire (analyses_id INT NOT NULL, secretaire_id INT NOT NULL, INDEX IDX_21F12980BCB1ED3E (analyses_id), INDEX IDX_21F12980A90F02B2 (secretaire_id), PRIMARY KEY(analyses_id, secretaire_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE creneau (id INT AUTO_INCREMENT NOT NULL, secretaire_id INT NOT NULL, date DATETIME NOT NULL, INDEX IDX_F9668B5FA90F02B2 (secretaire_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE laborantin (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, telephone VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_F8F5AC9FA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE patient (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, telephone VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_1ADAD7EBA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE rendez_vous (id INT AUTO_INCREMENT NOT NULL, patient_id INT DEFAULT NULL, creneau_id INT DEFAULT NULL, analyses_id INT DEFAULT NULL, motif VARCHAR(255) NOT NULL, INDEX IDX_65E8AA0A6B899279 (patient_id), INDEX IDX_65E8AA0A7D0729A9 (creneau_id), INDEX IDX_65E8AA0ABCB1ED3E (analyses_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE resultat (id INT AUTO_INCREMENT NOT NULL, analyses_id INT DEFAULT NULL, resultat VARCHAR(255) NOT NULL, INDEX IDX_E7DB5DE2BCB1ED3E (analyses_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE secretaire (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, telephone VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_7DB5C2D0A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, firstname VARCHAR(255) NOT NULL, lastname VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', available_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', delivered_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE analyses_patient ADD CONSTRAINT FK_7A375163BCB1ED3E FOREIGN KEY (analyses_id) REFERENCES analyses (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE analyses_patient ADD CONSTRAINT FK_7A3751636B899279 FOREIGN KEY (patient_id) REFERENCES patient (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE analyses_secretaire ADD CONSTRAINT FK_21F12980BCB1ED3E FOREIGN KEY (analyses_id) REFERENCES analyses (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE analyses_secretaire ADD CONSTRAINT FK_21F12980A90F02B2 FOREIGN KEY (secretaire_id) REFERENCES secretaire (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE creneau ADD CONSTRAINT FK_F9668B5FA90F02B2 FOREIGN KEY (secretaire_id) REFERENCES secretaire (id)');
        $this->addSql('ALTER TABLE laborantin ADD CONSTRAINT FK_F8F5AC9FA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE patient ADD CONSTRAINT FK_1ADAD7EBA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE rendez_vous ADD CONSTRAINT FK_65E8AA0A6B899279 FOREIGN KEY (patient_id) REFERENCES patient (id)');
        $this->addSql('ALTER TABLE rendez_vous ADD CONSTRAINT FK_65E8AA0A7D0729A9 FOREIGN KEY (creneau_id) REFERENCES creneau (id)');
        $this->addSql('ALTER TABLE rendez_vous ADD CONSTRAINT FK_65E8AA0ABCB1ED3E FOREIGN KEY (analyses_id) REFERENCES analyses (id)');
        $this->addSql('ALTER TABLE resultat ADD CONSTRAINT FK_E7DB5DE2BCB1ED3E FOREIGN KEY (analyses_id) REFERENCES analyses (id)');
        $this->addSql('ALTER TABLE secretaire ADD CONSTRAINT FK_7DB5C2D0A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE analyses_patient DROP FOREIGN KEY FK_7A375163BCB1ED3E');
        $this->addSql('ALTER TABLE analyses_patient DROP FOREIGN KEY FK_7A3751636B899279');
        $this->addSql('ALTER TABLE analyses_secretaire DROP FOREIGN KEY FK_21F12980BCB1ED3E');
        $this->addSql('ALTER TABLE analyses_secretaire DROP FOREIGN KEY FK_21F12980A90F02B2');
        $this->addSql('ALTER TABLE creneau DROP FOREIGN KEY FK_F9668B5FA90F02B2');
        $this->addSql('ALTER TABLE laborantin DROP FOREIGN KEY FK_F8F5AC9FA76ED395');
        $this->addSql('ALTER TABLE patient DROP FOREIGN KEY FK_1ADAD7EBA76ED395');
        $this->addSql('ALTER TABLE rendez_vous DROP FOREIGN KEY FK_65E8AA0A6B899279');
        $this->addSql('ALTER TABLE rendez_vous DROP FOREIGN KEY FK_65E8AA0A7D0729A9');
        $this->addSql('ALTER TABLE rendez_vous DROP FOREIGN KEY FK_65E8AA0ABCB1ED3E');
        $this->addSql('ALTER TABLE resultat DROP FOREIGN KEY FK_E7DB5DE2BCB1ED3E');
        $this->addSql('ALTER TABLE secretaire DROP FOREIGN KEY FK_7DB5C2D0A76ED395');
        $this->addSql('DROP TABLE analyses');
        $this->addSql('DROP TABLE analyses_patient');
        $this->addSql('DROP TABLE analyses_secretaire');
        $this->addSql('DROP TABLE creneau');
        $this->addSql('DROP TABLE laborantin');
        $this->addSql('DROP TABLE patient');
        $this->addSql('DROP TABLE rendez_vous');
        $this->addSql('DROP TABLE resultat');
        $this->addSql('DROP TABLE secretaire');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
