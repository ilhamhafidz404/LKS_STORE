<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
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
        $admin = User::create([
            'name' => "admin",
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin')
        ]);
        $admin->assignRole('admin');

        $customer = User::create([
            'name' => "customer",
            'email' => 'customer@customer.com',
            'password' => bcrypt('customer')
        ]);
        $customer->assignRole('customer');
      
    }
}
