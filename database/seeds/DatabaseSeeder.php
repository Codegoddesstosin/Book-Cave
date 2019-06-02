<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 10)->create();
        factory(App\post::class, 1000)->create();
        // $this->call(UsersTableSeeder::class);
        factory(App\Book::class, 10)->create();
        factory(App\Review::class, 10)->create();
    }
}
