<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230608151459 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE data_point ADD COLUMN code VARCHAR(10) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__data_point AS SELECT id, indicator_id, year, value FROM data_point');
        $this->addSql('DROP TABLE data_point');
        $this->addSql('CREATE TABLE data_point (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, indicator_id INTEGER NOT NULL, year VARCHAR(4) NOT NULL, value DOUBLE PRECISION NOT NULL, CONSTRAINT FK_F91A3FBB4402854A FOREIGN KEY (indicator_id) REFERENCES indicator (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO data_point (id, indicator_id, year, value) SELECT id, indicator_id, year, value FROM __temp__data_point');
        $this->addSql('DROP TABLE __temp__data_point');
        $this->addSql('CREATE INDEX IDX_F91A3FBB4402854A ON data_point (indicator_id)');
    }
}
