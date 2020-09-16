<?php

use Illuminate\Database\Seeder;

class BaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $imahero = factory(App\User::class)->create();
        factory(App\Note::class, 5)->create(['user_id' => $imahero->id]);
    }
}
