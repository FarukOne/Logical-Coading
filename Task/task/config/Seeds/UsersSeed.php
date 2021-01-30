<?php

use Phinx\Seed\AbstractSeed;

class UsersSeed extends AbstractSeed
{
    public function run()
    {
        $data =[
          [
              'name'        => 'Faruk',
              'email'       => 'faruk@gmail.com',
              'password'    => sha1('123456'),
              'role'        => 'Admin',
              'created'     => date('Y-m-d H:i:s'),
              'modified'    => date('Y-m-d H:i:s'),
          ]
        ];
        $this->insert('users', $data);
    }
}
