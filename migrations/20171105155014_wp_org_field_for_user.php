<?php


use Phinx\Migration\AbstractMigration;

class WpOrgFieldForUser extends AbstractMigration
{
    public function change()
    {
        $this->table('users')
             ->addColumn('wporg', 'string', ['after' => 'hotel'])
             ->update();
    }
}
