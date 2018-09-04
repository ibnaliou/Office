<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180817125130 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE arrondissement (id INT AUTO_INCREMENT NOT NULL, commune INT NOT NULL, nom_arrond VARCHAR(100) NOT NULL, INDEX IDX_3A3B64C4E2E2D1EE (commune), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE bien (id INT AUTO_INCREMENT NOT NULL, proprietaire INT NOT NULL, etat TINYINT(1) NOT NULL, nom_complet VARCHAR(100) NOT NULL, quartier VARCHAR(100) NOT NULL, date_pub DATETIME NOT NULL, description LONGTEXT NOT NULL, prix_location INT NOT NULL, nbre_deplaces INT NOT NULL, cArrondissement INT NOT NULL, typeDeBien INT NOT NULL, INDEX IDX_45EDC386A27449A6 (cArrondissement), INDEX IDX_45EDC3863476C92B (typeDeBien), INDEX IDX_45EDC38669E399D6 (proprietaire), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE carrondissement (id INT AUTO_INCREMENT NOT NULL, arrondissement INT NOT NULL, nom_carrond VARCHAR(100) NOT NULL, INDEX IDX_6F10317E3A3B64C4 (arrondissement), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE client (id INT AUTO_INCREMENT NOT NULL, nom_complet VARCHAR(100) NOT NULL, telephone VARCHAR(100) NOT NULL, mail VARCHAR(30) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE commentaire (id INT AUTO_INCREMENT NOT NULL, bien INT NOT NULL, user INT NOT NULL, contenu VARCHAR(255) NOT NULL, etat TINYINT(1) NOT NULL, date_pub DATETIME NOT NULL, INDEX IDX_67F068BC45EDC386 (bien), INDEX IDX_67F068BC8D93D649 (user), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE commune (id INT AUTO_INCREMENT NOT NULL, departement INT NOT NULL, nom_com VARCHAR(100) NOT NULL, INDEX IDX_E2E2D1EEC1765B63 (departement), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE departement (id INT AUTO_INCREMENT NOT NULL, region INT NOT NULL, nom_dep VARCHAR(100) NOT NULL, INDEX IDX_C1765B63F62F176 (region), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE image (id INT AUTO_INCREMENT NOT NULL, bien INT NOT NULL, image LONGBLOB NOT NULL, INDEX IDX_C53D045F45EDC386 (bien), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE jour (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ouvrable (id INT AUTO_INCREMENT NOT NULL, bien INT NOT NULL, jour INT NOT NULL, disponible TINYINT(1) NOT NULL, ouverture TIME DEFAULT NULL, fermeture TIME DEFAULT NULL, INDEX IDX_B089F1D545EDC386 (bien), INDEX IDX_B089F1D5DA17D9C5 (jour), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE pays (id INT AUTO_INCREMENT NOT NULL, nom_pays VARCHAR(100) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE periode (id INT AUTO_INCREMENT NOT NULL, reservation INT NOT NULL, date DATETIME NOT NULL, heure_debut TIME NOT NULL, heure_fin TIME NOT NULL, etat TINYINT(1) NOT NULL, INDEX IDX_93C32DF342C84955 (reservation), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE proprietaire (id INT AUTO_INCREMENT NOT NULL, nom_complet VARCHAR(100) NOT NULL, num_piece VARCHAR(25) NOT NULL, adresse VARCHAR(100) NOT NULL, telephone VARCHAR(20) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE region (id INT AUTO_INCREMENT NOT NULL, pays INT NOT NULL, nom_region VARCHAR(100) NOT NULL, INDEX IDX_F62F176349F3CAE (pays), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reservation (id INT AUTO_INCREMENT NOT NULL, bien INT NOT NULL, client INT NOT NULL, date_reservation DATETIME NOT NULL, debut DATETIME NOT NULL, fin DATETIME NOT NULL, etat TINYINT(1) NOT NULL, INDEX IDX_42C8495545EDC386 (bien), INDEX IDX_42C84955C7440455 (client), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE typedebien (id INT AUTO_INCREMENT NOT NULL, nom_type VARCHAR(70) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, proprietaire INT DEFAULT NULL, email VARCHAR(255) NOT NULL, username VARCHAR(255) NOT NULL, password VARCHAR(64) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', etat TINYINT(1) NOT NULL, photo LONGBLOB DEFAULT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), UNIQUE INDEX UNIQ_8D93D649F85E0677 (username), INDEX IDX_8D93D64969E399D6 (proprietaire), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE video (id INT AUTO_INCREMENT NOT NULL, bien INT NOT NULL, video LONGBLOB NOT NULL, INDEX IDX_7CC7DA2C45EDC386 (bien), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE arrondissement ADD CONSTRAINT FK_3A3B64C4E2E2D1EE FOREIGN KEY (commune) REFERENCES commune (id)');
        $this->addSql('ALTER TABLE bien ADD CONSTRAINT FK_45EDC386A27449A6 FOREIGN KEY (cArrondissement) REFERENCES carrondissement (id)');
        $this->addSql('ALTER TABLE bien ADD CONSTRAINT FK_45EDC3863476C92B FOREIGN KEY (typeDeBien) REFERENCES typedebien (id)');
        $this->addSql('ALTER TABLE bien ADD CONSTRAINT FK_45EDC38669E399D6 FOREIGN KEY (proprietaire) REFERENCES proprietaire (id)');
        $this->addSql('ALTER TABLE carrondissement ADD CONSTRAINT FK_6F10317E3A3B64C4 FOREIGN KEY (arrondissement) REFERENCES arrondissement (id)');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BC45EDC386 FOREIGN KEY (bien) REFERENCES bien (id)');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BC8D93D649 FOREIGN KEY (user) REFERENCES user (id)');
        $this->addSql('ALTER TABLE commune ADD CONSTRAINT FK_E2E2D1EEC1765B63 FOREIGN KEY (departement) REFERENCES departement (id)');
        $this->addSql('ALTER TABLE departement ADD CONSTRAINT FK_C1765B63F62F176 FOREIGN KEY (region) REFERENCES region (id)');
        $this->addSql('ALTER TABLE image ADD CONSTRAINT FK_C53D045F45EDC386 FOREIGN KEY (bien) REFERENCES bien (id)');
        $this->addSql('ALTER TABLE ouvrable ADD CONSTRAINT FK_B089F1D545EDC386 FOREIGN KEY (bien) REFERENCES bien (id)');
        $this->addSql('ALTER TABLE ouvrable ADD CONSTRAINT FK_B089F1D5DA17D9C5 FOREIGN KEY (jour) REFERENCES jour (id)');
        $this->addSql('ALTER TABLE periode ADD CONSTRAINT FK_93C32DF342C84955 FOREIGN KEY (reservation) REFERENCES reservation (id)');
        $this->addSql('ALTER TABLE region ADD CONSTRAINT FK_F62F176349F3CAE FOREIGN KEY (pays) REFERENCES pays (id)');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C8495545EDC386 FOREIGN KEY (bien) REFERENCES bien (id)');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C84955C7440455 FOREIGN KEY (client) REFERENCES client (id)');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D64969E399D6 FOREIGN KEY (proprietaire) REFERENCES proprietaire (id)');
        $this->addSql('ALTER TABLE video ADD CONSTRAINT FK_7CC7DA2C45EDC386 FOREIGN KEY (bien) REFERENCES bien (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE carrondissement DROP FOREIGN KEY FK_6F10317E3A3B64C4');
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BC45EDC386');
        $this->addSql('ALTER TABLE image DROP FOREIGN KEY FK_C53D045F45EDC386');
        $this->addSql('ALTER TABLE ouvrable DROP FOREIGN KEY FK_B089F1D545EDC386');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C8495545EDC386');
        $this->addSql('ALTER TABLE video DROP FOREIGN KEY FK_7CC7DA2C45EDC386');
        $this->addSql('ALTER TABLE bien DROP FOREIGN KEY FK_45EDC386A27449A6');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C84955C7440455');
        $this->addSql('ALTER TABLE arrondissement DROP FOREIGN KEY FK_3A3B64C4E2E2D1EE');
        $this->addSql('ALTER TABLE commune DROP FOREIGN KEY FK_E2E2D1EEC1765B63');
        $this->addSql('ALTER TABLE ouvrable DROP FOREIGN KEY FK_B089F1D5DA17D9C5');
        $this->addSql('ALTER TABLE region DROP FOREIGN KEY FK_F62F176349F3CAE');
        $this->addSql('ALTER TABLE bien DROP FOREIGN KEY FK_45EDC38669E399D6');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D64969E399D6');
        $this->addSql('ALTER TABLE departement DROP FOREIGN KEY FK_C1765B63F62F176');
        $this->addSql('ALTER TABLE periode DROP FOREIGN KEY FK_93C32DF342C84955');
        $this->addSql('ALTER TABLE bien DROP FOREIGN KEY FK_45EDC3863476C92B');
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BC8D93D649');
        $this->addSql('DROP TABLE arrondissement');
        $this->addSql('DROP TABLE bien');
        $this->addSql('DROP TABLE carrondissement');
        $this->addSql('DROP TABLE client');
        $this->addSql('DROP TABLE commentaire');
        $this->addSql('DROP TABLE commune');
        $this->addSql('DROP TABLE departement');
        $this->addSql('DROP TABLE image');
        $this->addSql('DROP TABLE jour');
        $this->addSql('DROP TABLE ouvrable');
        $this->addSql('DROP TABLE pays');
        $this->addSql('DROP TABLE periode');
        $this->addSql('DROP TABLE proprietaire');
        $this->addSql('DROP TABLE region');
        $this->addSql('DROP TABLE reservation');
        $this->addSql('DROP TABLE typedebien');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE video');
    }
}
