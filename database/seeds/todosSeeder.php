<?php

use Illuminate\Database\Seeder;
use App\Todos;

class todosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Todo::class, 3)->create();
    }
}
