<?php


use Phinx\Migration\AbstractMigration;

class GravatarFieldForUser extends AbstractMigration
{
    public function change()
    {
        $this->table('users')
             ->addColumn('gravatar', 'string', ['after' => 'hotel'])
             ->update();
    }
}
