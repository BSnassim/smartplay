<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210526170055 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE client (id INT AUTO_INCREMENT NOT NULL, code_clt INT NOT NULL, des_clt VARCHAR(255) DEFAULT NULL, adr_clt VARCHAR(255) DEFAULT NULL, tel_clt VARCHAR(20) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE commande (id INT AUTO_INCREMENT NOT NULL, code_clt_cde_id INT NOT NULL, num_cde INT NOT NULL, date_cde DATE NOT NULL, heure_cde TIME NOT NULL, remise_cde NUMERIC(5, 2) DEFAULT NULL, mnt_cde INT NOT NULL, INDEX IDX_6EEAA67DC10EE90D (code_clt_cde_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE commande_jouet (commande_id INT NOT NULL, jouet_id INT NOT NULL, INDEX IDX_5255201B82EA2E54 (commande_id), INDEX IDX_5255201B2E9710B0 (jouet_id), PRIMARY KEY(commande_id, jouet_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE fournisseur (id INT AUTO_INCREMENT NOT NULL, code_four INT NOT NULL, des_four VARCHAR(255) DEFAULT NULL, adr_four VARCHAR(255) DEFAULT NULL, contact_four VARCHAR(255) DEFAULT NULL, tel_four VARCHAR(20) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE jouet (id INT AUTO_INCREMENT NOT NULL, code_four_jouet_id INT NOT NULL, code_jouet INT NOT NULL, des_jouet VARCHAR(255) DEFAULT NULL, qte_stock_jouet INT NOT NULL, pu_jouet INT DEFAULT NULL, INDEX IDX_6B3DFFD85D20E737 (code_four_jouet_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE jouet_commande (jouet_id INT NOT NULL, commande_id INT NOT NULL, INDEX IDX_62393DD12E9710B0 (jouet_id), INDEX IDX_62393DD182EA2E54 (commande_id), PRIMARY KEY(jouet_id, commande_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE commande ADD CONSTRAINT FK_6EEAA67DC10EE90D FOREIGN KEY (code_clt_cde_id) REFERENCES client (id)');
        $this->addSql('ALTER TABLE commande_jouet ADD CONSTRAINT FK_5255201B82EA2E54 FOREIGN KEY (commande_id) REFERENCES commande (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE commande_jouet ADD CONSTRAINT FK_5255201B2E9710B0 FOREIGN KEY (jouet_id) REFERENCES jouet (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE jouet ADD CONSTRAINT FK_6B3DFFD85D20E737 FOREIGN KEY (code_four_jouet_id) REFERENCES fournisseur (id)');
        $this->addSql('ALTER TABLE jouet_commande ADD CONSTRAINT FK_62393DD12E9710B0 FOREIGN KEY (jouet_id) REFERENCES jouet (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE jouet_commande ADD CONSTRAINT FK_62393DD182EA2E54 FOREIGN KEY (commande_id) REFERENCES commande (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commande DROP FOREIGN KEY FK_6EEAA67DC10EE90D');
        $this->addSql('ALTER TABLE commande_jouet DROP FOREIGN KEY FK_5255201B82EA2E54');
        $this->addSql('ALTER TABLE jouet_commande DROP FOREIGN KEY FK_62393DD182EA2E54');
        $this->addSql('ALTER TABLE jouet DROP FOREIGN KEY FK_6B3DFFD85D20E737');
        $this->addSql('ALTER TABLE commande_jouet DROP FOREIGN KEY FK_5255201B2E9710B0');
        $this->addSql('ALTER TABLE jouet_commande DROP FOREIGN KEY FK_62393DD12E9710B0');
        $this->addSql('DROP TABLE client');
        $this->addSql('DROP TABLE commande');
        $this->addSql('DROP TABLE commande_jouet');
        $this->addSql('DROP TABLE fournisseur');
        $this->addSql('DROP TABLE jouet');
        $this->addSql('DROP TABLE jouet_commande');
    }
}
