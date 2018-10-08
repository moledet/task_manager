<?php

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Task::truncate();

        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 10; $i++) {
            \App\Task::create([
                'title' => $faker->sentence,
                'description' => $faker->paragraph,
                'status_id'=> rand(1,3),
            ]);
        }
    }
}
