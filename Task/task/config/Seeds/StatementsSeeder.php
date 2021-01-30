<?php
declare(strict_types=1);

use Phinx\Seed\AbstractSeed;

class StatementsSeeder extends  AbstractSeed
{
    public function run()
    {
        $file = fopen(dirname(__FILE__).DS.'statements.csv', 'r');
        $data=[];
        while (($column = fgetcsv($file)) !== FALSE){
               $data[] =[
                       'transactionId'   => $column[0],
                       'narration'       => $column[1],
                       'purpose'         => $column[2],
                       'deliverTo'       => $column[3],
                       'amount'          => $column[4],
                       'created'         => date('Y-m-d H:i:s'),
                   ];
        }
        $this->insert('statements', $data);
    }
}
