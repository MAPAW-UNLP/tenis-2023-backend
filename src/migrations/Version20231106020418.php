<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231106020418 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE pagos DROP FOREIGN KEY FK_DA9B0DFFBF396750');
        $this->addSql('ALTER TABLE pagos ADD profesor_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE pagos ADD CONSTRAINT FK_DA9B0DFFE52BD977 FOREIGN KEY (profesor_id) REFERENCES profesor (id)');
        $this->addSql('CREATE INDEX IDX_DA9B0DFFE52BD977 ON pagos (profesor_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE pagos DROP FOREIGN KEY FK_DA9B0DFFE52BD977');
        $this->addSql('DROP INDEX IDX_DA9B0DFFE52BD977 ON pagos');
        $this->addSql('ALTER TABLE pagos DROP profesor_id');
        $this->addSql('ALTER TABLE pagos ADD CONSTRAINT FK_DA9B0DFFBF396750 FOREIGN KEY (id) REFERENCES profesor (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
    }
}
