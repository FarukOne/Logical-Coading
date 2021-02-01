<?php
declare(strict_types=1);

use Phinx\Seed\AbstractSeed;

class StatementsSeeder extends  AbstractSeed
{
    public function run()
    {
        $file = fopen(dirname(__FILE__).DS.'statements.csv', 'r');
        $data=[];
        $n=0;
        while (($column = fgetcsv($file)) !== FALSE){
            $newTimestamp = strtotime('+'.$n.'minutes', strtotime('2019-11-17 05:05'));
               $data[] =[
                       'transaction_id'  => $column[0],
                       'narration'       => $column[1],
                       'purpose'         => $column[2],
                       'deliver_to'      => $column[3],
                       'amount'          => $column[4],
                       'created'         => date('Y-m-d H:i:s', $newTimestamp),
                   ];
            $n +=10;
        }
       $this->insert('statements', $data);
    }
}
