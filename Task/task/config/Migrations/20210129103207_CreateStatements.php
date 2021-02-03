<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateStatements extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('statements');
        $table->addColumn('transaction_id', 'integer', [
            'autoIncrement' => true,
        ]);
        $table->addColumn('narration', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('purpose', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('amount', 'integer', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('deliver_to', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('created', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->create();
    }
}
