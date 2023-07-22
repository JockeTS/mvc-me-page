<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230709094623 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE indicator ADD COLUMN definition CLOB DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__indicator AS SELECT id, code, format, outcome, description FROM indicator');
        $this->addSql('DROP TABLE indicator');
        $this->addSql('CREATE TABLE indicator (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, code VARCHAR(10) NOT NULL, format VARCHAR(20) NOT NULL, outcome VARCHAR(10) DEFAULT NULL, description CLOB DEFAULT NULL)');
        $this->addSql('INSERT INTO indicator (id, code, format, outcome, description) SELECT id, code, format, outcome, description FROM __temp__indicator');
        $this->addSql('DROP TABLE __temp__indicator');
    }
}
