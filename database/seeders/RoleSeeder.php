<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(['name' => 'Owner']);
        $manager = Role::create(['name' => 'Manager']);
        $cashier = Role::create(['name' => 'Cashier']);

        $manager->givePermissionTo([
            'edit-product',
            'delete-product',

            'edit-customer',
            'delete-customer'
        ]);

        $cashier->givePermissionTo([
            'edit-product',
            'edit-customer',
        ]);
    }
}
