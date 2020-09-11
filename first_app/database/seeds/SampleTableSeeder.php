<?php

use Illuminate\Database\Seeder;

class SampleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sample')->insert([
            'name'=>'koyama',
            'mail'=>'shun@koyama.com',
            'age'=>'31',
        ]);
    }
}
