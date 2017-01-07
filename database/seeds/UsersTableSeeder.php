<?php

use Illuminate\Database\Seeder;

use App\User;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Usuário Admin',
            'login' => 'admin',
            'email' => 'admin@marlonluan.com.br',
            'password' => bcrypt('admin')
        ]);
    }
}
