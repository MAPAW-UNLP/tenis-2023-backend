<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231211043802 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        // $this->addSql('CREATE TABLE configuracion (id INT AUTO_INCREMENT NOT NULL, precio DOUBLE PRECISION NOT NULL, nombre_tipo VARCHAR(30) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        // $this->addSql('ALTER TABLE clases ADD tipo_clase_nom VARCHAR(30) DEFAULT NULL');
        // $this->addSql('ALTER TABLE clases ADD CONSTRAINT FK_67CBBF101729F025 FOREIGN KEY (tipo_clase_nom) REFERENCES configuracion (nombre_tipo)');
        // $this->addSql('CREATE INDEX IDX_67CBBF101729F025 ON clases (tipo_clase_nom)');
        $this->addSql('ALTER TABLE cobro ADD hora TIME NOT NULL');
        $this->addSql('ALTER TABLE pagos ADD hora TIME NOT NULL');
        $this->addSql('ALTER TABLE profesor ADD precio_por_hora DOUBLE PRECISION DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        // $this->addSql('ALTER TABLE clases DROP FOREIGN KEY FK_67CBBF101729F025');
        // $this->addSql('DROP TABLE configuracion');
        // $this->addSql('DROP INDEX IDX_67CBBF101729F025 ON clases');
        // $this->addSql('ALTER TABLE clases DROP tipo_clase_nom');
        $this->addSql('ALTER TABLE cobro DROP hora');
        $this->addSql('ALTER TABLE pagos DROP hora');
        $this->addSql('ALTER TABLE profesor DROP precio_por_hora');
    }
}
