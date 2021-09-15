<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_data = [
            'name' => 'comunicaciones',
            'password' => Hash::make('Reg1234'),
            'state' => 'activo'
        ];
        $user = new User($user_data);
        $user->save();

        
        $user_data = [
            'name' => 'gestion',
            'password' => Hash::make('Ges1234'),
            'state' => 'activo'
        ];
        $user = new User($user_data);
        $user->save();
    }
}
