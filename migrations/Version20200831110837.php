<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200831110837 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE compte_bloque (id INT AUTO_INCREMENT NOT NULL, numero_agence VARCHAR(255) NOT NULL, numero_compte INT NOT NULL, cle_rib INT NOT NULL, solde_compte NUMERIC(10, 0) NOT NULL, date_ouverture DATE NOT NULL, frais_ouverture INT NOT NULL, montant_remuneration INT NOT NULL, delai_blocage DATE NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE compte_bloque');
    }
}
