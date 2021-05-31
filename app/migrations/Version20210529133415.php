<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210529133415 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE orders CHANGE id_user_id id_user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user_events CHANGE id_user id_user INT AUTO_INCREMENT NOT NULL, CHANGE id_project_id id_project_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE users CHANGE id_user_details_id id_user_details_id INT DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE user');
        $this->addSql('ALTER TABLE orders CHANGE id_user_id id_user_id INT NOT NULL');
        $this->addSql('ALTER TABLE user_events CHANGE id_user id_user INT NOT NULL, CHANGE id_project_id id_project_id INT NOT NULL');
        $this->addSql('ALTER TABLE users CHANGE id_user_details_id id_user_details_id INT NOT NULL');
    }
}
