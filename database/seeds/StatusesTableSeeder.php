<?php

use Illuminate\Database\Seeder;

class StatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        \App\Status::truncate();

        \App\Status::create([
           'name'=>'new'
        ]);

        \App\Status::create([
            'name'=>'done'
        ]);

        \App\Status::create([
            'name'=>'deleted'
        ]);

    }
}
