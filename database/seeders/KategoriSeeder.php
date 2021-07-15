<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Kategori::insert([
            ['nama'=>'Front End Development',],
            ['nama'=>'Back End Development',],
            ['nama'=>'User Interface Design',],
            ['nama'=>'User Experience Design',],
            ['nama'=>'Machine Learning',],
        ]);
    }
}
