<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Category::factory()->count(10)->create();
          $ids = range(1, 10);
         Film::factory()->count(40)->create()->each(function ($film) use($ids) {
          shuffle($ids);
           $film->categories()->attach(array_slice($ids, 0, rand(1, 4)));
    });
    }
}
