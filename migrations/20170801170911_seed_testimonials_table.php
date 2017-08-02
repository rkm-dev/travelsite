<?php

use Phinx\Migration\AbstractMigration;

class SeedTestimonialsTable extends AbstractMigration
{
    public function up()
    {
        $this->execute("
            insert into testimonials (title, testimonial, user_id)
            values
            ('Awasome site', 'This is a very helpful site', 1)
        ");
    }

    public function down()
    {
        
    }
}
