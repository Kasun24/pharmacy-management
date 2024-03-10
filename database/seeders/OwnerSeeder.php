<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class OwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Creating Owner User
        $owner = User::create([
            'name' => 'Owner',
            'username' => 'owner',
            'email' => 'owner@example.com',
            'password' => Hash::make('own1234')
        ]);
        $owner->assignRole('Owner');

        // Creating Manager User
        $manager = User::create([
            'name' => 'Manager',
            'username' => 'manager',
            'email' => 'manager@example.com',
            'password' => Hash::make('man1234')
        ]);
        $manager->assignRole('Manager');

        // Creating Cashier User
        $cashier = User::create([
            'name' => 'Cashier',
            'username' => 'cashier',
            'email' => 'cashier@example.com',
            'password' => Hash::make('cash1234')
        ]);
        $cashier->assignRole('Cashier');
    }
}
