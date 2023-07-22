<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230607174414 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE indicator (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, code VARCHAR(10) NOT NULL, format VARCHAR(20) NOT NULL, outcome VARCHAR(10) DEFAULT NULL, description CLOB DEFAULT NULL)');
        $this->addSql('CREATE TEMPORARY TABLE __temp__data_point AS SELECT id, year FROM data_point');
        $this->addSql('DROP TABLE data_point');
        $this->addSql('CREATE TABLE data_point (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, year VARCHAR(4) NOT NULL, value DOUBLE PRECISION NOT NULL)');
        $this->addSql('INSERT INTO data_point (id, year) SELECT id, year FROM __temp__data_point');
        $this->addSql('DROP TABLE __temp__data_point');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE indicator');
        $this->addSql('CREATE TEMPORARY TABLE __temp__data_point AS SELECT id, year FROM data_point');
        $this->addSql('DROP TABLE data_point');
        $this->addSql('CREATE TABLE data_point (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, year VARCHAR(4) NOT NULL, code VARCHAR(10) NOT NULL)');
        $this->addSql('INSERT INTO data_point (id, year) SELECT id, year FROM __temp__data_point');
        $this->addSql('DROP TABLE __temp__data_point');
    }
}
