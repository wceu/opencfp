<?php


use Phinx\Migration\AbstractMigration;

class NationalityFieldForUser extends AbstractMigration
{
    public function change()
    {
        $this->table('users')
             ->addColumn('nationality', 'string', ['after' => 'hotel'])
             ->update();
    }
}
