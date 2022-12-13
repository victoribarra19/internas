<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'Administrador',
            'pc'=>'2',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('4dm1n1nt3rn4s2022') 
         ])->assignRole('Admin');
    }
}
