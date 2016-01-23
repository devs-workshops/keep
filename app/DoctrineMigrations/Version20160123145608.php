<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20160123145608 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP INDEX uniq_ed2381915e237e06 ON note_label');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_6BB7F33F5E237E06 ON note_label (name)');
        $this->addSql('ALTER TABLE note ADD color VARCHAR(20) DEFAULT NULL');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE note DROP color');
        $this->addSql('DROP INDEX uniq_6bb7f33f5e237e06 ON note_label');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_ED2381915E237E06 ON note_label (name)');
    }
}
