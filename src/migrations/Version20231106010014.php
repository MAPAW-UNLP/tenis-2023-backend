<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231106010014 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cobro DROP FOREIGN KEY FK_F0A26526BF396750');
        $this->addSql('ALTER TABLE cobro ADD alumno_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE cobro ADD CONSTRAINT FK_F0A26526FC28E5EE FOREIGN KEY (alumno_id) REFERENCES alumno (id)');
        $this->addSql('CREATE INDEX IDX_F0A26526FC28E5EE ON cobro (alumno_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cobro DROP FOREIGN KEY FK_F0A26526FC28E5EE');
        $this->addSql('DROP INDEX IDX_F0A26526FC28E5EE ON cobro');
        $this->addSql('ALTER TABLE cobro DROP alumno_id');
        $this->addSql('ALTER TABLE cobro ADD CONSTRAINT FK_F0A26526BF396750 FOREIGN KEY (id) REFERENCES alumno (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
    }
}
