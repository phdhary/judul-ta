<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::insert([
            [
                'name'=>'El John Sines',
                'email'=>'jonsines@gmail.com',
                'password'=> Hash::make('Jonsines1'),
                'role'=> 2,
                'link_telegram'=> 'jonsines',
            ],
            [
                'name'=>'Dwiky Okta Reza',
                'email'=>'dwikyokta@gmail.com',
                'password'=> Hash::make('Dwikyokta1'),
                'role'=> 2,
                'link_telegram'=> 'dwikyokta',
            ],
            [
                'name'=>'Ade Syahreza',
                'email'=>'adesyahreza@gmail.com',
                'password'=> Hash::make('Adesyahreza1'),
                'role'=> 2,
                'link_telegram'=> 'adesyahreza',
            ],
            [
                'name'=>'Alfada Turmajambi',
                'email'=>'alfadatur@gmail.com',
                'password'=> Hash::make('Dewaexodia1'),
                'role'=> 2,
                'link_telegram'=> 'alfadatur',
            ],
            [
                'name'=>'Exodia',
                'email'=>'exodia@admin.com',
                'password'=> Hash::make('Dewaexodia1'),
                'role'=> 1,
                'link_telegram'=> 'exodia',
            ],
            
        ]);
    }
}
