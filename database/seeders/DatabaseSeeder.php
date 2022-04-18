<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\AuthorBook;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call([
            BookSeeder::class,
            AuthorSeeder::class,
        ]);

        AuthorBook::factory(100)->create();
    }
}
