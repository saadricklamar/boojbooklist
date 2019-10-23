<?php

use Illuminate\Database\Seeder;
use App\Books;

class BookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Books::class, 40)->create();
    }
}
