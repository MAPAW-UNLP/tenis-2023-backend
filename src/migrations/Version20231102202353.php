<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231102202353 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE alumno DROP apellido');
        $this->addSql('ALTER TABLE cobro ADD monto DOUBLE PRECISION NOT NULL, ADD descripcion VARCHAR(100) DEFAULT NULL, DROP cantidad, CHANGE id_persona id_persona INT DEFAULT NULL, CHANGE id_tipo_clase id_tipo_clase INT DEFAULT NULL');
        $this->addSql('ALTER TABLE pagos ADD monto DOUBLE PRECISION NOT NULL, ADD descripcion VARCHAR(100) DEFAULT NULL, CHANGE cantidad cantidad INT DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE alumno ADD apellido VARCHAR(50) NOT NULL');
        $this->addSql('ALTER TABLE cobro ADD cantidad INT NOT NULL, DROP monto, DROP descripcion, CHANGE id_persona id_persona INT NOT NULL, CHANGE id_tipo_clase id_tipo_clase INT NOT NULL');
        $this->addSql('ALTER TABLE pagos DROP monto, DROP descripcion, CHANGE cantidad cantidad INT NOT NULL');
    }
}
