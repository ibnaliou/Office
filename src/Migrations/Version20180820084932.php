<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180820084932 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE commentaire (id INT AUTO_INCREMENT NOT NULL, bien INT NOT NULL, user INT NOT NULL, contenu VARCHAR(255) NOT NULL, etat TINYINT(1) NOT NULL, date_pub DATETIME NOT NULL, INDEX IDX_67F068BC45EDC386 (bien), INDEX IDX_67F068BC8D93D649 (user), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BC45EDC386 FOREIGN KEY (bien) REFERENCES bien (id)');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BC8D93D649 FOREIGN KEY (user) REFERENCES user (id)');
        $this->addSql('ALTER TABLE client ADD nom_complet VARCHAR(100) NOT NULL, ADD mail VARCHAR(30) NOT NULL, DROP structure, DROP adresse, CHANGE telephone telephone VARCHAR(100) NOT NULL');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649C7440455');
        $this->addSql('DROP INDEX IDX_8D93D649C7440455 ON user');
        $this->addSql('ALTER TABLE user DROP client');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE commentaire');
        $this->addSql('ALTER TABLE client ADD adresse VARCHAR(100) NOT NULL COLLATE utf8mb4_unicode_ci, DROP mail, CHANGE telephone telephone VARCHAR(15) NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE nom_complet structure VARCHAR(100) NOT NULL COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE user ADD client INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649C7440455 FOREIGN KEY (client) REFERENCES client (id)');
        $this->addSql('CREATE INDEX IDX_8D93D649C7440455 ON user (client)');
    }
}
