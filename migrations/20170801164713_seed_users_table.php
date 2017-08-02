<?php

use Phinx\Migration\AbstractMigration;

class SeedUsersTable extends AbstractMigration
{
    public function up()
    {
        $password_hash = password_hash('tempPassword', PASSWORD_DEFAULT);

        $this->execute("
            insert into users (first_name, last_name, email, password)
            values
            ('Rahul', 'M', 'rkm@rkm.com', '$password_hash')
        ");
    }

    public function down()
    {
        
    }
}
