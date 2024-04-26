<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UserSeeder::class);

        \App\Models\Inventory::factory(50)->create()->each(function ($inventory) {
            $inventory->items()->createMany(
                \App\Models\Item::factory(10)->make()->toArray()
            );
        });
    }
}
