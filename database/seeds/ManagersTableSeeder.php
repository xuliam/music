<?php

use Illuminate\Database\Seeder;

class ManagersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'username'=>'admin',
            'password'=>bcrypt('admin1111')
        ];
        DB::table('managers')->insert($data);
    }
}
