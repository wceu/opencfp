<?php


use Phinx\Migration\AbstractMigration;

class WpSlackFieldForUser extends AbstractMigration
{
    public function change()
    {
        $this->table('users')
             ->addColumn('slack', 'string', ['after' => 'hotel'])
             ->update();
    }
}
