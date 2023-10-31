<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231031151527 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE alumno (id INT AUTO_INCREMENT NOT NULL, nombre VARCHAR(30) NOT NULL, apellido VARCHAR(50) NOT NULL, telefono VARCHAR(15) NOT NULL, fecha_nac DATE DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE cobro (id INT AUTO_INCREMENT NOT NULL, id_persona INT NOT NULL, id_tipo_clase INT NOT NULL, cantidad INT NOT NULL, fecha DATE NOT NULL, concepto VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE cobro ADD CONSTRAINT FK_F0A26526BF396750 FOREIGN KEY (id) REFERENCES alumno (id)');
        $this->addSql('ALTER TABLE pagos ADD motivo VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE pagos ADD CONSTRAINT FK_DA9B0DFFBF396750 FOREIGN KEY (id) REFERENCES profesor (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cobro DROP FOREIGN KEY FK_F0A26526BF396750');
        $this->addSql('DROP TABLE alumno');
        $this->addSql('DROP TABLE cobro');
        $this->addSql('ALTER TABLE pagos DROP FOREIGN KEY FK_DA9B0DFFBF396750');
        $this->addSql('ALTER TABLE pagos DROP motivo');
    }
}
