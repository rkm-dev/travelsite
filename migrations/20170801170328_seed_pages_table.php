<?php

use Phinx\Migration\AbstractMigration;

class SeedPagesTable extends AbstractMigration
{
    public function up()
    {
        $this->execute("
            insert into pages (browser_title, page_content)
            values
            ('Travelsite: About', 'This Page shows information about the company')
        ");
    }

    public function down()
    {
        
    }
}
