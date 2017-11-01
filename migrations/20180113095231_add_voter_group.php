<?php


use Phinx\Migration\AbstractMigration;

class AddVoterGroup extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function up()
    {
        $this->execute("INSERT INTO groups (name, permissions, created_at, updated_at) VALUES ('Voters', '{\"vote\":1}', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP)");
    }

    public function down()
    {
        $this->execute("DELETE FROM groups WHERE name='Voters'");

    }
}
