<?php

namespace Database\Seeders;

use App\Models\Todo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TodosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $todo = new Todo();
        $todo->todo = "Todo - 1";
        $todo->is_completed = 0;
        $todo->save();

        $todo = new Todo();
        $todo->todo = "Todo - 2";
        $todo->is_completed = 0;
        $todo->save();

        $todo = new Todo();
        $todo->todo = "Todo - 3";
        $todo->is_completed = 0;
        $todo->save();
    }
}
