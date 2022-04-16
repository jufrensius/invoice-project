<?php

namespace Database\Seeders;

use Database\Factories\BankFactory;
use Illuminate\Database\Seeder;
use App\Models\Bank;

class BanksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bank::factory()->times(50)->create();
    }
}
