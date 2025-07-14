<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $superadmin = User::create([
            'name'      => 'Admin',
            'fullname'  => "Santiago admin",
            'email'     => 'email@test.com',
            'password'  => Hash::make( md5('test123'))
        ]);

        $superadmin->assignRole('SuperAdmin'); // Reemplaza 'admin' con el nombre del rol

        $gestor = User::create([
            'name'      => 'Gestor',
            'fullname'  => "Santiago gestor",
            'email'     => 'gestor@test.com',
            'password'  => Hash::make( md5('test123'))
        ]);

        $gestor->assignRole('Gestor'); // Reemplaza 'admin' con el nombre del rol
        

        $cliente = User::create([
            'name'      => 'Cliente',
            'fullname'  => "Santiago cliente",
            'email'     => 'cliente@test.com',
            'password'  => Hash::make( md5('test123'))
        ]);

        $cliente->assignRole('Cliente'); // Reemplaza 'admin' con el nombre del rol
    }
}
