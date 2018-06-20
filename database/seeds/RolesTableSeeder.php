<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert(array(

			array(
                'id' => 1,
                'name' => 'Doctor',
                ),
            array(
                'id' => 2,
                'name' => 'Nurse',
                ),
            array(
                'id' => 3,
                'name' => 'Administrator',
                ),
        ));

    }
}
